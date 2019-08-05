<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultantLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:consultant', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.consultant-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);

        if (Auth::guard('consultant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // If successful then redirect to their intended location

            return redirect()->intended(route('consultant.dashboard'));

        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('consultant')->logout();
        return redirect('/consultant/login');
    }
}
