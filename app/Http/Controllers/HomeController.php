<?php

namespace App\Http\Controllers;

use App\Interest;
use App\ProfileView;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

use Image;
use Mail;
use Illuminate\Support\Facades\Input;
use App\Shortlist;
use Session;

use App\Mail\ConfirmEmail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $name = Auth::user()->name;
        $email = Auth::user()->email;

        $v_code = mt_rand(100000, 999999);
        if(Auth::user()->verified){
            $users = User::all();
            $short = Shortlist::all();
            $interest = Interest::all();

            //Profile Views
            //dd($profile_clicked = ProfileView::where('profile_id',Auth::user()->id)->get());
            $profile_clicked = ProfileView::where('profile_id',Auth::user()->id)->count();




            $interestSent = Interest::where('user_id',Auth::user()->id)->get();

            $shortlisted = Shortlist::where('user_id',Auth::user()->id)->get();
            //dd($shortlisted);


            // Filtering Featured Users
            if(Auth::user()->gender_id == 1){
                $featuredProfiles = User::where('featured',1)->where('gender_id',2)->take(6)->get();
                $users = User::where('gender_id',2)->where('featured',null)->take(6)->where('consultant_id',null)->get();
                $verified = User::with('ShortlistRelation')->where('gender_id',2)->where('consultant_id','!=',null)->take(6)->get();
            }
            else{
                $featuredProfiles = User::where('featured',1)->where('gender_id',1)->take(6)->get();
                $users = User::where('gender_id',1)->where('featured',null)->where('consultant_id',null)->take(6)->get();
                $verified = User::where('gender_id',1)->where('consultant_id','!=',null)->take(6)->get();

            }

            $profile_views = Auth::user()->ProfileView->count();


        $shortlist= Shortlist::with('user')->where('user_id',Auth::user()->id)->get();

//            dd($shortlist);

            return view('home',compact('users','short','interest','profile_views','interestSent','shortlisted','profile_clicked','featuredProfiles','verified','shortlist'));
        }
//        elseif(Auth::user()->verification_code){
//            $users = User::all();
//            $short = Shortlist::all();
//            $interest = Interest::all();
//            return view('pages.user.emailVerification',compact('users','short','interest','profile_views'));
//        }
        else{

            $data = ['message' => 'This is a test!'];

            Mail::to(Auth::user()->email)->send(new ConfirmEmail($v_code));


//            Mail::send(['html' => 'email.email'], compact('name','email','v_code'), function($message) {
//                $message->to( Auth::user()->email, $name = Auth::user()->name)
//                    ->subject('Account Confirmation Email');
//                $message->from('support@spouse-search.com','Spouse Search - Email Confirmation');
//            });
            //$u = new User;
           Auth::user()->verification_code = $v_code;
            //dd($v_code);

            Auth::user()->save();

            

            return view('pages.user.emailVerification',compact('users','short','interest','profile_views'));
        }
    }

    public function verifyEmail(Request $request)
    {
        //dd($request->six_digit_code);

        if($request->six_digit_code == Auth::user()->verification_code){
            Auth::user()->verified = true;
            Auth::user()->save();
        }
        else{
            Session::flash('message', 'wrong verification code');
        }
        return redirect()->back();
    }
}
