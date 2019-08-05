<?php

namespace App\Http\Controllers\User;

use App\Contact;
use App\Education;
use App\ExpectedRelation;
use App\FamilyInfo;
use App\Height;
use App\Income;
use App\Occupation;
use App\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Auth;
use App\Shortlist;
use App\Message;
use DB;
use App\Interest;
use App\Counter;
use App\ProfileView;


// App For Relation
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

//
use App\Gender;


use App\Photo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('users.index', compact('profilefor', 'motherLanguages', 'religions', 'martial_status', 'country', 'state', 'cities', 'casts', 'sects', 'profile_pic'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function updateProfilePic(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $location = public_path('uploads/avatar/');
            Image::make($avatar)->resize(300, 300)->save($location . $filename);
            $user = Auth::user();
            $user->profile_pic = $filename;
            $user->save();
        }
        else{
            return 'Not Successful';
        }
        return redirect()->back();
    }

    public function contact()
    {
        return view('pages.user.contact');
    }
    public function help()
    {
        return view('pages.user.help');
    }

    public function support()
    {
        return view('pages.user.support');
    }

    public function gettingStarted()
    {
        return view('pages.user.getting-started');
    }

    public function membership()
    {
        return view('pages.user.membership');
    }

    public function searchProfile()
    {
        return view('pages.user.search-profile');
    }


    public function loginPassword()
    {
        return view('pages.user.login-password');
    }

    public function commonIssues()
    {
        return view('pages.user.common-issues');
    }


    public function privacy()
    {
        return view('pages.user.privacy-policy');
    }

    public function changingBasicDetails()
    {
        return view('pages.user.changing-basic-details');
    }



    public function registerme()
    {
        return view('auth.userRegister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile()
    {
        $profilefor = ProfileFor::all();
        $motherLanguages = MotherLanguage::all();
        $religions = Religion::all();
        $martial_status = MartialStatus::all();
        $country = Country::all();
        $heights = Height::all();
        $state = State::all();
        $cities = City::all();
        $casts = Cast::all();
        $sects = Sect::all();
        $genders = Gender::all();
        $education = Education::all();
        $occupations = Occupation::all();
        $incomes = Income::all();


        if(Photo::where('user_id','=',Auth::user()->id)->first()){
            $p = Photo::where('user_id','=',Auth::user()->id)->first();
        }else{
            $p = false;
        }

        return view('pages.user.profile', compact('profilefor','motherLanguages','religions','martial_status','country','state','cities','casts','sects','profile_pic', 'genders','p','education','occupations','incomes','heights'));
    }

    public function showProfile($id)
    {
        return view('pages.user.profile');
    }

    // Profile Clicked
    public function profilesClickedCounter($id)
    {
        //$findCounter = Counter::where('user_id','=',Auth::user()->id)->first();


        $cunt = 0;
        //Counter Not Found
        // if empty the response will be null
        if(ProfileView::where('user_id','=',Auth::user()->id)->where('profile_id','=',$id)->first())
        {
            $existing = ProfileView::where('user_id','=',Auth::user()->id)->where('profile_id','=',$id)->first();
            $existing->counter++;
            $existing->save();
        }
        else
        {
            $new = new ProfileView();
            $new->user_id = Auth::user()->id;
            $new->profile_id = $id;
            $new->counter++;
            $new->save();
        }


    }

    public function showUser($id){

        if (!Auth::check()){
            return redirect('register');
        }
        $user_id = $id;

        $p = false;

        if(Auth::check()){
            if(Photo::where('user_id','=',Auth::user()->id)->first()){
                $p = Photo::where('user_id','=',Auth::user()->id)->first();
            }else{
                $p = false;
            }
        }

        $showContacts = false;
        //dd(Interest::where('user_id',Auth::user()->id)->where('interested_id',$id)->first());
        //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
        if(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first()) {
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
            $interest = Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first();

            if ($interest->status == null) {
                $showContacts = false;
            }
            else{
                $showContacts = true;
            }

        }

        if(Interest::where('user_id',Auth::user()->id)->where('interested_id',$id)->first()) {
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
            $interest = Interest::where('user_id',Auth::user()->id)->where('interested_id',$id)->first();

            if ($interest->status == null) {
                $showContacts = false;
            }
            else{
                $showContacts = true;
            }

        }



        $user = User::find($user_id);
        /*$counter = Counter::where('user_id','=',Auth::user()->id)->first();

        //dd($counter);


        if($counter == Null){
            //dd('Failure');
            $counter = new Counter;
            $counter->user_id = Auth::user()->id;

            $counter_get=$counter->profiles_clicked++;
            //dd($counter_get);
            $counter->save();
            //dd('Stwp One');


            $counter_to = Counter::where('user_id','=',$id)->first();


            if($counter_to == NULL){
                $counter_to = new Counter;
                $counter_to->user_id = $id;
                $counter_to->profile_hits_after = $counter_to->profile_hits_after + 1;
                $counter_to->save();
            }
            else{
                $id = $counter_to->id;
                $counter_to = Counter::find($id);
                $counter_to->profile_hits_after = $counter_to->profile_hits_after + 1;
                $counter_to->save();
            }

            //return redirect()->back();
            return view('pages.user.user', compact('short','user','profilefor','motherLanguages','religions','martial_status','country','state','cities','casts','sects','profile_pic', 'genders','p'));
        }

        else{

            Auth::user()->counter->profiles_clicked++;
            Auth::user()->counter->save();

            //$counter_to = Counter::where('user_id','=',$id)->first();

            $counter_new = Counter::where('user_id','=',$id)->first();

            if($counter_new == NULL){
                $counter_new = new Counter;
                $counter_new->user_id = $id;
                $counter_new->profile_hits_after = $counter_new->profile_hits_after + 1;
                $counter_new->save();

            }
            else{

                //dd('Hi!');
                $id = $counter_new->id;
                $counter_new = Counter::find($id);
                $counter_new->profile_hits_after = $counter_new->profile_hits_after + 1;
                //dd('Stop Here!');
                $counter_new->save();

            }
            //dd('success');
            //dd($contact->facebook);

            //return redirect()->back();
            return view('pages.user.user', compact('short','user','profilefor','motherLanguages','religions','martial_status','country','state','cities','casts','sects','profile_pic', 'genders','p'));
        }*/

        //dd($user);
        $this->profilesClickedCounter($user_id);
        return view('pages.user.user', compact('short','user','profilefor','motherLanguages','religions','martial_status','country','state','cities','casts','sects','profile_pic', 'genders','p','showContacts'));

    }

    public function interests(){

        //$users = User::all();
        //$interest = Interest::where('interested_id',Auth::user()->id)->with('user')->get();

        $sentInterests = Interest::where('user_id',Auth::user()->id)->get();
        //dd($sentInterests);
        $receivedInterests = Interest::where('interested_id',Auth::user()->id)->with('user')->get();
        //dd($interest);
        return view('pages.user.interests', compact('sentInterests','receivedInterests'));
    }

    public function photoRequests(){
        return view('pages.user.photoRequests');
    }

    public function messages(){
        $contacts_profile = Message::where('user_id', Auth::user()->id)->get();
        //dd($messages[0]->user_id);
        return view('pages.user.messages', compact('contacts_profile'));
    }

    public function getMessages(){
        $contacts = DB::table('messages')->where('user_id', Auth::user()->id)->select('receiver_id')->distinct()->get();
        $messages = DB::table('messages')->where('user_id', Auth::user()->id)->get();
       // $messages = Message::all();
        return json_decode($messages);
    }

    public function savePhone(Request $request){
        $phone = new Contact;
        $phone->user_id = Auth::user()->id;
        $phone->phone_one = $request->phone;
        $phone->save();
        return redirect()->intended();
    }

    public function saveFamily(Request $request)
    {
        $family_info = FamilyInfo::where('user_id', Auth::user()->id)->first();
        if($family_info == null)
            $family_info = new FamilyInfo();
        $family_info->user_id = Auth::user()->id;
        $family_info->no_of_siblings = $request->no_of_siblings;
        $family_info->married_brothers = $request->married_brothers;
        $family_info->unmarried_brothers = $request->unmarried_brothers;
        $family_info->married_sisters = $request->married_sisters;
        $family_info->unmarried_sisters = $request->unmarried_sisters;
        $family_info->father_alive = $request->father_alive;
        $family_info->mother_alive = $request->mother_alive;
        $family_info->save();
        return redirect()->back();
    }

    public function saveRelationInfo(Request $request)
    {
        //dd($request->all());
        $relation = ExpectedRelation::where('user_id', Auth::user()->id)->first();
        if($relation == null)
            $relation = new ExpectedRelation();
        $relation->user_id = Auth::user()->id;
        $relation->dob = $request->dob;
        $relation->height_id = $request->height;
        $relation->education_id = $request->education;
        $relation->cast_id = $request->cast;
        $relation->sect_id = $request->sect;
        $relation->mother_language_id = $request->mother_language;
        $relation->occupation_id = $request->occupation;
        $relation->comments = $request->about;
        $relation->save();
        return redirect()->back();
    }


}
