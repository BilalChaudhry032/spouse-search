<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function foll(){
        return $this->belongsTo('App\User', 'shortlisted_id');
    }
}
