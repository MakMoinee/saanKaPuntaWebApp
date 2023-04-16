<?php

namespace App\Http\Controllers;

use App\Models\Offices;
use App\Services\Firebase\Firestore\FirestoreRepository;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OfficeController extends Controller
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
            $buildings = $this->db->fetchBuilding();
            $offices = $this->db->fetchOffice();
            return view('admin.offices', ['buildings' => $buildings, 'offices' => $offices]);
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

            if (isset($request->btnSaveOffice)) {

                $officeName = $request->officeName;
                $building = $request->building;
                $directions = $request->directions;
                $floor = $request->floor;


                $file = $request->file('files');
                $fileName = "";
                $file2 = $request->file('files2');
                $fileName2 = "";
                if ($file) {
                    $mimetype =  $file->getMimeType();
                    $mimetype2 =  $file2->getMimeType();
                    if ($mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/JPEG" || $mimetype == "image/JPG" || $mimetype == "image/jpg" || $mimetype == "image/PNG") {

                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/image/floors';
                        $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);

                        if ($file2) {
                            if ($mimetype2 == "video/webm" || $mimetype2 == "video/mp4" || $mimetype2 == "video/mpeg4" || $mimetype2 == "video/3gp" || $mimetype2 == "video/avi") {

                                if ($file2->getSize() > 40000000) {
                                    session()->put("errorFileExceed", true);
                                    return redirect("/offices");
                                }

                                $destinationPath2 = $_SERVER['DOCUMENT_ROOT'] . '/videos';
                                $fileName2 = strtotime(now()) . "." . $file2->getClientOriginalExtension();
                                $isFile2 = $file2->move($destinationPath2,  $fileName2);

                                if ($isFile && $isFile2) {
                                    $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
                                    $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
                                    $dt->setTimezone($tz);

                                    $newOffice = new Offices();
                                    $newOffice->officeName = $officeName;
                                    $newOffice->building = $building;
                                    $newOffice->directions = $directions;
                                    $newOffice->floor = $floor;
                                    $newOffice->floorMapPath =  "/image/floors/" . $fileName;
                                    $newOffice->videoURL =  "/videos" . "/" . $fileName2;
                                    $newOffice->createdAt = $dt->format('Y-m-d H:i:s');
                                    $newOffice->updatedAt = $dt->format('Y-m-d H:i:s');

                                    $result = $this->db->create('offices', $newOffice->toArray());
                                    session()->put("successAddOffice", true);
                                } else {
                                    session()->put("errorAddOffice", true);
                                }
                            } else {
                                session()->put("errorInvalidFile", true);
                            }
                        } else {
                            if ($isFile) {
                                $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
                                $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
                                $dt->setTimezone($tz);
                                $newOffice = new Offices();
                                $newOffice->officeName = $officeName;
                                $newOffice->building = $building;
                                $newOffice->directions = $directions;
                                $newOffice->floor = $floor;
                                $newOffice->videoURL =  "";
                                $newOffice->floorMapPath =  "/image/floors/" . $fileName;
                                $newOffice->createdAt = $dt->format('Y-m-d H:i:s');
                                $newOffice->updatedAt = $dt->format('Y-m-d H:i:s');

                                $result = $this->db->create('offices', $newOffice->toArray());
                                session()->put("successAddOffice", true);
                            } else {
                                session()->put("errorAddOffice", true);
                            }
                        }
                    } else {
                        session()->put("errorInvalidFile", true);
                    }
                }
                return redirect("/offices");
            } else {
                return redirect("/offices");
            }
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
            if (isset($request->btnUpdateOffice)) {
                $files = $request->file('files');
                $files2 = $request->file('files2');
                $fileName = "";
                $fileName2 = "";
                if ($files) {
                    $mimetype =  $files->getMimeType();
                    if ($mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/JPEG" || $mimetype == "image/JPG" || $mimetype == "image/jpg" || $mimetype == "image/PNG") {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/image/floors';
                        $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                        $isFile = $files->move($destinationPath,  $fileName);
                    } else {
                        session()->put("errorImageFile", true);
                        return redirect("/offices");
                    }
                }

                if ($files2) {
                    $mimetype2 =  $files2->getMimeType();
                    if ($mimetype2 == "video/webm" || $mimetype2 == "video/mp4" || $mimetype2 == "video/mpeg4" || $mimetype2 == "video/3gp" || $mimetype2 == "video/avi") {

                        if ($files2->getSize() > 40000000) {

                            try {
                                if ($fileName != "") {
                                    $destinationPath3 = $_SERVER['DOCUMENT_ROOT'] . "/image/floors" . "/" . $fileName;
                                    File::delete($destinationPath3);
                                }
                            } catch (Exception $e1) {
                            }
                            session()->put("errorFileExceed", true);
                            return redirect("/offices");
                        }


                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/videos';
                        $fileName2 = strtotime(now()) . "." . $files2->getClientOriginalExtension();
                        $isFile2 = $files2->move($destinationPath,  $fileName2);
                    } else {
                        session()->put("errorVideoFile", true);
                        return redirect("/offices");
                    }
                }

                if ($fileName !=  "") {
                    try {
                        $originalFloorMapPath = $request->originalFloorMapPath;
                        if ($originalFloorMapPath) {
                            $destinationPath2 = $_SERVER['DOCUMENT_ROOT'] . $originalFloorMapPath;
                            File::delete($destinationPath2);
                        }
                    } catch (Exception $e1) {
                    }
                    $fileName = "/image/floors" . "/" . $fileName;
                } else {
                    $fileName = $request->originalFloorMapPath;
                }
                if ($fileName2 !=  "") {
                    try {
                        $originalVideoURL = $request->originalVideoURL;
                        if ($originalVideoURL) {
                            $destinationPath3 = $_SERVER['DOCUMENT_ROOT'] . $originalVideoURL;
                            File::delete($destinationPath3);
                        }
                    } catch (Exception $e1) {
                    }
                    $fileName2 = "/videos" . "/" . $fileName2;
                } else {
                    $fileName2 = $request->originalVideoURL;
                }

                $officeName = $request->officeName;
                $building = $request->building;
                $directions = $request->directions;
                $floor = $request->floor;
                $createdAt = $request->createdAt;

                $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
                $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
                $dt->setTimezone($tz);
                $newOffice = new Offices();
                $newOffice->officeName = $officeName;
                $newOffice->building = $building;
                $newOffice->directions = $directions;
                $newOffice->floor = $floor;
                $newOffice->createdAt = $createdAt;
                $newOffice->floorMapPath = $fileName;
                $newOffice->videoURL = $fileName2;
                $newOffice->updatedAt = $dt->format('Y-m-d H:i:s');

                $result = $this->db->edit('offices', $id, $newOffice->toArray());
                session()->put("successUpdateOffice", true);
            }
            return redirect("/offices");
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

            if (isset($request->btnDeleteOffice)) {

                try {
                    $floorMapPath = $request->floorMapPath;
                    if ($floorMapPath) {
                        $destinationPath2 = $_SERVER['DOCUMENT_ROOT'] . $floorMapPath;
                        File::delete($destinationPath2);
                    }
                } catch (Exception $e1) {
                }

                try {
                    $video = $request->videoURL;
                    if ($video) {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . $video;
                        File::delete($destinationPath);
                    }
                } catch (Exception $e2) {
                }

                try {
                    $this->db->destroy('offices', $id);
                    session()->put("successDeleteOffice", true);
                } catch (Exception $e) {
                    session()->put("errorDeleteOffice", true);
                }
            }

            return redirect("/offices");
        } else {
            return redirect("/");
        }
    }
}
