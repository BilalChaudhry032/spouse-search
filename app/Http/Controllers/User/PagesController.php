<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\State;
use App\City;

class PagesController extends Controller
{
    public function aboutPage(){
        return view('pages.user.about');
    }

    public function queryPage(){
        return view('pages.user.query');
    }

    public function termPage(){
        return view('pages.user.terms');
    }

    public function upgradePage(){
        return view('pages.user.upgrade');
    }

    public function getStateList(Request $request){

        $data = State::where('country_id', $request->id)->get();
        // dd($data);
        return response()->json($data);
    }

    public function getCityList(Request $request){

        $data = City::where('state_id', $request->id)->get();
        // dd($data);
        return response()->json($data);
    }


}
