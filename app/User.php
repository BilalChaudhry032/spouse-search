<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','profile_fors_id','dob','mother_language_id','religion_id','country_id','state_id','city_id','martial_status_id','cast_id','sect_id','gender_id','occupation_id','height_id','education_id','income_id','about', 'consultant_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relationships Starts Here
    public function profileFors()
    {
        return $this->belongsTo('App\ProfileFor','profile_fors_id');
    }

    // Relationships Starts Here
    public function martialStat()
    {
        return $this->belongsTo('App\MartialStatus','martial_status_id');
    }
    // Relationships Starts Here
    public function religionRelation()
    {
        return $this->belongsTo('App\Religion','religion_id');
    }

    //Relationship City Starts Here
    public function cityRelation()
    {
        return $this->belongsTo('App\City','city_id');
    }

    // Relationships Starts Here
    public function stateRelation()
    {
        return $this->belongsTo('App\State','state_id');
    }
    // Relationships Starts Here
    public function countryRelation()
    {
        return $this->belongsTo('App\Country','country_id');
    }

    // Relationships Starts Here
    public function castRelation()
    {
        return $this->belongsTo('App\Cast','cast_id');
    }

    // Relationships Starts Here
    public function sectRelation()
    {
        return $this->belongsTo('App\Sect','sect_id');
    }

    // Relationships Starts Here
    public function genderRelation()
    {
        return $this->belongsTo('App\Gender','gender_id');
    }

    // Relationships Starts Here
    public function MotherLanguageRelation()
    {
        return $this->belongsTo('App\MotherLanguage','mother_language_id');
    }

    // Relationships Starts Here
    public function ShortlistRelation()
    {
        return $this->belongsTo('App\Shortlist','shortlist_id');
    }



    public function shortlister()
    {
        return $this->belongsToMany(User::class, 'shortlists', 'shortlisted_id', 'user_id')->withTimestamps();
    }

    public function shortlisting()
    {
        return $this->belongsToMany(User::class, 'shortlists','user_id','shortlist_id')->withTimestamps();
    }


    // Photo Relation
    public function photosRelation()
    {
        return $this->belongsTo('App\Photo','photos_id');
    }

    // Education Relation
    public function educationRelation()
    {
        return $this->belongsTo('App\Education','education_id');
    }


    // Education Relation
    public function heightRelation()
    {
        return $this->belongsTo('App\Height','height_id');
    }
    // Occupation Relation
    public function occupationRelation()
    {
        return $this->belongsTo('App\Occupation','occupation_id');
    }
    // Occupation Relation
    public function incomeRelation()
    {
        return $this->belongsTo('App\Income','income_id');
    }

    // Occupation Relation
    public function jamaatRelation()
    {
        return $this->belongsTo('App\Jamaat','jamaat_id');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }


    public function countryy(){
        return $this->belongsTo('App\Country', 'country_id');
    }

    public function state(){
        return $this->belongsTo('App\State', 'state_id');
    }

    public function cityy(){
        return $this->belongsTo('App\City', 'city_id');
    }

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }

    public function counter()
    {
        return $this->hasOne('App\Counter');
    }

    public function profileView(){
        return $this->hasMany('App\ProfileView');
    }

    public function interest(){
        return $this->hasMany('App\Interest');
    }

    public function interested(){
        return $this->hasMany('App\Interest', 'interested_id');
    }

    public function family()
    {
        return $this->hasOne('App\FamilyInfo');
    }

    public function expectedRelation()
    {
        return $this->hasOne('App\ExpectedRelation');
    }


}


