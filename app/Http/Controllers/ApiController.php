<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HealthRecord;

class ApiController extends Controller
{
    //
	
	public function saveData(Request $request){
        $health = HealthRecord::create($request->all());

        return response()->json($health);

        //HealthRecord::all();
    }

    public function getData(){
        $healths = HealthRecord::orderBy('created_at','DESC')->get();

        return response()->json($healths);

        //HealthRecord::all();
    }
	
}
