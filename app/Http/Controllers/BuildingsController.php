<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Services\Firebase\Firestore\FirestoreRepository;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;

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
    public function index()
    {
        if (session()->exists("users")) {
            $buildings = $this->db->fetchBuilding('buildings');
            return view('admin.buildings', ['buildings' => $buildings]);
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
                $fileName = "";
                if ($file) {
                    $mimetype =  $file->getMimeType();
                    if ($mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/JPEG" || $mimetype == "image/JPG" || $mimetype == "image/jpg" || $mimetype == "image/PNG") {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/image/buildings';
                        $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        if ($isFile) {
                            $dt = new DateTime(date('Y-m-d H:i:s', now()->timestamp));
                            $tz = new DateTimeZone('Asia/Manila'); // or whatever zone you're after
                            $dt->setTimezone($tz);

                            $newBuildings = new Buildings();
                            $newBuildings->buildingName = $request->buildingName;
                            $newBuildings->posterPath =  "/image/buildings/" . $fileName;
                            $newBuildings->createdAt = $dt->format('Y-m-d H:i:s');
                            $newBuildings->updatedAt = $dt->format('Y-m-d H:i:s');

                            $result = $this->db->create('buildings', $newBuildings->toArray());
                            session()->put("successAddBuilding", true);
                        }
                    } else {
                        session()->put("errorInvalidFile", true);
                    }
                }
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
        if (session()->exists("users")) {

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
}
