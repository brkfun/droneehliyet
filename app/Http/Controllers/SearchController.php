<?php

namespace App\Http\Controllers;

use App\DroneUser;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $data = null;
        if($request->has('tc')){
            $data = DroneUser::query()->where('tc',$request->get('tc'))->first();
            if(!$data){
                return view('search',['data' => false]);
            }
        }
        return view('search',['data' => $data]);
    }
}
