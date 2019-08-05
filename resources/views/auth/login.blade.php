@extends('layouts.user')

@section('content')
    <div class="reg-form" style="margin-top: -60px">

        <div class="card-login">
           <div class="container p-5">
               <h3 class="card-title mb-5"> Login to your account </h3>
               <form method="POST" action="{{ route('login') }}">
                   @csrf

                  <div class="container">
                      <div class="form-group row">



                          <input id="email" type="email"
                                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                 name="email" value="{{ old('email') }}" required autocomplete="false" placeholder="Email">

                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                          @endif

                      </div>

                      <div class="form-group row">


                          <input id="password" type="password"
                                 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                 name="password" required placeholder="Password">

                          @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                          @endif
                      </div>

                      <div class="form-group row">

                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"
                                         name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                              </label>
                          </div>

                      </div>

                      <div class="form-group row mb-0">
                          <button type="submit" class="btn btn-red w-100">
                              {{ __('Login') }}
                          </button>

                          <a class="btn btn-link text-white text-right" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      </div>
                  </div>
               </form>
           </div>
        </div>

    </div>

@endsection
