<?php

namespace App\Http\Controllers;

use App\DroneUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class DroneUserController extends Controller
{
    /**
     * @var Builder
     */
    private $query;
    /**
     * @var array
     */
    private $cols;
    /**
     * @var string
     */
    private $table;

    public function __construct()
    {
        $this->query = DroneUser::query();
        $this->middleware('auth');
        $this->cols = DroneUser::getTableAttributes();
        $this->table = $table = $this->query->getModel()->getTable();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->query->get();
        return view('listView', [
            'data' => $data,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $cols = $this->query->getModel()->getAttributes();
        return view('createView',[
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $droneUser = new DroneUser();
        $droneUser->tc = $request->tc;
        $droneUser->save();

        save_image($request->file('image'),$droneUser->id.'-'.$droneUser->tc);

        return view('showView',[
            'data' => $droneUser,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param DroneUser $droneUser
     * @return Response
     */
    public function show(DroneUser $droneUser)
    {
        return view('showView', [
            'data' => $droneUser,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DroneUser $droneUser
     * @return Response
     */
    public function edit(DroneUser $droneUser)
    {
        return view('showView', [
            'data' => $droneUser,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param DroneUser $droneUser
     * @return Response
     */
    public function update(Request $request, DroneUser $droneUser)
    {
        return view('showView', [
            'data' => $droneUser,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DroneUser $droneUser
     * @return Response
     */
    public function destroy(DroneUser $droneUser)
    {

        $data = $this->query->get();
        return view('listView', [
            'data' => $data,
            'cols' => $this->cols,
            'table' => $this->table,
        ]);
    }
}
