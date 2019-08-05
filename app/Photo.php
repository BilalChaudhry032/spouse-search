<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function PhotoRelation()
    {
        return $this->hasMany('App\Gender');
    }
}
