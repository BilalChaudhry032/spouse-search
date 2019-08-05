<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MartialStatus extends Model
{
    // Relationships Starts Here
    public function martial()
    {
        return $this->hasMany('App\User');
    }
}
