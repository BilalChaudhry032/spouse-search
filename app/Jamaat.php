<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jamaat extends Model
{
    public function jamaat()
    {
        return $this->hasMany('App\User');
    }
}
