<?php

namespace App\Services\Firebase\Firestore;

use App\Models\SKPUsers;
use App\Services\Firebase\Contracts\FireStore;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

final class FirestoreRepository implements FireStore
{
    public function create(string $collection, array $data): array
    {
        $firestore = app('firebase.firestore')
            ->database()
            ->collection($collection)
            ->newDocument();

        return $firestore->set($data);
    }

    public function fetch(string $collection): Collection
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection($collection)
            ->documents();

        if ($data->isEmpty()) {
            return collect();
        }

        return collect($data->rows());
    }

    public function edit(string $collection, string $document, array $data): array
    {
        $firestore = app('firebase.firestore')
            ->database()
            ->collection($collection)
            ->document($document);

        $document = $firestore->set($data);

        return $document;
    }

    public function destroy(string $collection, string $document): void
    {
        app('firebase.firestore')
            ->database()
            ->collection($collection)
            ->document($document)
            ->delete();
    }


    public function login(string $email, string $password): array
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection('user')
            ->where('email', '=', $email)
            ->documents();


        if ($data->isEmpty()) {
            return array();
        }

        $result = array();
        foreach ($data as $d) {
            $eachData = $d->data();
            if (password_verify($password, $eachData["password"])) {
                array_push($result, $d->data());
            }
        }
        return $result;
    }

    public function checkIfThereIsAnAdmin(): bool
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection('user')
            ->where('userType', '=', 1)
            ->documents();

        if ($data->isEmpty()) {
            $newUser = new SKPUsers();
            $newUser->email = 'admin@demo.com';
            $newUser->password = Hash::make('admin123');
            $newUser->firstName = 'Administrator';
            $newUser->middleName = 'Administrator';
            $newUser->lastName = 'Administrator';
            $newUser->secret = 'Administrator';
            $newUser->userType = 1;

            $createdArray = $this->create('user', $newUser->toArray());
            return true;
        }

        return true;
    }
}
