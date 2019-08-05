<?php

namespace App\Http\Controllers;

use App\Interest;
use Auth;
use Illuminate\Http\Request;
use App\Counter;

class InterestController extends Controller
{

    public static function isInterested($id)
    {
        $short = Interest::all();
        foreach ($short as $s) {
            if (Auth::user()->id == $s->user_id && $id == $s->interested_id) {
                return true;
            }
        }
        return false;
    }

///////////////////////////////

    public function addInterest($id)
    {
        $user_id = $id;
        if (!$this->isInterested($user_id)) {
            $s = new Interest;
            $s->user_id = Auth::user()->id;
            $s->interested_id = $user_id;
            $s->save();

            echo "success";

            // Interest Notification
            $notification = array(
                'message' => 'Successfully You have successfully sent interest to the user!!',
                'alert-type' => 'success'
            );

        } else {
            echo "error";
            $notification = array(
                'message' => 'Error! You have already sent interest to that user!',
                'alert-type' => 'info'
            );
        }


        $counter = Counter::where('user_id', '=', Auth::user()->id)->first();

//dd($counter);


        if ($counter == Null) {
            //dd('Failure');
            $counter = new Counter;
            $counter->user_id = Auth::user()->id;
            $counter->interests_sent = $counter->interests_sent + 1;
            $counter->save();
            //dd('Stwp One');


            $counter_to = Counter::where('user_id', '=', $id)->first();


            if ($counter_to == NULL) {
                $counter_to = new Counter;
                $counter_to->user_id = $id;
                $counter_to->interests_received_after = $counter_to->interests_received_after + 1;
                $counter_to->save();
            } else {
                $id = $counter_to->id;
                $counter_to = Counter::find($id);
                $counter_to->interests_received_after = $counter_to->interests_received_after + 1;
                $counter_to->save();
            }

            //return redirect()->back();
        } else {
            Auth::user()->counter->interests_sent = Auth::user()->counter->interests_sent + 1;
            Auth::user()->counter->save();

            //$counter_to = Counter::where('user_id','=',$id)->first();

            $counter_to = Counter::where('user_id', '=', $id)->first();

            if ($counter_to == NULL) {
                $counter_to = new Counter;
                $counter_to->user_id = $id;
                $counter_to->interests_received_after = $counter_to->interests_received_after + 1;
                $counter_to->save();
            } else {

                //dd('Hi!');
                $id = $counter_to->id;
                $counter_to = Counter::find($id);
                $counter_to->interests_received_after = $counter_to->interests_received_after + 1;
                $counter_to->save();
            }
            //dd('success');
            //dd($contact->facebook);

            //return redirect()->back();
        }


        return redirect()->back()->with($notification);
    }

    public function getInterests()
    {
        $interest = Interest::where('interested_id', '=', Auth::user()->id)->get();
        //dd($interest);
        if ($interest->isEmpty()) {
            dd('Failure ');
        } else {
            return response(json_decode($interest));
            dd('Success ');
        }
    }

    public
    function acceptInterest($id)
    {

        if (Interest::where('user_id', $id)->where('interested_id', Auth::user()->id)) {
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
            $interest = Interest::where('user_id', $id)->where('interested_id', Auth::user()->id)->first();

            //dd($interest->status);
            $interest->status = 1;
            $interest->save();
            return redirect()->back();
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->get());
        } else {
            return redirect()->back();
        }

    }


    public function AcceptInterestConsultant($user_id, $interested_id){

        if (Interest::where('user_id', $user_id)->where('interested_id', $interested_id)) {
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
            $interest = Interest::where('user_id', $user_id)->where('interested_id', $interested_id)->first();

            //dd($interest->status);
            $interest->status = 1;
            $interest->save();
            return redirect()->back();
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->get());
        } else {
            return redirect()->back();
        }

    }

    public
    function rejectInterest($id)
    {

        //dd($id);
        if (Interest::where('user_id', $id)->where('interested_id', Auth::user()->id)) {
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->first());
            $interest = Interest::where('user_id', $id)->where('interested_id', Auth::user()->id)->first();

            //dd($interest->status);
            $interest->status = 0;
            $interest->save();
            return redirect()->back();
            //dd(Interest::where('user_id',$id)->where('interested_id',Auth::user()->id)->get());
        } else {
            return redirect()->back();
        }


    }
}


