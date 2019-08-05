<?php

namespace App\Http\Controllers;

use App\Consultant;
use Illuminate\Http\Request;
use App\User;
use Charts;
use App\Admin;
use Hash;


use Illuminate\Support\Facades\Auth;

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


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addConsultant()
    {
        return view('pages.admin.add-consultant');
    }

    public function store(Request $request)
    {
        $consultant = new Consultant;
        $consultant->name = $request->name;
        $consultant->email = $request->email;
        $consultant->password = Hash::make($request->password);
        $consultant->business_name = $request->business_name;
        $consultant->phone = $request->phone;
        $consultant->save();
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $verified = User::where('verified',1)->where('soft_delete', null)->get();
        $not_verified = User::where('verified',null)->where('soft_delete', null)->get();
        $featured = User::where('featured',1)->where('soft_delete', null)->get();
        //dd($users);

        $chart = Charts::database($users, 'area', 'highcharts')->dateColumn('created_at')
            ->title('Users chart')
            ->elementLabel('Registered Users')
            //->aggregateColumn('total_rent', 'sum')
            //->labels(['First', 'Second', 'Third'])
            ->colors(["#169F85"])
            //->values([$total])
            //->dimensions(100,500)
            ->responsive(true)
            ->lastByDay();


        return view('pages.admin.dashboard',compact('users', 'chart','verified','not_verified','featured'));
    }



    public function getUsers(){
        $users = User::orderByDesc('created_at')->where('soft_delete', null)->get();
        //dd($users);
        return view('pages.admin.all-users',compact('users'));
    }

    public function getVerified(){
        $users = User::where('verified',1)->orderByDesc('created_at')->where('soft_delete', null)->get();
        //dd($users);
        return view('pages.admin.verified-users',compact('users'));
    }

    public function getUnverified(){
        $users = User::where('verified',null)->orderByDesc('created_at')->where('soft_delete', null)->get();
        //dd($users);
        return view('pages.admin.verified-users',compact('users'));
    }

    public function getFeatured(){
        $users = User::where('featured',1)->orderByDesc('created_at')->where('soft_delete', null)->get();
        //dd($users);
        return view('pages.admin.featured-users',compact('users'));
    }

    public function getProfile($id){
        $user = User::findOrFail($id);
        return view('pages.admin.profile',compact('user'));
    }

    public function viewConsultant()
    {

        $c_users = User::where('consultant_id','!=', null)->get();

        $users = Consultant::all();
        return view('pages.admin.view-consultants', compact('users','c_users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->soft_delete = 1;
        $user->save();
        return redirect()->back();
    }

    public function deletedUsers(){
        $users = User::where('soft_delete', 1)->get();
        return view('pages.admin.deleted-users', compact('users'));
    }

    public function deletedBrides(){
        $users = User::where('soft_delete', 1)->where('gender_id',2)->get();
        return view('pages.admin.deleted-brides', compact('users'));
    }

    public function deletedGrooms(){
        $users = User::where('soft_delete', 1)->where('gender_id',1)->get();
        return view('pages.admin.deleted-grooms', compact('users'));
    }

    public function getBrides(){
        $users = User::where('soft_delete', null)->where('gender_id',2)->get();
        return view('pages.admin.brides', compact('users'));
    }

    public function getGrooms(){
        $users = User::where('soft_delete', null)->where('gender_id',1)->get();
        return view('pages.admin.grooms', compact('users'));
    }

    public function storeConsultant(Request $request)
    {
        $con = new Consultant;
        $con->name = $request->name;
        $con->email = $request->email;
        $con->password = Hash::make($request->password);
        $con->business_name = $request->business_name;
        $con->phone = $request->phone;
        $con->save();

        return redirect()->back();

    }

    public function editConsultant($id, Request $request)
    {
        $c = Consultant::findOrFail($id);
        $c->name = $request->name;
        $c->email = $request->email;
        $c->phone = $request->phone;
        $c->business_name = $request->business_name;
        $c->save();
        return redirect()->back();
    }

    public function viewEditConsultant($id)
    {
        $c = Consultant::findOrFail($id);
        return view('pages.admin.edit-consultant' , compact('c'));
    }

    public function deleteConsultant($id)
    {
        $c = Consultant::findOrFail($id);
        $c->delete();
        return redirect()->back();
    }


    public function viewConsultantAddedProfiles($id){
        $users = User::where('consultant_id', $id)->get();
        return view('pages.admin.consultant-added-profiles', compact('users'));
    }


    public function addProfile()
    {

    }


    public function edit($id)
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
        $user = User::findOrFail($id);
        return view('pages.admin.edit_profile', compact('profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic', 'genders', 'heights', 'education', 'occupations', 'incomes', 'user'));
    }


    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->dob = $request->dob;
        $user->profile_fors_id = $request->profile_for;
        $user->mother_language_id = $request->mother_language;
        $user->religion_id = $request->religion;
        $user->martial_status_id = $request->martial_status;
        $user->country_id = $request->country;
        $user->state_id = $request->state;
        $user->city_id = $request->city;
        $user->cast_id = $request->cast;
        $user->sect_id = $request->sect;
        $user->gender_id = $request->gender;
        $user->height_id = $request->height;
        $user->education_id = $request->education;
        $user->occupation_id = $request->occupation;
        $user->income_id = $request->income;
        $user->about = $request->about;
        $user->consultant_id = Auth::user()->id;
        $user->save();

        return redirect()->route('admin.profile.user', $user->id);
    }


}
