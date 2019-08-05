@extends('layouts.user')
@section('content')


    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')




    <header class="home-header text-white"
            style="background: url(../images/banners/bg-profile.jpg); background-size: cover;">
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
                            @if($user->profile_pic == "default.png")
                                <img id="profile-img-tag" src="{{URL::asset('../storage/uploads/avatar/')}}/{{ $user->profile_pic}}"
                                     class="img-fluid">
                            @else
                                <img src="{{ $user->profile_pic}}"
                                     class="img-fluid">
                            @endif
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
                            <h6 class="font-weight-bold text-secondary mb-0"> {{ $user->cityy['city_name'] }}
                                , {{ $user->state['name'] }}
                                , {{ $user->countryy['country_name'] }}</h6>
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
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                           href="#list-contacts" role="tab" aria-controls="settings"><i class="fas fa-phone mr-2"></i>
                            Contacts</a>

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

                                    </div>
                                    <hr class="mt-0">

                                    <!-- Basic Info From -->

                                    <!-- Basic Info Form -->
                                    <div v-else>
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
                                                <p> {{ $user->castRelation['cast'] }}
                                                    , {{ $user->sectRelation['sect'] }} </p>
                                            </div>
                                            <div class="col-md-12">
                                                <h6> About </h6>
                                                <p>
                                                    {{ $user->about  }}
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
                                    </div>
                                    <hr class="mt-0">


                                    <!-- Location Data -->
                                    <div v-else>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Country </h6>
                                                <p> {{ $user->countryy['country_name'] }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> State </h6>
                                                <p> {{ $user->state['name'] }}  </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6> City </h6>
                                                <p> {{ $user->cityy['city_name'] }}  </p>
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
                                    </div>
                                    <hr class="mt-0">


                                    <div v-else>
                                        @if( $user->contact)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-facebook-square"></i> Facebook Profile
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->facebook }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><i class="fab fa-whatsapp"></i> Whatsapp #
                                                        <small>(link)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->whatsapp_no }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->phone_one }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Phone #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->phone_two }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Primary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->mobile_one }} </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6> Mobile #
                                                        <small>(Secondary)</small>
                                                    </h6>
                                                    <p class="text-capitalize"> {{ $user->contact->mobile_two }} </p>
                                                </div>
                                            </div>
                                        @else
                                            @if($showContacts)
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6><i class="fab fa-facebook-square"></i> Facebook Profile <small>(link)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6> <i class="fab fa-whatsapp"></i> Whatsapp # <small>(link)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6> Phone # <small>(Primary)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6> Phone # <small>(Secondary)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6> Mobile # <small>(Primary)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6> Mobile # <small>(Secondary)</small> </h6>
                                                        <p class="text-capitalize"> Null </p>
                                                    </div>
                                                </div>
                                            @else
                                               <div class="container text-center">
                                                   <h3 class=" text-light my-5 font-weight-light text-dark"> Your interest is not accepted yet or you didn't have send any interest! </h3>
                                               </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
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


