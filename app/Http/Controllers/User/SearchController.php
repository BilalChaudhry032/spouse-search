<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use Auth;
use App\Shortlist;

// Martial Status

use App\Religion;
use App\MotherLanguage;


use Illuminate\Support\Carbon;


class SearchController extends Controller
{


    public function mainPage()
    {
        $users = User::all();

        $religions = Religion::all();
        $languages = MotherLanguage::all();
        return view('welcome', compact('users', 'religions', 'languages'));
    }

    public function searchPage(){

        if(Auth::user()->gender_id == 1){
            $users = User::where('gender_id',2)->get();
        }else{
            $users = User::where('gender_id',1)->get();
        }

        $short = Shortlist::all();
        $religions = Religion::all();
        $languages = MotherLanguage::all();



        return view('pages.user.search', compact('users', 'religions', 'languages','short'));
    }

    public function basicSearch(Request $request)
    {
        $users = User::all();

        $religions = Religion::all();
        $languages = MotherLanguage::all();

        if ($request->gender == 1) {
            $requiredGender = 2;
        } else {
            $requiredGender = 1;
        }

        $requireMotherTongue = $request->language;
        $requireReligion = $request->religion;
        $requireMinAge = $request->age_from;
        $requireMaxAge = $request->age_to;


        $users = User::all();
        $ageRange = array();

        foreach ($users as $user) {
            if (\Carbon\Carbon::parse($user->dob)->age >= $requireMinAge && \Carbon\Carbon::parse($user->dob)->age <= $requireMaxAge) {
                $ageRange[] = $user;
            }
        }


        $genderArray = array();



        // Matching Gender
        foreach ($ageRange as $ar) {
            if ($ar->gender_id == $requiredGender) {
                $genderArray[] = $ar;
            }
        }

        // Matching Religion
        $religionArray = array();

        if ($requireReligion != 0) {
            foreach ($genderArray as $ga) {
                if ($ga->religion_id == $requireReligion){
                    $religionArray[] = $ga;
                }
            }
        }

        $motherLanguageArray = array();

        if ($requireMotherTongue != 0) {
            foreach ($religionArray as $ra) {
                if ($ra->mother_language_id == $requireMotherTongue){
                    $motherLanguageArray[] = $ra;
                }
            }
        }


        $searchResultsArray = array();
        if($requireReligion == 0 && $requireMotherTongue == 0){
            $searchResultsArray[] = $genderArray;
        }
        elseif ($requireReligion != 0 && $requireMotherTongue == 0){
            $searchResultsArray[] = $religionArray;
        }
        elseif ($requireReligion == 0 && $requireMotherTongue != 0){
            $searchResultsArray[] = $motherLanguageArray;
        }
        elseif ($requireReligion != 0 && $requireMotherTongue != 0){
            $searchResultsArray[] = $motherLanguageArray;
        }

        //dd($searchResultsArray);

        //$matchThese = ['gender_id' => $request->gender, 'mother_language_id' => $request->language, 'religion_id' => $request->religion,];

        //$now = Carbon::now()->toDateString();


        //$users = DB::table('users')->where('gender_id', $request->gender, 'mother_language_id',$request->language)->get();
        //$users = DB::table('users')->where($matchThese)->get();
        //$users = User::where($matchThese)->get();

        $users = $searchResultsArray[0];
        //dd(count());
// then add to the query

        return view('pages.user.search_results', compact('users', 'profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic','languages'));
    }
}
