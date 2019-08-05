@extends('layouts.user')

@section('content')

    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')

        <header class="home-header text-white"
                style="background: url({{URL::asset('/images/banners/bg-profile.jpg')}}); background-size: cover;">
            <div class="container">
                <div class="row mt-auto">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="row basic-info">
                            <div class="col-md-6">
                                <h1 class="w-100 font-weight-light name-heading">
                                    {{ $user->name }}
                                </h1>
                                <p class="font-weight-bold profile-text">{{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                    , {{ $user->genderRelation['gender'] }}
                                    , {{$user->sectRelation['sect'] }}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                @php
                                $status = false;
                                @endphp
                                @auth
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
                                    @endauth

                                @if($status)
                                    <a class="btn btn-outline-light"
                                       data-toggle="tooltip" data-placement="top"
                                       title="Shortlist {{ $user->name }}"> ShortListed <i class="ml-2 fa fa-star"></i></a>
                                @else
                                    <a class="btn btn-outline-light" href="{{ url('shortlist',$user->id) }}"
                                       data-toggle="tooltip" data-placement="top"
                                       title="Shortlist {{ $user->name }}">Shorlist<i class="ml-2 far fa-star"></i></a>

                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header >
        <!-- Main Profile Information -->
        <div class="t-info w-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img-box">
                            <div class="p-img">
                                <img style="" id="profile-img-tag" class="img-fluid"
                                     src="{{URL::asset('/uploads/avatar/')}}/{{ $user->profile_pic}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 py-3">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <h6 class="font-weight-bold mb-1">Last Active</h6>
                                <h6 class="font-weight-bold text-secondary mb-0">10 Hours Ago</h6>
                            </div>
                            <div class="col-md-3 border-right">
                                <h6 class="font-weight-bold mb-1">Member Since</h6>
                                <h6 class="font-weight-bold text-secondary mb-0">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</h6>
                            </div>
                            <div class="col-md-3 border-right">
                                <h6 class="font-weight-bold mb-1">Location</h6>
                                <h6 class="font-weight-bold text-secondary mb-0">{{ $user->stateRelation['state'] }}
                                    , {{ $user->countryRelation['country'] }}</h6>
                            </div>
                            <div class="col-md-3">
                                <h6 class="font-weight-bold mb-1">Martial Status</h6>
                                <h6 class="font-weight-bold text-secondary mb-0">{{ $user->martialStat['martial_status'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Profile Information -->


    <!-- Main Area Starts Here -->
    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Information Shows here -->
                    <div class="bg-white p-3">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="text-secondary mb-0"> Int. Sent</h6>
                                    <h2 class="font-weight-bold text-red">36</h2>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-secondary mb-0"> Int. Recieved</h6>
                                    <h2 class="font-weight-bold text-red">7</h2>
                                </div>
                                <div class="col-sm-12">
                                    <h6 class="text-secondary mb-0"> Int. Recieved</h6>
                                    <h2 class="font-weight-bold text-red">7</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Information Shows here -->
                </div>
                <div class="col-md-9 text-dark py-3 bg-white border-bottom mb-5" id="profile-info">


                    <div class="public-photos mb-4">
                        <form enctype="multipart/form-data" action="{{url('/add_gallery_photo')}} " method="post" class="w-100 h-100">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-red font-weight-bold"><i class="fas fa-images mr-2"></i> Public Photos
                                    </h6>
                                </div>
                                <div class="col-md-6 text-right">

                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row">
                                @if($p)
                                    @if($p->photo_1)
                                        <div class="col-sm-2 pr-0 mb-3">
                                            <a data-fancybox="gallery" href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_1}}">
                                                <img class="img-fluid" src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_1}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if($p->photo_2)
                                        <div class="col-sm-2 pr-0 mb-3">
                                            <a data-fancybox="gallery" href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_2}}">
                                                <img class="img-fluid" src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_2}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if($p->photo_3)
                                        <div class="col-sm-2 pr-0 mb-3">
                                            <a data-fancybox="gallery" href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_3}}">
                                                <img class="img-fluid" src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_3}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if($p->photo_4)
                                        <div class="col-sm-2 pr-0 mb-3">
                                            <a data-fancybox="gallery" href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_4}}">
                                                <img class="img-fluid" src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_4}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if($p->photo_5)
                                        <div class="col-sm-2 pr-0 mb-3">
                                            <a data-fancybox="gallery" href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_5}}">
                                                <img class="img-fluid" src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_5}}" alt="">
                                            </a>
                                        </div>
                                    @endif


                                @else
                                    <div class="col-md-12 center-box-parent py-3 no-gallery">
                                        <div class="center-box-child">
                                            <h4 class="font-weight-light"><i class="far fa-frown text-red mr-3"></i>There is no profile picture!</h4>
                                        </div>
                                    </div>
                                @endif

                            </div>

                        </form>
                    </div>


                    <div class="about mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-red font-weight-bold"><i class="fas fa-user mr-2"></i> Basic Info </h6>
                            </div>
                            <div class="col-md-6 text-right">

                            </div>
                        </div>
                        <hr class="mt-0">


                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6> Full Name </h6>
                                    <p class="text-capitalize"> {{ $user->name }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Gender </h6>
                                    <p> {{ $user->genderRelation['gender']  }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Date of Birth </h6>
                                    <p> {{ \Carbon\Carbon::parse($user->dob)->toFormattedDateString()}} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Mother Language </h6>
                                    <p> {{ $user->MotherLanguageRelation['mother_language'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Religion, Cast & Sect </h6>
                                    <p> {{ $user->religionRelation['religion'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Cast & Sect </h6>
                                    <p> {{ $user->castRelation['cast'] }}, {{ $user->sectRelation['sect'] }} </p>
                                </div>
                                <div class="col-md-12">
                                    <h6> About  </h6>
                                    <p>
                                        {{ $user->about  }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="location mb-4" id="location">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-red font-weight-bold"><i class="fas fa-thumbtack mr-2"></i> Location </h6>
                            </div>
                            <div class="col-md-6 text-right">
                                <i class="fas fa-pencil-alt edit-icon"
                                   v-on:click="locationEditMode = !locationEditMode"></i>
                            </div>
                        </div>
                        <hr class="mt-0">


                        <!-- Location Data -->
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6> Country </h6>
                                    <p> {{ $user->countryRelation['country'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> State </h6>
                                    <p> {{ $user->stateRelation['state'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> City </h6>
                                    <p> {{ $user->cityRelation['city'] }} </p>
                                </div>
                            </div>
                        </div>
                        <!-- Location Data -->
                    </div>

                    <!--- Education & Career -->
                    <div class="location mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-red font-weight-bold"><i class="fas fa-book mr-2"></i>  Education & Career </h6>
                            </div>
                            <div class="col-md-6 text-right">
                                <i class="fas fa-pencil-alt edit-icon"></i>
                            </div>
                        </div>
                        <hr class="mt-0">

                        <!-- Location Data -->
                        <div v-else>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6> Highest Education </h6>
                                    <p> {{ $user->educationRelation['education'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Occupation </h6>
                                    <p> {{ $user->occupationRelation['occupation'] }} </p>
                                </div>
                                <div class="col-md-6">
                                    <h6> Income </h6>
                                    <p> {{ $user->incomeRelation['income'] }} </p>
                                </div>
                            </div>
                        </div>
                        <!-- Location Data -->
                    </div>
                    <!-- Education & Career -->

                </div>
            </div>
        </div>
    </main>
    <!-- Main Area Ends Here -->
@endsection

@section('script')
    <script src="js/script.js"></script>

@endsection