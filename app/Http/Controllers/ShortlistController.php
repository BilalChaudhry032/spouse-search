<?php

namespace App\Http\Controllers;

use App\Shortlist;
use Auth;
use Illuminate\Http\Request;

class ShortlistController extends Controller
{
    public static function isShortlisted($id)
    {
        $short = Shortlist::all();
        foreach($short as $s){
            if(Auth::user()->id == $s->user_id  && $id == $s->shortlisted_id){
                return true;
            }
        }
        return false;
    }
    public function shortlistMe($id)
    {
        if (!$this->isShortlisted($id)){
            $s =  new Shortlist;
            $s->user_id = Auth::user()->id;
            $s->shortlisted_id = $id;
            $s->save();
        }

        else{
            return 'You are already following that user';
        }

        return redirect()->back();
    }
}
