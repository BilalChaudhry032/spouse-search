<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top " style="-webkit-box-shadow: 0 1px 6px rgba(57,73,76,0.35);
    box-shadow: 0 1px 6px rgba(57,73,76,0.35);">
    <div class="container">

        <a class="navbar-brand logo" href=" {{ url('/') }}">
            <img src="{{ asset('images/logo/spouse-logo.svg') }}" alt="" height="20px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
                @if(Auth::check())
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link {{ Request::is('messages') ? 'active' : '' }}" href="{{ url('/messages') }}">Messages</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('search') ? 'active' : '' }}" href="{{ url('/search') }}">Search</a>
                    </li>

                  {{--  <li class="nav-item">
                        <a class="nav-link {{ Request::is('photo-requests') ? 'active' : '' }}" href="{{ url('/photo-requests') }}">Photo Requests</a>
                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('help') ? 'active' : '' }}" href="{{ url('/help') }}">Help</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('interests') ? 'active' : '' }}" href="{{ url('/interests')  }}">Interest

                                @if(Auth::user()->counter)
                                    @if( Auth::user()->counter->interests_received_after )
                                    <span class="badge badge-primary bg-red">{{ Auth::user()->counter->interests_received_after }}  </span>
                                    @endif


                                @else

                                @endif

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('upgrade') ? 'active' : '' }}" href=" {{ url('/upgrade') }} ">Upgrade</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('help') ? 'active' : '' }}" href="{{ url('/help') }}">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/support') }}">Support</a>
                    </li>
                @endif

                <form class="form-inline my-lg-0 ml-3">
                    @if (Route::has('login'))
                        @auth

                                <ul class="navbar-nav">
                                    <!-- Authentication Links -->


                                    <li class="nav-item dropdown text-center">
                                        @if(Auth::user()->profile_pic != 'default.png' )
                                            <img style="height: 35px; width: 35px; margin-top: 3px; display: inline-block"
                                                 src="{{ Auth::User()->profile_pic}}">
                                        @else
                                            <img style="height: 35px; width: 35px; margin-top: 3px; display: inline-block"
                                                 src="{{asset('../storage/uploads/avatar/default.png')}}">
                                        @endif

                                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-inline pl-1" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="{{ url('/profile') }}">
                                                <i class="fas fa-user mr-2"></i> Profile
                                            </a>


                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               >
                                                <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>


                                        </div>

                                    </li>


                                    @else
                                       <ul class="navbar-nav text-center w-100">
                                           <li class="nav-item ">
                                               <a class="btn btn-outline-red" href="{{ route('login') }}">  Login </a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="btn btn-red px-5 ml-2" href="{{ route('register') }}">Register</a>
                                           </li>
                                       </ul>
                                        @endauth
                                    @endif

                                    @if (Request::is('companies'))
                                        Companies menu
                            @endif


                </form>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation Ends Here -->