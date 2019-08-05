<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpectedRelation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
