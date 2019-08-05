@extends('layouts.user')

@section('content')

    @include('layouts.user.navigation')
    <!-- Header -->
    <header class="hero-section-main">
        <!-- Navigation Starts Here -->


    <!-- Here Section Starts Here -->
        <div class="hero-text w-100">

            <div class="main-search text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 pr-5 mt-4 text-sm-center text-md-left">
                            <h1 class="font-italic text-left text-white mb-2 hero-heading font-weight-bold"> Your life partner is just a few clicks away!</h1>
                            <p class="font-italic main-heading-description"> Spouse-Search.com is the top matrimony website, that gather profiles from all over the world and brings it in front of you. You can choose the best that suits you, get contacted and it’s all done.    </p>
                            <a href="{{ route('register') }}" class="btn btn-red btn-lg px-5 mb-5"> Join – It's Free! </a>
                        </div>
                        <div class="col-md-5 main-search-form">
                            <h3 class="display-5 text-white"> Search Partner </h3>
                            <!-- Searach Form Basic -->
                            <form action="{{ url('basic_search') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12 mb-1">

                                        <select name="gender" class="custom-select">
                                            <option value="1">Bride</option>
                                            <option value="2">Groom</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5 col-sm-5 col-5 pr-0 mb-1">
                                        <label for="">Age</label>
                                        <select class="custom-select" name="age_from">
                                            @for ($i = 1; $i < 54; $i++)
                                                <option value="{{$i+17}}"> {{ $i+17 }}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-2 col-2 text-center mt-text mb-1">
                                        - to -
                                    </div>
                                    <div class="form-group col-md-5 mt-form col-sm-5  mb-1 col-5 pl-0">
                                        <select class="custom-select" name="age_to">
                                            @for ($i = 1; $i < 54; $i++)
                                                <option value="{{$i+17}}" @if($i+17 == 26) selected @endif> {{ $i+17 }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 mb-1">
                                        <label> Religion </label>
                                        <select class="custom-select" name="religion">
                                            <option selected  value="0">Religion</option>
                                            @foreach($religions as $r)
                                                <option value="{{ $r->id  }}">{{ $r->religion  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label> Mother Tongue </label>
                                        <select name="language" class="custom-select">
                                            <option value="0">Select Language</option>
                                            @foreach($languages as $ml)
                                                <option value="{{ $ml->id  }}">{{ $ml->mother_language  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-dark w-100"> Search</button>
                                </div>
                            </form>
                            <!-- Search Form Basic -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section Ends Here -->
    </header>
    <!-- Header Ends Here -->



    <!-- Main Area Starts Here -->
    <main>



        <!-- About Us Section Starts Here -->
        <section class="about-us">
            <div class="section-header container">
                <h3 class="section-title"> Steps To Find Your Match </h3>
                <hr>
            </div>
            <div class="section-body container">
                <div class="row mb-3">
                    <div class="form-group col-md-4 col-sm-4 col-4 mb-3">
                        <div class="icon">
                            <img src="images/icons/icon1.png" alt="">
                        </div>
                        <h5> Create a Profile </h5>
                        <p>
                            First, all we need is just your personal information that we will later use to find the suitable matches, and all the information you provide will be secured.
                        </p>
                    </div>
                    <div class="form-group col-md-4 col-sm-4 col-4 mb-3">
                        <div class="icon">
                            <img src="images/icons/icon2.png" alt="">
                        </div>
                        <h5> Find Match </h5>
                        <p>
                            Once the profile created, you will become the part of our community. You will then find thousands of profile, you can select from.
                        </p>
                    </div>
                    <div class="form-group col-md-4 col-sm-4 col-4 mb-3">
                        <div class="icon">
                            <img src="images/icons/icon3.png" alt="">
                        </div>
                        <h5> Start Communication </h5>
                        <p>
                            Once the interest is accepted you will be able to see the contact details and emails and start communication.
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- About Us Section Ends Here -->




        <!-- About Us Section Starts Here -->
        <section class="py-3 about-section">

            <div class="section-header container">
                <h3 class="section-title"> About <b class="text-red">Spouse Search</b></h3>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <p class="title-description pb-5">
                            Spouse-Search.com is the top rising matrimony website trusted by many. We understand the difficulties in finding the perfect match for your life. So, we provide you effortless and secure platform that will make the things easier for you. We have enhanced the user experience by making the matchmaking experience to a whole
                            new level.It includes Screening of all the joining members, privacy options, email verification and much more. There is also an experience and dedicated customer care team to resolve any kind of issue you have while using our platform.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section Ends Here -->

        @guest
            <section class="bg-red py-3 w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="text-white mb-0 font-weight-light">Are You a consultant? Login Here! </h3>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('consultant/login') }}"
                               class="btn btn-light"> Consultant Login </a>
                        </div>
                    </div>
                </div>
            </section>
            @endguest
    </main>
    <!-- Main Area Ends Here -->

@endsection

