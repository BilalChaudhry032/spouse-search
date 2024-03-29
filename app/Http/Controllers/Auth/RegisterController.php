<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'dob' => $data['dob'],
            'profile_fors_id' => $data['profile_for'],
            'mother_language_id' => $data['mother_language'],
            'religion_id'=>$data['religion'],
            'martial_status_id'=>$data['martial_status'],
            'country_id'=>$data['country'],
            'state_id'=>$data['state'],
            'city_id'=>$data['city'],
            'cast_id'=>$data['cast'],
            'sect_id'=>$data['sect'],
            'gender_id'=>$data['gender'],
            'height_id'=>$data['height'],
            'education_id'=>$data['education'],
            'occupation_id'=>$data['occupation'],
            'income_id'=>$data['income'],
            'about'=>$data['about'],
            'password' => Hash::make($data['password']),
        ]);

    }
}
