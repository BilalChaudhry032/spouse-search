<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyInfo extends Model
{
    protected $fillable = [
        'user_id', 'no_of_siblings', 'married_brothers', 'unmarried_brothers', 'married_sisters', 'unmarried_sisters', 'father_alive', 'mother_alive'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
