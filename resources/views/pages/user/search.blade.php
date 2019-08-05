@extends('layouts.user')
@section('content')


    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')
    @include('partials.user.contacts')
    <header class="home-header">
        <div class="container py-5 mb-5" id="profile-info">
            <div class="search-container" v-on:click="searchEditMode = !searchEditMode" v-if="!searchEditMode">
                <div class="search-text">
                    Search for Bride or Groom
                </div>
                <div class="search-icon">
                    <i class="fas fa-search mr-3"></i> Search
                </div>
            </div>
            <div class="new-search-form bg-white" v-if="searchEditMode">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <form action="{{ url('basic_search') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12 mb-1">
                                        <label>Searching for</label>
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
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-secondary w-100"> Search</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-outline-red w-100" v-on:click="searchEditMode = !searchEditMode" v-if="searchEditMode"> Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Area Starts Here -->
    <main>
        <!-- Profile Results Section Starts Here -->
        <section class="profile-results mt-5">

            @if($users)
                <div class="container profile-results-container">
                    <h4 class="font-weight-light matches-heading">{{ count($users) }} Matches Found</h4>
                    <div class="row">
                        <div class="col-md-3 profile-results-left profile-filter">
                            <form action="{{ url('basic_search') }}" method="post">
                                @csrf
                                <div class="profile-filter-container">
                                <div class="profile-filter-tab">
                                    <div class="profile-filter-tab-header" data-toggle="collapse" data-target="#height"
                                         title="Collapse">
                                        <i class="fa fa-chevron-down"></i> Age Filter
                                    </div>
                                    <div class="profile-filter-tab-body collapse show" id="height">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-5 pr-0">
                                                    <select class="custom-select" name="age_from">
                                                        @for ($i = 1; $i < 54; $i++)
                                                            <option value="{{$i+17}}"> {{ $i+17 }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-sm-2 px-0 pt-2">
                                                    TO
                                                </div>
                                                <div class="col-sm-5 pl-0">
                                                    <select class="custom-select" name="age_to">
                                                        @for ($i = 1; $i < 54; $i++)
                                                            <option value="{{$i+17}}" @if($i+17 == 26) selected @endif> {{ $i+17 }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               {{-- <div class="profile-filter-tab">
                                    <div class="profile-filter-tab-header" data-toggle="collapse" data-target="#size">
                                        <i class="fa fa-chevron-down"></i> Height Filter
                                    </div>
                                    <div class="profile-filter-tab-body collapse show" id="size">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-5 pr-0">
                                                    <select class="custom-select">
                                                        <option selected>4'0''</option>
                                                        <option value="1">4'1''</option>
                                                        <option value="2">4'2''</option>
                                                        <option value="3">4'3''</option>
                                                        <option value="3">4'4''</option>
                                                        <option value="3">4'5''</option>
                                                        <option value="3">4'6''</option>
                                                        <option value="3">4'7''</option>
                                                        <option value="3">4'8''</option>
                                                        <option value="3">4'9''</option>
                                                        <option value="3">5'0''</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-2 px-0 pt-2">
                                                    TO
                                                </div>
                                                <div class="col-sm-5 pl-0">
                                                    <select class="custom-select">
                                                        <option selected>4'0''</option>
                                                        <option value="1">4'1''</option>
                                                        <option value="2">4'2''</option>
                                                        <option value="3">4'3''</option>
                                                        <option value="3">4'4''</option>
                                                        <option value="3">4'5''</option>
                                                        <option value="3">4'6''</option>
                                                        <option value="3">4'7''</option>
                                                        <option value="3">4'8''</option>
                                                        <option value="3">4'9''</option>
                                                        <option value="3">5'0''</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}

                                <!-- Country Tab -->
                                <div class="profile-filter-tab">
                                    <div class="profile-filter-tab-header" data-toggle="collapse" data-target="#country">
                                        <i class="fa fa-chevron-down"></i> Religion Filter
                                    </div>
                                    <div class="profile-filter-tab-body collapse show" id="country">
                                        <div class="form-group">

                                            <select class="custom-select" name="religion">
                                                @foreach($religions as $r)
                                                    <option value="{{ $r->id  }}">{{ $r->religion  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- State Tab -->
                                <div class="profile-filter-tab">
                                    <div class="profile-filter-tab-header" data-toggle="collapse" data-target="#state">
                                        <i class="fa fa-chevron-down"></i> Mother Tongue
                                    </div>
                                    <div class="profile-filter-tab-body collapse show" id="state">
                                        <div class="form-group">
                                            <select name="language" class="custom-select">
                                                <option value="0">Select Language</option>
                                                @foreach($languages as $ml)
                                                    <option value="{{ $ml->id  }}">{{ $ml->mother_language  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- State Tab -->
                               {{-- <div class="profile-filter-tab">
                                    <div class="profile-filter-tab-header" data-toggle="collapse" data-target="#education">
                                        <i class="fa fa-chevron-down"></i> Education Filter
                                    </div>
                                    <div class="profile-filter-tab-body collapse show" id="education">
                                        <div class="form-group">
                                            <select class="custom-select">
                                                <option selected>Matric</option>
                                                <option value="1">Inter</option>
                                                <option value="2">Bachelors</option>
                                                <option value="3">Masters</option>
                                                <option value="3">Ph. D</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>--}}
                                <button class="btn btn-light w-100 mt-3" type="submit"> Apply Filters </button>
                            </div>
                            </form>
                        </div>


                        <div class="col-md-9 profile-results-right pl-0">


                            <div class="row">
                                @if($users)
                                    @foreach($users as  $user)

                                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3 pr-0">

                                            <div class="card text-center pro-card @if($user->featured)  featured-profile  @endif">
                                                @php
                                                    $status = false;
                                                @endphp
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
                                                @if($status)
                                                    <a class="shortlist-icon-active" href="{{ url('shortlist',$user->id) }}"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Shortlist {{ $user->name }}"><i class="fa fa-star"></i></a>
                                                @else
                                                    <a class="shortlist-icon" href="{{ url('shortlist',$user->id) }}"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Shortlist {{ $user->name }}"><i class="far fa-star"></i></a>

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
                                                       class="btn btn-sm btn-red">View Profile</a>

                                                    <a href="@if(!Auth::user()->contact)@else  {{ url('interest',$user->id) }} @endif"
                                                       class="btn btn-outline-dark btn-sm"
                                                       @if(!Auth::user()->contact) data-toggle="modal"
                                                       data-target="#contactDetails" @else  @endif > Send
                                                        Interest </a>
                                                </div>
                                            </div>
                                        </div>



                                    @endforeach
                                @endif

                            </div>

                        </div>

                    </div>
                </div>
            @endif
        </section>
        <!-- Profile Results Section Ends Here -->
    </main>
    <!-- Main Area Ends Here -->
@endsection



