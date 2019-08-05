@extends('layouts.user')

@section('style')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css'>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <style>

        .intl-tel-input {
            display: table-cell;
        }

        .intl-tel-input .selected-flag {
            z-index: 4;
        }

        .intl-tel-input .country-list {
            z-index: 5;
        }

        .input-group .intl-tel-input .form-control {
            border-top-left-radius: 4px;
            border-top-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
        }
    </style>
@endsection
@section('content')


    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')
    @include('partials.user.confirmEmail')

    @php
        $status = false;
    @endphp
    <header class="home-header pt-5">
        <div class="container py-5">
            <div class="row pb-3">
                @if(Auth::user()->counter)
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center mb-2">
                        <h1 class="w-100 display-4 text-red bg-white mb-0 py-2">

                            @if($profile_clicked)
                                {{ $profile_clicked }}
                            @else
                                0
                            @endif
                        </h1>
                        <div class="w-100 bg-dark text-white py-1"> Profile Views</div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center mb-2">
                        <h1 class="w-100 display-4 text-red bg-white mb-0 py-2">

                            @if(Auth::user()->profileView)
                                {{ $profile_views }}
                                <small class="text-secondary" style="font-size: 1rem">/30</small>
                            @else
                                0
                            @endif
                        </h1>
                        <div class="w-100 bg-dark text-white py-1"> Profiles Clicked</div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center mb-2">
                        <h1 class="w-100 display-4 text-red bg-white mb-0 py-2">
                            @if(Auth::user()->counter->interests_sent)
                                {{ $interestSent->count() }}
                                <small class="text-secondary" style="font-size: 1rem"> /15</small>
                            @else
                                0
                            @endif
                        </h1>
                        <div class="w-100 bg-dark text-white py-1"> Interests Sent</div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center mb-2">
                        <h1 class="w-100 display-4 text-red bg-white mb-0 py-2">

                            @if(Auth::user()->counter->interests_received_after)
                                {{ Auth::user()->counter->interests_received_after }}
                            @else
                                0
                            @endif
                        </h1>
                        <div class="w-100 bg-dark text-white py-1"> Interest Recieved</div>
                    </div>
                @endif
            </div>
            <h2 class="font-weight-light text-light"> Wellcome back, {{ Auth::user()->name }}!</h2>
        </div>
    </header>

    <!-- Main Area Starts Here -->
    <main>
        <!-- Profile Results Section Starts Here -->
        <section class="profile-results mt-5">

            <div class="container profile-results-container">

                <div class="row">


                    <div class="col-md-8 profile-results-right pr-2">

                        @if($featuredProfiles->count() > 0)
                            <div class="dashboard-card">
                                <div class="">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="font-weight-light">Featured Profiles</h5>
                                        </div>
                                        <div class="col-6 text-right">
                                            <h5 class="font-weight-light">( {{ $featuredProfiles->count() }} )</h5>
                                        </div>
                                    </div>
                                    <hr class="mt-1">
                                    <div class="row mb-3">
                                        @foreach($featuredProfiles as  $user)
                                            <div class="col-md-4 col-sm-6 col-6 mb-3 pr-0">
                                                <div class="card text-center pro-card featured-profile">


                                                    <a href="" class="featured-icon"> Featured </a>
                                                    @if($user->ShortlistRelation())

                                                        <span class="shortlist-icon-active disabled"

                                                              data-toggle="tooltip" data-placement="top"
                                                              title="Shortlisted {{ $user->name }}"><i
                                                                    class="fa fa-star"></i></span>
                                                    @else
                                                        <a class="shortlist-icon"
                                                           href="{{ url('shortlist',$user->id) }}"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Shortlist {{ $user->name }}"><i
                                                                    class="far fa-star"></i></a>

                                                    @endif


                                                    @if($user->profile_pic == "default.png")
                                                        <img src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $user->profile_pic}}"
                                                             class="card-img-top">
                                                    @else
                                                        <img src="{{ $user->profile_pic}}"
                                                             class="card-img-top">
                                                    @endif

                                                    <div class="card-body">

                                                        <h5 class="text-capitalize"> {{ $user->name  }} </h5>
                                                        <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                                            , {{ $user->genderRelation['gender'] }}</p>
                                                        <p class="text-muted mb-2">{{ $user->MotherLanguageRelation['mother_language'] }}
                                                            , {{ $user->sectRelation['sect'] }} </p>
                                                        <a href="{{ url('user',$user->id) }}"
                                                           class="btn btn-sm btn-red mb-3">View Profile</a>

                                                        <a href="@if(!Auth::user()->contact) @else  {{ url('interest',$user->id) }} @endif"
                                                           class="btn btn-outline-dark btn-sm mb-3"
                                                           @if(!Auth::user()->contact) data-toggle="modal"
                                                           data-target="#contactDetails" @else  @endif > Send
                                                            Interest </a>
                                                    </div>
                                                </div>
                                            </div>



                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($verified->count() > 0 )
                            <div class="dashboard-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-weight-light">Verified Profiles</h5>
                                    </div>
                                    <div class="col-6 text-right">
                                        <h5 class="font-weight-light">( {{$verified->count() }} )</h5>
                                    </div>
                                </div>
                                <hr class="mt-1">
                                <div class="row">
                                    @foreach($verified as  $user)
                                        <div class="col-md-4 col-sm-6 col-6 mb-3 pr-0">

                                            <div class="card text-center pro-card  @if($user->featured)  featured-profile  @endif ">


                                                @if($user->featured)
                                                    <a href="" class="featured-icon"> Featured </a>
                                                @endif
                                                @if($user->consultant_id)
                                                    <a href="" class="verified-icon"> Verified </a>
                                                @endif

                                                    {{--@foreach($shortlist as $key=>$short)--}}
                                                {{--@if($user->ShortlistRelation())--}}
                                                    {{--@if($shortlist[$key]->shortlisted_id == $user->id)--}}
                                                    {{--<span class="shortlist-icon-active disabled"--}}
                                                          {{--data-toggle="tooltip" data-placement="top"--}}
                                                          {{--title="Shortlisted {{ $user->name }}"><i--}}
                                                                {{--class="fa fa-star"></i></span>--}}
                                                {{--@else--}}
                                                    {{--<a class="shortlist-icon"--}}
                                                       {{--href="{{ url('shortlist',$user->id) }}"--}}
                                                       {{--data-toggle="tooltip" data-placement="top"--}}
                                                       {{--title="Shortlist {{ $user->name }}"><i--}}
                                                                {{--class="far fa-star"></i></a>--}}

                                                {{--@endif--}}
                                                {{--@endforeach--}}
                                                @if($user->profile_pic == "default.png")
                                                    <img src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $user->profile_pic}}"
                                                         class="card-img-top">
                                                @else
                                                    <img src="{{ $user->profile_pic}}"
                                                         class="card-img-top">
                                                @endif

                                                <div class="card-body">

                                                    <h5 class="text-capitalize"> {{ $user->name  }} </h5>
                                                    <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                                        , {{ $user->genderRelation['gender'] }}</p>
                                                    <p class="text-muted mb-2">{{ $user->MotherLanguageRelation['mother_language'] }}
                                                        , {{ $user->sectRelation['sect'] }} </p>
                                                    <a href="{{ url('user',$user->id) }}"
                                                       class="btn btn-sm btn-red mb-3">View Profile</a>

                                                    <a href="@if(!Auth::user()->contact) '' @else  {{ url('interest',$user->id) }} @endif"
                                                       class="btn btn-outline-dark btn-sm mb-3"
                                                       @if(!Auth::user()->contact) data-toggle="modal"
                                                       data-target="#contactDetails" @else  @endif > Send
                                                        Interest </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if($users->count() > 0)
                            <div class="dashboard-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-weight-light">Daily Recommendations</h5>
                                    </div>
                                    <div class="col-6 text-right">
                                        <h5 class="font-weight-light">( {{$users->count() }} )</h5>
                                    </div>
                                </div>
                                <hr class="mt-1">
                                <div class="row">
                                    @foreach($users as  $user)
                                        <div class="col-md-4 col-sm-6 col-6 mb-3 pr-0">

                                            <div class="card text-center pro-card  @if($user->featured)  featured-profile  @endif ">


                                                @foreach($short as $s)
                                                    @if(Auth::user()->id == $s->user_id  && $user->id == $s->shortlisted_id)
                                                        @php
                                                            $status = true;
                                                        @endphp
                                                        @break
                                                    @else
                                                        @php
                                                            $status = false;
                                                        @endphp
                                                    @endif
                                                @endforeach

                                                @if($user->featured)
                                                    <a href="" class="featured-icon"> Featured </a>
                                                @endif
                                                @if($user->consultant_id)
                                                    <a href="" class="featured-icon"> Verified </a>
                                                @endif
                                                @if($status)
                                                    <a class="shortlist-icon-active"
                                                       href="{{ url('shortlist',$user->id) }}"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Shortlist {{ $user->name }}"><i
                                                                class="fa fa-star"></i></a>
                                                @else
                                                    <a class="shortlist-icon"
                                                       href="{{ url('shortlist',$user->id) }}"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Shortlist {{ $user->name }}"><i
                                                                class="far fa-star"></i></a>

                                                @endif

                                                @if($user->profile_pic == "default.png")
                                                    <img src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $user->profile_pic}}"
                                                         class="card-img-top">
                                                @else
                                                    <img src="{{ $user->profile_pic}}"
                                                         class="card-img-top">
                                                @endif

                                                <div class="card-body">

                                                    <h5 class="text-capitalize"> {{ $user->name  }} </h5>
                                                    <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                                        , {{ $user->genderRelation['gender'] }}</p>
                                                    <p class="text-muted mb-2">{{ $user->MotherLanguageRelation['mother_language'] }}
                                                        , {{ $user->sectRelation['sect'] }} </p>
                                                    <a href="{{ url('user',$user->id) }}"
                                                       class="btn btn-sm btn-red mb-3">View Profile</a>

                                                    <a href="@if(!Auth::user()->contact) '' @else  {{ url('interest',$user->id) }} @endif"
                                                       class="btn btn-outline-dark btn-sm mb-3"
                                                       @if(!Auth::user()->contact) data-toggle="modal"
                                                       data-target="#contactDetails" @else  @endif > Send
                                                        Interest </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif


                    </div>
                    <div class="col-md-4 profile-results-left profile-filter">

                        <div class="dashboard-card">
                            <div style="width: 80px; display: inline-block; margin-right: 1rem">
                                @if(Auth::user()->profile_pic != 'default.png' )
                                    <img style=" width: 80px; margin-top: 3px; display: inline-block"
                                         src="{{ Auth::User()->profile_pic}}">
                                @else
                                    <img style="width: 80px; margin-top: 3px; display: inline-block"
                                         src="{{asset('../storage/uploads/avatar/default.png')}}">
                                @endif
                            </div>

                            <div style="display: inline-block; vertical-align: top">
                                <h6 style="display: inline-block; vertical-align: top; margin-bottom: 5px; width: 100%"
                                    class="font-weight-normal">Welcome Back,</h6>
                                <br>
                                <h5 style="display: inline-block;  width: 100%">{{ Auth::user()->name }}</h5>
                                <br>
                                <a href="{{ url('upgrade') }}">Free Member</a>
                            </div>
                            <div class="w-100 mt-3">
                                <div class="progress-section mb-2">


                                    @if(Auth::user()->profile_pic == 'default.png' && !Auth::user()->contact_id)

                                        <div class="progress" style="height: 20px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width:  60%"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Profile
                                                Completeness 70%
                                            </div>
                                        </div>
                                        <h6 class="pending-task px-2 mt-3 py-1">
                                            Add Profile Pic (+20%)
                                        </h6>
                                        <h6 class="pending-task px-2 mt-1 py-1">
                                            Add Contacts (+10%)
                                        </h6>

                                    @elseif(Auth::user()->profile_pic == 'default.png')
                                        <h6>Interests Left ({{ 15 - $interestSent->count() }}/15)</h6>
                                        <div class="progress" style="height: 30px">

                                            <div class="progress-bar bg-danger" role="progressbar" style="width:  80%;"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Profile
                                                Completeness 80%
                                            </div>
                                        </div>

                                    @elseif(!Auth::user()->contact_id)
                                        <h6>Add Contact (+20)</h6>
                                        <div class="progress" style="height: 20px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width:  80%"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Profile
                                                Completeness 80%
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h4 class="dashboard-card-title"> Quota </h4>
                            </div>
                            <!-- Progress Bars -->
                            <div class="progress-section mb-2">
                                <h6>Interests Left ({{ 15 - $interestSent->count() }}/15)</h6>
                                <div class="progress">

                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width:  @if(  $interestSent->count() ) {{ 100 - (($interestSent->count() / 15)*100)  }}%@else 100% @endif"
                                         aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"> {{15 - $interestSent->count()}} </div>
                                </div>
                            </div>
                            <div class="progress-section  mb-2">
                                <h6>Profile Views Left ({{ 30 - $profile_views }}/30)</h6>
                                <div class="progress">

                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width:  @if(Auth::user()->profileView){{   100 - (($profile_views / 30)*100)}}% @else 0 @endif"
                                         aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"> {{ 30 -$profile_views }}</div>
                                </div>
                            </div>

                            <!-- Progress Bars -->


                        </div>


                        <div class="shortlisted-profiles-list">
                            <div class="shortlisted-profiles-header">
                                <i class="fa fa-star pr-1 text-red"></i> Shortlisted ( {{  $shortlisted->count() }} )
                            </div>

                            <div class="shortlisted-profiles-body">
                                @foreach($shortlisted as $int)
                                    <a class="shortlisted-profile-card d-block" href="{{ url('user',$int->user_id) }}"
                                       target="_blank">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="shortlisted-profile-image">
                                                    @if($int->foll['profile_pic'] == "default.png")
                                                        <img src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $int->foll['profile_pic']}}"
                                                             class="card-img-top">
                                                    @else
                                                        <img src="{{ $int->foll['profile_pic']}}"
                                                             class="card-img-top">
                                                    @endif

                                                </div>
                                                <div class="shortlisted-profile-info">
                                                    <p class="pt-1 text-capitalize mb-1"> {{ $int->foll['name']}} </p>
                                                    @if($int->status)
                                                        <p> Accepted </p>
                                                    @elseif(!$int->status)
                                                        <p class="text-danger mb-1"> Not Accepted </p>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>


                        <div class="shortlisted-profiles-list">
                            <div class="shortlisted-profiles-header">
                                <i class="fa fa-heart pr-1 text-red"></i> Interested ({{ $interestSent->count() }})

                            </div>

                            <div class="shortlisted-profiles-body">

                                @foreach($interestSent as $int)
                                    <a class="shortlisted-profile-card d-block" href="{{ url('user',$int->user_id) }}"
                                       target="_blank">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="shortlisted-profile-image">
                                                    @if($int->foll['profile_pic'] == "default.png")
                                                        <img src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $int->foll['profile_pic']}}"
                                                             class="card-img-top">
                                                    @else
                                                        <img src="{{ $int->foll['profile_pic']}}"
                                                             class="card-img-top">
                                                    @endif
                                                </div>
                                                <div class="shortlisted-profile-info">
                                                    <p class="pt-1 text-capitalize mb-1"> {{ $int->foll['name']}} </p>
                                                    @if($int->status)
                                                        <p> Accepted </p>
                                                    @elseif(!$int->status)
                                                        <p class="text-danger mb-1"> Not Accepted </p>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Profile Results Section Ends Here -->
    </main>

    @if(!Auth::user()->contact)
        @include('partials.user.contacts')
    @endif

    <!-- Main Area Ends Here -->
@endsection


@section('script')
    <sript src="{{ asset('vendor/intlTelInput.js') }}"></sript>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{--<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js'></script>--}}


    <script type="text/javascript">
                @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"
        switch (type) {

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
        }
        @endif

    </script>

@endsection