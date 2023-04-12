<?php

namespace App\Http\Controllers;

use App\Services\Firebase\Firestore\FirestoreRepository;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class LoginController extends Controller
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
            return redirect("/dashboard");
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

        if (isset($request->btnLogin)) {
            $email = $request->email;
            $password = $request->password;
            $data = $this->db->login($email, $password);
            if (count($data) > 0) {
                $users = $data[0];
                if ($users['userType'] == 2) {
                    session()->put("errorLoginUnauthorized", true);
                } else {
                    session()->put("successLogin", true);
                    session()->put("users", $users);
                }
            } else {
                session()->put("errorLogin", true);
            }
            return redirect("/");
        } else {
            session()->put("errorLogin", true);
            return redirect("/");
        }
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
        //
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
