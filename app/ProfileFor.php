<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileFor extends Model
{
    //

    // Relationships Starts Here
    public function userInfo()
    {
        return $this->hasMany('App\User');
    }
}
