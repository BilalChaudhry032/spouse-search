<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    // Relationships Starts Here
    public function height()
    {
        return $this->hasMany('App\User');
    }
}
