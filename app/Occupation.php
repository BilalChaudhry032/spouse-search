<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function occupation()
    {
        return $this->hasMany('App\User');
    }
}
