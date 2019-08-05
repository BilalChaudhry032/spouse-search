<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function foll(){
        return $this->belongsTo('App\User', 'interested_id');
    }
}
