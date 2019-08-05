@extends('layouts.user')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/slim.min.css') }}">

@endsection

@section('content')



    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')

    <form enctype="multipart/form-data" action="{{ url('/profile_pic_update') }}" method="POST" id="top-form">
        @csrf


        <header class="home-header text-white"
                style="background: url(images/banners/bg-profile.jpg); background-size: cover;">
            <div class="container">
                <div class="row mt-auto">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="row basic-info">
                            <div class="col-md-6">
                                <h1 class="w-100 font-weight-light name-heading">
                                    {{ Auth::user()->name }}
                                </h1>
                                <p class="font-weight-bold profile-text">{{ \Carbon\Carbon::parse(Auth::user()->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}
                                    , {{ Auth::user()->genderRelation['gender'] }}
                                    , {{Auth::user()->sectRelation['sect'] }}</p>
                            </div>
                            <div class="col-md-6 text-right">

                                <button type="submit" href="" class="btn btn-red ml-2 mb-2">
                                    <i class="fas fa-pencil-alt mr-2"></i> Upload Profile Pic
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- Main Profile Information -->
        <div class="t-info w-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img-box">
                            <div class="p-img">

                                <div class="slim"
                                     data-label="Drop profile photo here"
                                     data-size="400, 400"
                                     data-ratio="1:1">

                                    @if(Auth::user()->profile_pic != 'default.png')
                                        <img src="{{Auth::user()->profile_pic}}" alt="">
                                    @endif

                                    <input type="file" name="avatar">

                                </div>
                                <!-- Image -->


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
                                <h6 class="font-weight-bold text-secondary mb-0">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans()}}</h6>
                            </div>
                            <div class="col-md-3 border-right">
                                <h6 class="font-weight-bold mb-1">Location</h6>
                                <h6 class="font-weight-bold text-secondary mb-0"> {{ Auth::user()->cityy['city_name'] }}
                                    , {{ Auth::user()->state['name'] }}
                                    , {{ Auth::user()->countryy['country_name'] }}</h6>
                            </div>
                            <div class="col-md-3">
                                <h6 class="font-weight-bold mb-1">Martial Status</h6>
                                <h6 class="font-weight-bold text-secondary mb-0">{{ Auth::user()->martialStat['martial_status'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Profile Information -->
    </form>

    <!-- Main Area Starts Here -->
    <main>

        <div class="container" id="profile-info">
            <div class="row">
                <div class="col-3">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                           href="#list-home" role="tab" aria-controls="home"> <i class="fas fa-user mr-2"></i> Basic
                            Info</a>
                        <a class="list-group-item list-group-item-action" id="list-location-list" data-toggle="list"
                           href="#list-location" role="tab" aria-controls="location"> <i
                                    class="fas fa-thumbtack mr-2"></i> Location
                            Info</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                           href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-images mr-2"></i>
                            Photo Gallery</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                           href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-book mr-2"></i>
                            Education & Career</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                           href="#list-family" role="tab" aria-controls="family"><i class="fas fa-users mr-2"></i>
                            Family</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                           href="#list-spouse" role="tab" aria-controls="spouse"><i class="fas fa-user mr-2"></i>
                            Expected Spouse</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                           href="#list-contacts" role="tab" aria-controls="settings"><i class="fas fa-phone mr-2"></i>
                            Contacts</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                           href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-cog mr-2"></i>Settings</a>
                    </div>
                </div>
                <div class="col-9 px-lg-0">
                    <div class="tab-content bg-white py-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">

                            <div class="container">

                                <div class="about mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-user mr-2"></i> Basic
                                                Info </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fas fa-pencil-alt edit-icon"
                                               v-on:click="aboutEditMode = !aboutEditMode"
                                               v-if="!aboutEditMode"></i>
                                            <i class="fas fa-times edit-icon" v-on:click="aboutEditMode =!aboutEditMode"
                                               v-if="aboutEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">

                                    <!-- Basic Info From -->
                                    <form action="{{ url('basic_info_update') }}" method="post" v-if="aboutEditMode">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">{{ __('Name') }}</label>

                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name" value="{{ Auth::user()->name }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="profile-for"
                                                >{{ __('Select Gender') }}</label>

                                                <select class="custom-select" name="gender" required>
                                                    <option value="">Select Gender</option>
                                                    @foreach($genders as $g)
                                                        <option value="{{ $g->id  }}"
                                                                @if(Auth::user()->gender_id == $g->id) selected @endif>{{ $g->gender  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dob"
                                                >{{ __('Date of Birth') }}</label>
                                                <input type="date" name="dob" class="form-control" required
                                                       value="{{ Auth::user()->dob }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="profile-for"
                                                >{{ __('Mother Language') }}</label>

                                                <select class="custom-select" name="mother_language" required>
                                                    <option value="">Select Language</option>
                                                    @foreach($motherLanguages as $ml)
                                                        <option value="{{ $ml->id  }}"
                                                                @if(Auth::user()->mother_language_id == $ml->id) selected @endif>{{ $ml->mother_language  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="about">About Yourself
                                                    <small>Tell us something about yourself.</small>
                                                </label>
                                                <textarea class="form-control" id="about" rows="3"
                                                          name="about"> {{Auth::user()->about}} </textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="aboutEditMode =!aboutEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- Basic Info Form -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Full Name </h6>
                                                <p class="text-capitalize"> {{ Auth::user()->name }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Gender </h6>
                                                <p> {{ Auth::user()->genderRelation['gender']  }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Date of Birth </h6>
                                                <p> {{ \Carbon\Carbon::parse(Auth::user()->dob)->toFormattedDateString()}} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Mother Language </h6>
                                                <p> {{ Auth::user()->MotherLanguageRelation['mother_language'] }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Religion, Cast & Sect </h6>
                                                <p> {{ Auth::user()->religionRelation['religion'] }} </p>
                                            </div>


                                            <div class="col-md-6">
                                                <h6> Cast & Sect </h6>
                                                <p> {{ Auth::user()->castRelation['cast'] }}
                                                    , {{ Auth::user()->sectRelation['sect'] }} </p>
                                            </div>

                                            <div class="col-md-12">
                                                <h6> About </h6>
                                                <p>
                                                    {{ Auth::user()->about  }}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="list-location" role="tabpanel"
                             aria-labelledby="list-location-list">

                            <div class="container">
                                <div class="location mb-4" id="location">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-thumbtack mr-2"></i>
                                                Location </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i v-if="!locationEditMode" class="fas fa-pencil-alt edit-icon"
                                               v-on:click="locationEditMode = !locationEditMode"></i>
                                            <i class="fas fa-times edit-icon"
                                               v-on:click="locationEditMode =!locationEditMode"
                                               v-if="locationEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">
                                    <form action="{{ url('update_location') }}" method="post" v-if="locationEditMode">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <label for="profile-for">{{ __('Country') }} <span
                                                            class="text-red">*</span></label>

                                                <select class="form-control" id="country" name="country" required>
                                                    <option value="">Select Country</option>
                                                    @foreach($country as $c)
                                                        <option value="{{ $c->id  }}">{{ $c->country_name  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="profile-for">{{ __('Select State') }} <span
                                                            class="text-red">*</span></label>
                                                <select class="form-control" id="state" name="state" required>
                                                    <option value="">Select State</option>
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="profile-for">{{ __('Select City') }} <span class="text-red">*</span></label>
                                                <select class="form-control" id="city" name="city" required>
                                                    <option value="">Select City</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="locationEditMode =!locationEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Location Data -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Country </h6>
                                                <p> {{ Auth::user()->countryy['country_name'] }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> State </h6>
                                                <p> {{ Auth::user()->state['name'] }}  </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> City </h6>
                                                <p> {{ Auth::user()->cityy['city_name'] }}  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location Data -->
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                             aria-labelledby="list-profile-list">
                            <div class="container">
                                <div class="public-photos mb-4">
                                    <form enctype="multipart/form-data" action="{{url('/add_gallery_photo')}} "
                                          method="post" class="w-100 h-100">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="text-red font-weight-bold"><i class="fas fa-images mr-2"></i>
                                                    Public Photos
                                                </h6>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <i class="fas fa-pencil-alt edit-icon"
                                                   v-on:click="photoEditMode =!photoEditMode"
                                                   v-if="!photoEditMode"></i>
                                                <i class="fas fa-times edit-icon"
                                                   v-on:click="photoEditMode =!photoEditMode"
                                                   v-if="photoEditMode"></i>

                                            </div>
                                        </div>
                                        <hr class="mt-0">
                                        <div class="row">
                                            @if($p)
                                                @if($p->photo_1)
                                                    <div class="col-sm-2 pr-0 mb-3">
                                                        <a data-fancybox="gallery"
                                                           href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_1}}">
                                                            <img class="img-fluid"
                                                                 src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_1}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                @endif
                                                @if($p->photo_2)
                                                    <div class="col-sm-2 pr-0 mb-3">
                                                        <a data-fancybox="gallery"
                                                           href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_2}}">
                                                            <img class="img-fluid"
                                                                 src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_2}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                @endif
                                                @if($p->photo_3)
                                                    <div class="col-sm-2 pr-0 mb-3">
                                                        <a data-fancybox="gallery"
                                                           href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_3}}">
                                                            <img class="img-fluid"
                                                                 src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_3}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                @endif
                                                @if($p->photo_4)
                                                    <div class="col-sm-2 pr-0 mb-3">
                                                        <a data-fancybox="gallery"
                                                           href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_4}}">
                                                            <img class="img-fluid"
                                                                 src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_4}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                @endif
                                                @if($p->photo_5)
                                                    <div class="col-sm-2 pr-0 mb-3">
                                                        <a data-fancybox="gallery"
                                                           href="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_5}}">
                                                            <img class="img-fluid"
                                                                 src="{{URL::asset('/uploads/gallery/')}}/{{ $p->photo_5}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                @endif


                                            @else
                                                <div class="col-md-12 center-box-parent py-3 no-gallery">
                                                    <div class="center-box-child">
                                                        <h4 class="font-weight-light"><i
                                                                    class="far fa-frown text-red mr-3"></i>There is no
                                                            profile picture!</h4>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-12" v-if="photoEditMode">

                                                <input type="file" name="gallery_photo" class="profile_input"
                                                       id="gallery_photo">
                                                <label for="gallery_photo" class="mb-3">
                                                    <div class="btn-add-gallery-photo">
                                                        <i class="fas fa-plus" style="font-size: 20px"></i>
                                                        <p>Add Photos</p>
                                                    </div>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-2 px-1">
                                                        <a class="btn btn-outline-dark w-100"
                                                           v-on:click="photoEditMode =!photoEditMode"> Cancel</a>
                                                    </div>
                                                    <div class="col-md-2 px-1">
                                                        <button type="submit" class="btn btn-red w-100"> Save Photos
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="container">
                                <!--- Education & Career -->
                                <div class="education mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-book mr-2"></i>
                                                Education & Career </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fas fa-pencil-alt edit-icon"
                                               v-on:click="educationEditMode = !educationEditMode"
                                               v-if="!educationEditMode"></i>
                                            <i class="fas fa-times edit-icon"
                                               v-on:click="educationEditMode =!educationEditMode"
                                               v-if="educationEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">
                                    <form v-if="educationEditMode" method="post" action="{{url('/update_education')}}">
                                        @csrf
                                        <div class="row">

                                            <div class="col-6 form-group">
                                                <label for="city"> Highest Education </label>
                                                <select class="custom-select" name="education" required>
                                                    <option value="">Select Education</option>
                                                    @foreach($education as $e)
                                                        <option value="{{ $e->id  }}">{{ $e->education  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="state">Occupation</label>
                                                <select class="custom-select" name="occupation" required>
                                                    <option value="">Select Occupation</option>
                                                    @foreach($occupations as $o)
                                                        <option value="{{ $o->id  }}">{{ $o->occupation  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="country">Income</label>
                                                <select class="custom-select" name="income" required>
                                                    <option value="">Select Income</option>
                                                    @foreach($incomes as $i)
                                                        <option value="{{ $i->id  }}">{{ $i->income  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="educationEditMode =!educationEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save Photos
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Location Data -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Highest Education </h6>
                                                <p> {{ Auth::user()->educationRelation['education'] }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Occupation </h6>
                                                <p> {{ Auth::user()->occupationRelation['occupation'] }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Income </h6>
                                                <p> {{ Auth::user()->incomeRelation['income'] }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location Data -->
                                </div>
                                <!-- Education & Career -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-family" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="container">
                                <!--- Education & Career -->
                                <div class="education mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-users mr-2"></i>
                                                Family </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fas fa-pencil-alt edit-icon"
                                               v-on:click="educationEditMode = !educationEditMode"
                                               v-if="!educationEditMode"></i>
                                            <i class="fas fa-times edit-icon"
                                               v-on:click="educationEditMode =!educationEditMode"
                                               v-if="educationEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">
                                    <form v-if="educationEditMode" method="post" action="{{url('/save_family_info')}}">
                                        @csrf
                                        <div class="row">

                                            <div class="col-6 form-group">
                                                <label for="no_of_siblings"> No. of Siblings </label>
                                                <select class="custom-select" name="no_of_siblings" required>
                                                    <option value="0">No Siblings</option>
                                                    @for($i = 1; $i < 10; $i++)
                                                        <option value="{{ $i  }}">  @if($i == 1) {{ $i . ' Sibling'  }} @else {{ $i . ' Siblings'  }} @endif</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="married_brothers"> No. of Married Brothers </label>
                                                <select class="custom-select" name="married_brothers" required>
                                                    <option value="0">No Married Brother</option>
                                                    @for($i = 1; $i < 10; $i++)
                                                        <option value="{{ $i  }}">  @if($i == 1) {{ $i . ' Brother'  }} @else {{ $i . ' Brothers'  }} @endif</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="unmarried_brothers">No. of Unmarried Brothers </label>
                                                <select class="custom-select" name="unmarried_brothers" required>
                                                    <option value="0">No Unmarried Brother</option>
                                                    @for($i = 1; $i < 10; $i++)
                                                        <option value="{{ $i  }}">  @if($i == 1) {{ $i . ' Unmarried Brother'  }} @else {{ $i . ' Unmarried Brothers'  }} @endif</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="married_sisters">No. of Married Sister </label>
                                                <select class="custom-select" name="married_sisters" required>
                                                    <option value="0">No Married Sister</option>
                                                    @for($i = 1; $i < 10; $i++)
                                                        <option value="{{ $i  }}">  @if($i == 1) {{ $i . ' Married Sister'  }} @else {{ $i . ' Married Sisters'  }} @endif</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="unmarried_sisters"> No. of Unmarried Sister </label>
                                                <select class="custom-select" name="unmarried_sisters" required>
                                                    <option value="0">No Unmarried Sister</option>
                                                    @for($i = 1; $i < 10; $i++)
                                                        <option value="{{ $i }}">  @if($i == 1) {{ $i . ' Unmarried Sister'  }} @else {{ $i . ' Unmarried Sisters'  }} @endif</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="father_alive">
                                                    <label class="form-check-label">Father Alive?</label>
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="mother_alive">
                                                    <label class="form-check-label">Mother Alive?</label>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="educationEditMode =!educationEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Location Data -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> No of Siblings </h6>
                                                {{ Auth::user()->family['no_of_siblings'] }}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Married Brothers </h6>
                                                {{ Auth::user()->family['married_brothers'] }}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Unmarried Brothers </h6>
                                                {{ Auth::user()->family['unmarried_brothers'] }}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Married Sisters </h6>
                                                {{ Auth::user()->family['married_sisters'] }}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Unmarried Sisters </h6>
                                                {{ Auth::user()->family['unmarried_sisters'] }}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Father Alive? </h6>
                                                @if(Auth::user()->family['father_alive'] == 'on')
                                                    Yes
                                                @else
                                                    No
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Mother Alive? </h6>
                                                @if(Auth::user()->family['mother_alive'] == 'on')
                                                    Yes
                                                @else
                                                    No
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location Data -->
                                </div>
                                <!-- Education & Career -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-spouse" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="container">
                                <!--- Education & Career -->
                                <div class="education mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-user mr-2"></i>
                                                Expected Spouse </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fas fa-pencil-alt edit-icon"
                                               v-on:click="educationEditMode = !educationEditMode"
                                               v-if="!educationEditMode"></i>
                                            <i class="fas fa-times edit-icon"
                                               v-on:click="educationEditMode =!educationEditMode"
                                               v-if="educationEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">
                                    <form v-if="educationEditMode" method="post" action="{{url('/save_expected_relation')}}">
                                        @csrf
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="dob"
                                                >{{ __('Date of Birth') }}</label>
                                                <input type="date" name="dob" class="form-control" required
                                                       value="{{ Auth::user()->dob }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="profile-for">{{ __('Height') }} <span
                                                            class="text-red">*</span></label>
                                                <select class="custom-select" name="height" required id="height">
                                                    <option value="">Select Height</option>
                                                    @foreach($heights as $h)
                                                        <option value="{{ $h->id  }}">{{ $h->height  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="profile-for">{{ __('Highest Degree') }} <span
                                                            class="text-red">*</span></label>
                                                <select class="custom-select" name="education" required id="education">
                                                    <option value="">Select Degree</option>
                                                    @foreach($education as $e)
                                                        <option value="{{ $e->id  }}">{{ $e->education  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Cast -->
                                            <div class="form-group col-md-3">
                                                <label for="profile-for">{{ __('Select Cast') }}</label>
                                                <select class="custom-select" name="cast" required id="cast">
                                                    <option value="">Select Cast</option>
                                                    @foreach($casts as $cast)
                                                        <option value="{{ $cast->id  }}">{{ $cast->cast  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Sect -->
                                            <div class="form-group col-md-3">
                                                <label for="profile-for">{{ __('Select Sect') }}</label>
                                                <select class="custom-select" name="sect" required id="sect">
                                                    <option value="">Select Sect</option>
                                                    @foreach($sects as $sect)
                                                        <option value="{{ $sect->id  }}">{{ $sect->sect  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="profile-for"
                                                >{{ __('Mother Language') }}</label>

                                                <select class="custom-select" name="mother_language" required>
                                                    <option value="">Select Language</option>
                                                    @foreach($motherLanguages as $ml)
                                                        <option value="{{ $ml->id  }}"
                                                                @if(Auth::user()->mother_language_id == $ml->id) selected @endif>{{ $ml->mother_language  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Occupation -->
                                            <div class="form-group col-md-3">
                                                <label for="profile-for">{{ __('Occupation') }} <span class="text-red">*</span></label>
                                                <select class="custom-select" name="occupation" required id="occupation">
                                                    <option value="">Select Occupation</option>
                                                    @foreach($occupations as $o)
                                                        <option value="{{ $o->id  }}">{{ $o->occupation  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="about">About your required spouse
                                                    <small>Tell us something about your spouse.</small>
                                                </label>
                                                <textarea class="form-control" id="about" rows="3"
                                                          name="about"> {{Auth::user()->about}} </textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="educationEditMode =!educationEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Location Data -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Age </h6>
                                                {{ \Carbon\Carbon::parse(Auth::user()->expectedRelation['dob'])->diff(\Carbon\Carbon::now())->format('%y years')}}
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Height </h6>
                                                @foreach($heights as $e)
                                                    @if($e->id == Auth::user()->expectedRelation['height_id']) {{ $e->height }} @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Education </h6>
                                                @foreach($education as $e)
                                                    @if($e->id ==Auth::user()->expectedRelation['education_id']) {{ $e->education }} @endif
                                                @endforeach
                                            </div>
                                            <hr>
                                            <div class="col-md-6">
                                                <h6> Cast </h6>
                                                @foreach($casts as $e)
                                                    @if($e->id == Auth::user()->expectedRelation['cast_id']) {{ $e->cast }} @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Sect </h6>
                                                @foreach($sects as $e)
                                                    @if($e->id == Auth::user()->expectedRelation['sect_id']) {{ $e->sect }} @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Mother Language </h6>
                                                @foreach($motherLanguages as $e)
                                                    @if($e->id == Auth::user()->expectedRelation['mother_language_id']) {{ $e->mother_language }} @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                <h6> Occupation </h6>
                                                @foreach($occupations as $e)
                                                    @if($e->id == Auth::user()->expectedRelation['occupation_id']) {{ $e->occupation }} @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-12">
                                                <h6> Spouse Details </h6>
                                                {{ Auth::user()->expectedRelation['comments'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location Data -->
                                </div>
                                <!-- Education & Career -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-contacts" role="tabpanel"
                             aria-labelledby="list-settings-list">
                            <div class="container">
                                <div class="contact">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="text-red font-weight-bold"><i class="fas fa-phone mr-2"></i>
                                                Contact
                                                Info </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <i class="fas fa-pencil-alt edit-icon"
                                               v-on:click="contactEditMode = !contactEditMode"
                                               v-if="!contactEditMode"></i>
                                            <i class="fas fa-times edit-icon"
                                               v-on:click="contactEditMode =!contactEditMode"
                                               v-if="contactEditMode"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-0">

                                    <form action="{{ URL::route('update.contact', Auth::user()->id) }}"
                                          v-if="contactEditMode" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        @csrf
                                        <div class="row">

                                            @if(Auth::user()->contact)
                                                <div class="col-6 form-group">
                                                    <label for="city"> <i class="fab fa-facebook-square"></i> Facebook
                                                        Profile
                                                        <small>(link)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="facebook"
                                                           placeholder="Enter Facebook profile link"
                                                           value="{{ Auth::user()->contact->facebook }}">

                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="whatsapp"><i class="fab fa-whatsapp"></i> Whatsapp #
                                                        <small>(link)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="whatsapp"
                                                           placeholder="Enter Whatsapp #"
                                                           value="{{ Auth::user()->contact->whatsapp_no }}">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="phone_one">Phone #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="phone_one"
                                                           placeholder="Enter phone #"
                                                           value="{{ Auth::user()->contact->phone_one }}">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="phone_two">Phone #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="phone_two"
                                                           placeholder="Enter Phone #"
                                                           value="{{ Auth::user()->contact->phone_two }}">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="mobile_one">Mobile #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="mobile_one"
                                                           placeholder="Enter Mobile #"
                                                           value="{{ Auth::user()->contact->mobile_one }}">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="mobile_two">Mobile #
                                                        <small>(Secondary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="mobile_two"
                                                           placeholder="Enter Mobile #"
                                                           value="{{ Auth::user()->contact->mobile_two }}">
                                                </div>
                                            @else
                                                <div class="col-6 form-group">
                                                    <label for="city"> <i class="fab fa-facebook-square"></i> Facebook
                                                        Profile
                                                        <small>(link)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="facebook"
                                                           placeholder="Enter Facebook profile link">

                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="whatsapp"><i class="fab fa-whatsapp"></i> Whatsapp #
                                                        <small>(link)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="whatsapp"
                                                           placeholder="Enter Whatsapp #">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="phone_one">Phone #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="phone_one"
                                                           placeholder="Enter phone #">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="phone_two">Phone #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="phone_two"
                                                           placeholder="Enter Phone #">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="mobile_one">Mobile #
                                                        <small>(Primary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="mobile_one"
                                                           placeholder="Enter Mobile #">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="mobile_two">Mobile #
                                                        <small>(Secondary)</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="mobile_two"
                                                           placeholder="Enter Mobile #">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2 px-1">
                                                <a class="btn btn-outline-dark w-100"
                                                   v-on:click="contactEditMode =!contactEditMode"> Cancel</a>
                                            </div>
                                            <div class="col-md-2 px-1">
                                                <button type="submit" class="btn btn-red w-100"> Save Photos
                                                </button>
                                            </div>
                                        </div>


                                    </form>
                                    <div v-else>
                                        @if( Auth::user()->contact)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-facebook-square"></i> Facebook Profile
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->facebook }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-whatsapp"></i> Whatsapp #
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->whatsapp_no }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->phone_one }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->phone_two }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->mobile_one }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ Auth::user()->contact->mobile_two }} </p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-facebook-square"></i> Facebook Profile
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-whatsapp"></i> Whatsapp #
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> Null </p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                             aria-labelledby="list-settings-list">

                            <div class="container">
                                <a href="" class="btn btn-outline-red w-100"> Change Password </a>
                                <a href="" class="btn btn-danger w-100 mt-4"> Delete Account </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Area Ends Here -->
@endsection


@section('script')


    <script type="text/javascript" src="{{ asset('js/slim.amd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slim.commonjs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slim.global.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slim.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slim.kickstart.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $(document).on('change', '#country', function () {
                console.log("hmm its change");

                var country_id = $(this).val();
                console.log(country_id);
                var div = $(this).parent();

                var op = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('/getstatelist')!!}',
                    data: {'id': country_id},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        //console.log(data.length);
                        //op+='<option value="0" selected disabled>chose product</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].name + ' ' + '</option>';
                            //alert(data[i].fname);
                        }

                        $('#state').html(" ");
                        $('#state').append(op);
                    },
                    error: function () {

                    }
                });
            });

            $(document).on('change', '#state', function () {
                var state_id = $(this).val();

                var a = $(this).parent();
                console.log(state_id);
                var op = "";
                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('/getcitylist')!!}',
                    data: {'id': state_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        //console.log("price");
                        //console.log(data.price);
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].city_name + ' ' + '</option>';
                            //alert(data[i].fname);
                        }

                        $('#city').html(" ");
                        $('#city').append(op);

                    },
                    error: function () {

                    }
                });
            });
        });
    </script>
@endsection


