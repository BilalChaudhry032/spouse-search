@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="dashboard-hero pb-5">
        <!-- Navigation Starts Here -->
        <nav class="navbar navbar-expand-lg navbar-dark py-4">
            <div class="container">

                <a class="navbar-brand logo" href="index.html"><img src="images/logo/logo.png"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-primary px-5 my-2 my-sm-0" type="submit">Sign In</button>
                        <button class="btn btn-primary px-5 my-2 my-sm-0 ml-2" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navigation Ends Here -->

        <div class="mt-5 mb-3 w-100">
            <h3 class="font-weight-light text-center text-white mb-3">Modify Your Search</h3>

            <div class="main-search text-white">
                <div class="container">
                    <div class="search-input main-search-container">
                    <span class="search-input-container">
                        <span class="search-input-text"> Search for Bride or Groom</span>
                        <a class="search-button"> Modify </a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section Ends Here -->

    </header>
    <!-- Header Ends Here -->

    <!-- Main Area Starts Here -->
    <main>
        <!-- Profile Results Section Starts Here -->
        <section class="profile-results mt-5">


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                                 src="{{URL::asset('/uploads/avatar/')}}/{{ Auth::user()->profile_pic}}">
                            <div class="card-body">
                                <ul>
                                    <li> {{ Auth::user()->name  }} </li>
                                    <li> {{ Auth::user()->email  }} </li>
                                    <li> {{Auth::user()->genderRelation['gender'] }} </li>
                                    <li> {{Auth::user()->sectRelation['sect'] }} </li>
                                    <li> {{Auth::user()->religionRelation['religion'] }} </li>
                                    <li> {{Auth::user()->cityRelation['city'] }} </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-card">
                            <div class="p-card-container">
                                <div class="p-card-img">
                                    <img class="img-fluid"
                                         src="{{URL::asset('/uploads/avatar/')}}/{{ Auth::user()->profile_pic}}" alt="">
                                    <div class="p-card-img-overlay">
                                        <div class="text">Hello World</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 pl-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Critical Fields
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <h6>Age</h6>
                                        {{ \Carbon\Carbon::parse(Auth::user()->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Martial Status</h6>
                                        {{ Auth::user()->martialStat['martial_status'] }}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Religion</h6>
                                        {{ Auth::user()->religionRelation['religion'] }}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Mother Tongue</h6>
                                        {{ Auth::user()->MotherLanguageRelation['mother_language'] }}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Sect, Cast</h6>
                                        {{ Auth::user()->sectRelation['sect'] }} , {{ Auth::user()->castRelation['cast'] }}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Profile Managed By</h6>
                                        This profile is managed by {{ Auth::user()->profileFors['user_relation'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container profile-results-container">
                <h4 class="font-weight-light matches-heading">25,999 Matches Found</h4>


                <div class="profile-results-right pl-0">
                    <div class="profile-detailed-card">
                        <div class="profile-detailed-card-img">
                            <img src="{{URL::asset('/uploads/avatar/')}}/{{ Auth::user()->profile_pic}}">
                            <div class="profile-detailed-card-img-hover">
                                <div class="text">John Doe</div>
                            </div>
                        </div>
                        <div class="profile-detailed-card-info">
                            <div class="profile-detailed-card-info-container py-3 px-3 ">
                                <h3 class="font-weight-light border-bottom pb-1 profile-card-name"> John Doe </h3>
                                <div class="row">
                                    <div class="col-sm-6 profile-detailed-card-data">
                                        <p> 28 Years 5'6''</p>
                                    </div>
                                    <div class="col-md-6 profile-detailed-card-data">
                                        <p> CA, B.Com</p>
                                    </div>
                                    <div class="col-sm-6 profile-detailed-card-data">
                                        <p> Lahore </p>
                                    </div>
                                    <div class="col-md-6 profile-detailed-card-data">
                                        <p> Banking Professional </p>
                                    </div>
                                    <div class="col-sm-6 profile-detailed-card-data">
                                        <p> Sunni Ahle Hadees </p>
                                    </div>
                                    <div class="col-md-6 profile-detailed-card-data">
                                        <p> 1 - 1.5 Lac </p>
                                    </div>
                                    <div class="col-md-12">
                                        <p> Studied at University of Punjab, Lahore</p>
                                    </div>
                                </div>
                                <div class="row bg-dark text-center profile-contact-list">
                                    <div class="col-md-4">
                                        <a href=""> <i class="far fa-user"></i> View Profile </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href=""> <i class="fas fa-mobile-alt"></i> Contact </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href=""> <i class="far fa-heart"></i> Add to Favrouite </a>
                                    </div>
                                </div>

                            </div>
                            <div class="profile-detailed-contact-bar"></div>
                        </div>
                    </div>


                    <!-- Profile Detailed Tabs -->
                    <div class="profile-detailed-tab">
                        <div class="profile-detailed-pills">
                            <div class="row">
                                <div class="col-md-3 profile-detailed-pill">
                                    <i class="far  fa-user"></i>
                                    <h6> About Her </h6>
                                </div>
                                <div class="col-md-3 profile-detailed-pill">
                                    <i class="far  fa-user"></i>
                                    <h6> About Her </h6>
                                </div>
                                <div class="col-md-3 profile-detailed-pill">
                                    <i class="far  fa-user"></i>
                                    <h6> About Her </h6>
                                </div>
                                <div class="col-md-3 profile-detailed-pill">
                                    <i class="far  fa-user"></i>
                                    <h6> About Her </h6>
                                </div>
                            </div>
                        </div>
                        <div class="profile-detailed-tab-body">
                            <div class="profile-detailed-description">
                                <p>"she is smart , intelligent ,well mannered and a cultured girl. she was a topper
                                    throughout her academics .She is presently pursuing her M.B.A from M.I.T Moradabad .
                                    Her hobbies are reading books,cooking ,listening to music and travelling . she is
                                    open- minded yet family oriented girl.</p>
                            </div>
                            <h5> About Her Family </h5>
                            <p>My father was a S.D.O in electricity department U.P. My brother is a govt. contractor.
                                Basically we are zameendars from ujhari dist. Amroha with a political background. But
                                currently settled in Moradabad.</p>
                            <h5> Education </h5>
                            <p>My father was a S.D.O in electricity department U.P. My brother is a govt. contractor.
                                Basically we are zameendars from ujhari dist. Amroha with a political background. But
                                currently settled in Moradabad.</p>
                            <h5> Not filled in </h5>
                            <p>My father was a S.D.O in electricity department U.P. My brother is a govt. contractor.
                                Basically we are zameendars from ujhari dist. Amroha with a political background. But
                                currently settled in Moradabad.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- Profile Results Section Ends Here -->
    </main>
    <!-- Main Area Ends Here -->

@endsection

