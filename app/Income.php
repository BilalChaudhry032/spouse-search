<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function income()
    {
        return $this->hasMany('App\User');
    }
}
