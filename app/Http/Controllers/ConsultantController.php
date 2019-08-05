<?php

namespace App\Http\Controllers;

use App\Mail\Invitation;
use Illuminate\Http\Request;
use App\User;
use Charts;
use App\Consultant;
use App\Admin;
use Hash;
use Auth;


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


class ConsultantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:consultant');
    }


    public function index()
    {
        $users = User::where('soft_delete',null)->with('interest')->get();
        return view('pages.consultants.all_profiles', compact('users'));
    }


    public function brides()
    {
        $users = User::where('consultant_id', Auth::user()->id)->where('soft_delete', null)->where('gender_id', 2)->get();
        return view('pages.consultants.brides', compact('users'));
    }

    public function grooms()
    {
        $users = User::where('consultant_id', Auth::user()->id)->where('soft_delete', null)->where('gender_id', 1)->get();
        return view('pages.consultants.grooms', compact('users'));
    }

    public function deletedProfiles()
    {
        $users = User::where('consultant_id', Auth::user()->id)->where('soft_delete', 1)->get();
        return view('pages.consultants.deleted_profiles', compact('users'));
    }

    public function login()
    {
        return view('pages.consultants.login');
    }

    public function dashboard()
    {
        $users = User::where('consultant_id', Auth::user()->id)->where('soft_delete', null)->get();
        $brides = User::where('consultant_id', Auth::user()->id)->where('gender_id', 2)->where('soft_delete', null)->get();
        $grooms = User::where('consultant_id', Auth::user()->id)->where('gender_id', 1)->where('soft_delete', null)->get();
        $deleted = User::where('consultant_id', Auth::user()->id)->where('soft_delete', 1)->get();


        $chart = Charts::database($users, 'area', 'highcharts')->dateColumn('created_at')
            ->title('Users chart')
            ->elementLabel('Registered Users')
            ->colors(["#169F85"])
            ->responsive(true)
            ->lastByDay();
        return view('pages.consultants.dashboard', compact('users', 'chart', 'brides', 'grooms', 'deleted'));
    }


    public function viewUser($id)
    {
        $user = User::findOrFail($id);
        $receivedInterests = Interest::where('interested_id',$id)->with('user')->get();

        return view('pages.consultants.profile', compact('user','receivedInterests'));
    }

    public function addUser()
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
        return view('pages.consultants.add_profile', compact('profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic', 'genders', 'heights', 'education', 'occupations', 'incomes'));

    }


    public function store(Request $request)
    {

        $consultant = new Admin;
        $consultant->name = $request->name;
        $consultant->email = $request->email;
        $consultant->password = Hash::make($request->password);
        $consultant->business_name = $request->business_name;
        $consultant->phone = $request->phone;
        $consultant->is_consultant = 1;
        $consultant->save();
        return redirect()->back();

    }


    public function addProfile(Request $request)
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
            'consultant_id' => Auth::user()->id,
            'password' => Auth::user()->password,
            'verify' => 1

        ]);

        return redirect()->back();
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

        return redirect()->route('consultant.view.users');
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
        return view('pages.consultants.edit_profile', compact('profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic', 'genders', 'heights', 'education', 'occupations', 'incomes', 'user'));
    }

    public function deleteUser($id)
    {
        //dd($id);
        $user = User::find($id);
        $user->soft_delete = 1;
        $user->save();
        return redirect()->back();
    }


    public function sendInvitation()
    {
        return view('pages.consultants.send_invitations');
    }

    public function sendInvite(Request $request)
    {
        $url_initial = route('index');
        $v_code = $url_initial . '/invite/?consultant_id=' . Auth::user()->id;

        Mail::to($request->email)->send(new Invitation($v_code));
        return redirect()->back();
    }


}
