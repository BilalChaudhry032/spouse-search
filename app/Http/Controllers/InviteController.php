<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;

use App\ProfileFor;

// Mother Language
use App\MotherLanguage;

// Religion
use App\Religion;

// Martial Status
use App\MartialStatus;

// Country
use App\Country;

//State
use App\State;

// City
use App\City;

// Cast
use App\Cast;

// Sect
use App\Sect;

// Gender
use App\Gender;

use App\Height;

use App\Education;

use App\Occupation;

use App\Income;

use App\Interest;

use Mail;



class InviteController extends Controller
{
    public function invite(Request $request)
    {
        $profilefor = ProfileFor::all();
        $motherLanguages = MotherLanguage::all();
        $religions = Religion::all();
        $martial_status = MartialStatus::all();
        $country = Country::all();
        $state = State::all();
        $cities = City::all();
        $casts = Cast::all();
        $sects = Sect::all();
        $genders = Gender::all();
        $heights = Height::all();
        $education = Education::all();
        $occupations = Occupation::all();
        $incomes = Income::all();
        return view('auth.invite', compact('profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic', 'genders', 'heights', 'education', 'occupations', 'incomes'));
    }




    public function saveInvite(Request $request)
    {
        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => Null,
            'dob' => $data['dob'],
            'profile_fors_id' => $data['profile_for'],
            'mother_language_id' => $data['mother_language'],
            'religion_id' => $data['religion'],
            'martial_status_id' => $data['martial_status'],
            'country_id' => $data['country'],
            'state_id' => $data['state'],
            'city_id' => $data['city'],
            'cast_id' => $data['cast'],
            'sect_id' => $data['sect'],
            'gender_id' => $data['gender'],
            'height_id' => $data['height'],
            'education_id' => $data['education'],
            'occupation_id' => $data['occupation'],
            'income_id' => $data['income'],
            'about' => $data['about'],
            'consultant_id' => $data['consultant_id'],
            'password' => \Illuminate\Support\Facades\Hash::make($data['password']),
            'verify' => 1
        ]);
        return redirect('login');
    }

}
