<?php

namespace App\Services\Firebase\Firestore;

use App\Models\Buildings;
use App\Models\Offices;
use App\Models\SKPUsers;
use App\Services\Firebase\Contracts\FireStore;
use Illuminate\Support\Arr;
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
                $newUser = new SKPUsers();
                $newUser->docID = $d->id();
                $newUser->email = $eachData['email'];
                $newUser->password = $eachData['password'];
                $newUser->firstName = $eachData['firstName'];
                $newUser->middleName = $eachData['middleName'];
                $newUser->lastName = $eachData['lastName'];
                $newUser->secret = $eachData['secret'];
                $newUser->userType = $eachData['userType'];
                array_push($result, $newUser);
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



    public function fetchWithWhere(string $collection, string $fieldName, string $whereOperator, int $intValue, string $strValue): array
    {

        if ($intValue) {
            $actualValue = $intValue;
        }

        if ($strValue != "") {
            $actualValue = $strValue;
        }

        $data = app('firebase.firestore')
            ->database()
            ->collection($collection)
            ->where($fieldName, $whereOperator, $actualValue)
            ->documents();

        $result = array();
        foreach ($data as $d) {
            $eachData = $d->data();
            array_push($result, $eachData);
        }

        return $result;
    }

    public function fetchUsers(): array
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection('user')
            ->where('userType', '=', 2)
            ->documents();

        $result = array();

        foreach ($data as $d) {
            $eachData = $d->data();
            $newUser = new SKPUsers();
            $newUser->email = $eachData['email'];
            $newUser->password = $eachData['password'];
            $newUser->firstName = $eachData['firstName'];
            $newUser->middleName = $eachData['middleName'];
            $newUser->lastName = $eachData['lastName'];
            $newUser->secret = $eachData['secret'];
            $newUser->userType = $eachData['userType'];
            array_push($result, $newUser->toArray());
        }

        return $result;
    }

    public function fetchBuilding(): array
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection('buildings')
            ->orderBy("buildingName")
            ->documents();

        $result = array();

        foreach ($data as $d) {
            $eachData = $d->data();
            $newBuildings = new Buildings();
            $newBuildings->docID = $d->id();
            $newBuildings->buildingName = $eachData['buildingName'];
            $newBuildings->posterPath = $eachData['posterPath'];
            if (isset($eachData['directoryPath'])) {
                $newBuildings->directoryPath = $eachData['directoryPath'];
            } else {
                $newBuildings->directoryPath = "";
            }
            if (isset($eachData['status'])) {
                $newBuildings->status = $eachData['status'];
            } else {
                $newBuildings->status = "active";
            }

            $newBuildings->createdAt = $eachData['createdAt'];
            $newBuildings->updatedAt = $eachData['updatedAt'];
            array_push($result, $newBuildings->toArray());
        }

        return $result;
    }

    public function fetchOffice(): array
    {
        $data = app('firebase.firestore')
            ->database()
            ->collection('offices')
            ->orderBy('officeName')
            ->documents();

        $result = array();

        foreach ($data as $d) {
            $eachData = $d->data();
            $newOffice = new Offices();
            $newOffice->docID = $d->id();
            $newOffice->officeName = $eachData['officeName'];
            $newOffice->building = $eachData['building'];
            $newOffice->directions = $eachData['directions'];
            $newOffice->floor =  $eachData['floor'];
            $newOffice->floorMapPath =  $eachData['floorMapPath'];
            $newOffice->videoURL =  $eachData['videoURL'];
            $newOffice->createdAt = $eachData['createdAt'];
            $newOffice->updatedAt = $eachData['updatedAt'];
            if (isset($eachData['status'])) {
                $newOffice->status = $eachData['status'];
            } else {
                $newOffice->status = "active";
            }
            array_push($result, $newOffice->toArray());
        }

        return $result;
    }

    public function fetchOneBuilding(string $id): Buildings
    {
        $fs = app('firebase.firestore')
            ->database()
            ->collection('buildings')
            ->document($id);
        $data = $fs->snapshot();

        $newBuildings = new Buildings();
        if ($data->exists()) {
            $eachData = $data->data();
            $newBuildings = new Buildings();
            $newBuildings->docID = $data->id();
            $newBuildings->buildingName = $eachData['buildingName'];
            $newBuildings->posterPath = $eachData['posterPath'];
            if (isset($eachData['directoryPath'])) {
                $newBuildings->directoryPath = $eachData['directoryPath'];
            } else {
                $newBuildings->directoryPath = "";
            }
            if (isset($eachData['status'])) {
                $newBuildings->status = $eachData['status'];
            } else {
                $newBuildings->status = "active";
            }

            $newBuildings->createdAt = $eachData['createdAt'];
            $newBuildings->updatedAt = $eachData['updatedAt'];
        }



        return $newBuildings;
    }

    public function fetchOneOffice(string $id): Offices
    {
        $fs = app('firebase.firestore')
            ->database()
            ->collection('offices')
            ->document($id);
        $data = $fs->snapshot();

        $newOffice = new Offices();
        if ($data->exists()) {
            $eachData = $data->data();
            $newOffice->docID = $data->id();
            $newOffice->officeName = $eachData['officeName'];
            $newOffice->building = $eachData['building'];
            $newOffice->directions = $eachData['directions'];
            $newOffice->floor =  $eachData['floor'];
            $newOffice->floorMapPath =  $eachData['floorMapPath'];
            $newOffice->videoURL =  $eachData['videoURL'];
            $newOffice->createdAt = $eachData['createdAt'];
            $newOffice->updatedAt = $eachData['updatedAt'];
            if (isset($eachData['status'])) {
                $newOffice->status = $eachData['status'];
            } else {
                $newOffice->status = "active";
            }
        }



        return $newOffice;
    }
}
