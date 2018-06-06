<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class APIController extends Controller
{
  
    public function index()
    {
        $countries = DB::table("countries")->lists("name","id");
        return view('index',compact('countries'));
    }
    public function getStateList(Request $request)
    {
        $states = DB::table("states")
                    ->where("country_id",$request->country_id)
                    ->lists("name","id");
        return response()->json($states);
    }
   
}

