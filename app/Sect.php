<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sect extends Model
{
    // Relationships Starts Here
    public function UserRelation()
    {
        return $this->hasMany('App\Sect');
    }
}
