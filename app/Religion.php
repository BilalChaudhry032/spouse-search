<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    // Relationships Starts Here
    public function UserRelation()
    {
        return $this->hasMany('App\User');
    }
}
