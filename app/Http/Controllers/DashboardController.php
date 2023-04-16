<?php

namespace App\Http\Controllers;

use App\Models\SKPUsers;
use App\Services\Firebase\Firestore\FirestoreRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    protected $db;

    public function __construct(FirestoreRepository $repo)
    {
        $this->db = $repo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->exists("users")) {
            $listOfUsers = $this->db->fetchWithWhere('user', 'userType', '=', 2, '');
            $mUsers = session()->pull('users');
            session()->put("users", $mUsers);
            return view('admin.dashboard', ['users' => $listOfUsers, 'myDocID' => $mUsers['docID']]);
        } else {
            return redirect("/");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (session()->exists("users")) {
            if (isset($request->btnUpdateProfile)) {
                $mUsers = session()->pull('users');
                session()->put("users", $mUsers);

                if (password_verify($request->oldpass, $mUsers['password'])) {
                    if ($request->password == $request->confirmPass) {
                        $hashPass = Hash::make($request->password);
                        $newUser = new SKPUsers();
                        $newUser->email = $mUsers['email'];
                        $newUser->password = $hashPass;
                        $newUser->firstName = $mUsers['firstName'];
                        $newUser->middleName = $mUsers['middleName'];
                        $newUser->lastName = $mUsers['lastName'];
                        $newUser->secret = $mUsers['secret'];
                        $newUser->userType = $mUsers['userType'];

                        $this->db->edit('user', $mUsers['docID'], $newUser->toArray());
                        $mUsers = session()->pull('users');
                        $mUsers['password'] = $hashPass;
                        session()->put("users", $mUsers);
                        session()->put("successUpdatePass", true);
                    } else {
                        session()->put("errorPassDontMatch", true);
                    }
                } else {
                    session()->put("errorOldPass", true);
                }
            }
            return redirect($request->originalPage);
        } else {
            return redirect("/");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
