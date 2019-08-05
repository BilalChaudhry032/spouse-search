<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // Relationships Starts Here
    public function user(){
        return $this->hasMany('App\User');
    }
}
