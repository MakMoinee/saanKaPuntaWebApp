<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Services\Firebase\Firestore\FirestoreRepository;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BuildingsController extends Controller
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
    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $buildings = $this->db->fetchBuilding();
            $newBuildings = array();
            $key = $request->searchKey;
            if (isset($request->searchKey)) {

                foreach ($buildings as $b) {
                    if ($b['buildingName'] == $request->searchKey || str_contains(strtolower($b['buildingName']), strtolower($request->searchKey))) {
                        array_push($newBuildings, $b);
                    }
                }
            } else {
                $newBuildings = $buildings;
            }


            $mUsers = session()->pull('users');
            session()->put("users", $mUsers);
            return view('admin.buildings', ['buildings' => $newBuildings, 'myDocID' => $mUsers['docID'], 'key' => $key]);
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
        if (session()->exists("users")) {
            if (isset($request->btnSaveBuilding)) {
                // check first if building name is already present
                $arrayValues = $this->db->fetchWithWhere('buildings', 'buildingName', '=', 0, $request->buildingName);

                if (count($arrayValues) > 0) {
                    session()->put("errorExistingBuildingName", true);
                    return redirect('/buildings');
                }

                $file = $request->file('files');
                $file3 = $request->file('files3');
                $fileName = "";
                $fileName3 = "";
                if ($file) {
                    $mimetype =  $file->getMimeType();
                    if ($mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/JPEG" || $mimetype == "image/JPG" || $mimetype == "image/jpg" || $mimetype == "image/PNG") {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/storage/image/buildings';
                        $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        chmod($destinationPath,0755);
                    } else {
                        session()->put("errorInvalidFile", true);
                        return redirect("/buildings");
                    }
                }

                if ($file3) {
                    $mimetype3 =  $file3->getMimeType();
                    if ($mimetype3 == "image/jpeg" || $mimetype3 == "image/png" || $mimetype3 == "image/JPEG" || $mimetype3 == "image/JPG" || $mimetype3 == "image/jpg" || $mimetype3 == "image/PNG") {
                        $destinationPath3 = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/storage/image/directoryPath';
                        $fileName3 = strtotime(now()) . "." . $file3->getClientOriginalExtension();
                        $isFile3 = $file3->move($destinationPath3,  $fileName3);
                        chmod($destinationPath3,0755);
                    } else {
                        try {
                            if ($fileName) {
                                $destinationPath3 = $_SERVER['DOCUMENT_ROOT'] . "/public" . "/storage/image/directoryPath" . "/" . $fileName;
                                File::delete($destinationPath3);
                            }
                        } catch (Exception $e1) {
                        }
                        session()->put("errorInvalidFile", true);
                        return redirect("/buildings");
                    }
                }


                $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
                $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
                $dt->setTimezone($tz);
                $newBuildings = new Buildings();
                $newBuildings->buildingName = $request->buildingName;
                $newBuildings->posterPath =  "/storage/image/buildings/" . $fileName;
                $newBuildings->directoryPath =  "/storage/image/directoryPath/" . $fileName3;
                $newBuildings->createdAt = $dt->format('Y-m-d H:i:s');
                $newBuildings->updatedAt = $dt->format('Y-m-d H:i:s');

                $result = $this->db->create('buildings', $newBuildings->toArray());
                session()->put("successAddBuilding", true);
            }
            return redirect("/buildings");
        } else {
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
        if (session()->exists("users")) {
            $file = $request->file('files');
            $file4 = $request->file('files4');
            $fileName = "";
            $fileName4 = "";
            if ($file) {
                $mimetype =  $file->getMimeType();
                if ($mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/JPEG" || $mimetype == "image/JPG" || $mimetype == "image/jpg" || $mimetype == "image/PNG") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/storage/image/buildings';
                    $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                    $isFile = $file->move($destinationPath,  $fileName);
                    chmod($destinationPath,0755);
                } else {
                    session()->put("errorInvalidFile", true);
                    return redirect("/buildings");
                }
            }

            if ($file4) {
                $mimetype4 =  $file4->getMimeType();
                if ($mimetype4 == "image/jpeg" || $mimetype4 == "image/png" || $mimetype4 == "image/JPEG" || $mimetype4 == "image/JPG" || $mimetype4 == "image/jpg" || $mimetype4 == "image/PNG") {
                    $destinationPath4 = $_SERVER['DOCUMENT_ROOT'] . "/public" . '/storage/image/directoryPath';
                    $fileName4 = strtotime(now()) . "." . $file4->getClientOriginalExtension();
                    $isFile4 = $file4->move($destinationPath4,  $fileName4);
                    chmod($destinationPath4,0755);
                } else {
                    session()->put("errorInvalidFile", true);
                    return redirect("/buildings");
                }
            }

            if ($fileName != "") {
                try {
                    $originalPosterPath = $request->originalPosterPath;
                    if ($originalPosterPath) {
                        $destinationPath3 = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalPosterPath;
                        File::delete($destinationPath3);
                    }
                } catch (Exception $e1) {
                }

                $fileName = '/storage/image/buildings' . "/" . $fileName;
            } else {
                $fileName = $request->originalPosterPath;
            }


            if ($fileName4 != "") {
                try {
                    $originalDirectoryPath = $request->originalDirectoryPath;
                    if ($originalDirectoryPath) {
                        $destinationPath4 = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalDirectoryPath;
                        File::delete($destinationPath4);
                    }
                } catch (Exception $e1) {
                }

                $fileName4 = '/storage/image/directoryPath' . "/" . $fileName4;
            } else {
                $fileName4 = $request->originalPosterPath;
            }

            $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
            $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
            $dt->setTimezone($tz);

            $newBuildings = new Buildings();
            $newBuildings->buildingName = $request->buildingName;
            $newBuildings->posterPath = $fileName;
            $newBuildings->directoryPath = $fileName4;
            $newBuildings->createdAt = $request->createdAt;
            $newBuildings->updatedAt = $dt->format('Y-m-d H:i:s');

            $result = $this->db->edit('buildings', $id, $newBuildings->toArray());
            session()->put("successUpdatedBuilding", true);
            return redirect("/buildings");
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
    public function destroy($id, Request $request)
    {
        if (session()->exists("users")) {
            try {
                $posterPath = $request->posterPath;
                if ($posterPath) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . $posterPath;
                    File::delete($destinationPath);
                }
            } catch (Exception $e1) {
            }

            try {
                $originalDirectoryPath = $request->originalDirectoryPath;
                if ($originalDirectoryPath) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/public" . $originalDirectoryPath;
                    File::delete($destinationPath);
                }
            } catch (Exception $e1) {
            }

            try {
                $this->db->destroy('buildings', $id);
                session()->put("successDeleteBuilding", true);
            } catch (Exception $e) {
                session()->put("errorDeleteBuilding", true);
            }

            return redirect("/buildings");
        } else {
            return redirect("/");
        }
    }


    /**
     * FOR API CONTROLLERS
     */

    public function apiIndex()
    {
        $buildings = $this->db->fetchBuilding();
        return response($buildings, 200)->header('Content-Type', 'application/json');
    }
}
