<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    // Relationships Starts Here
    public function user(){
        return $this->hasMany('App\User');
    }
}
