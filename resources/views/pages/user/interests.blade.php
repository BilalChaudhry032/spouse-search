@extends('layouts.user')

@section('content')



    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')


    <!-- Main Area Starts Here -->
    <main>
        <!-- Map Section Starts Here -->
        <section class="background-image-secondary text-center text-white">
            <div class="container">
                <h1> Interests </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </section>


        <div class="container mt-5">
            <h3 class="font-weight-light"> Sent Interests ( {{ $sentInterests->count() }} )</h3>
            <hr>

            @foreach($sentInterests as $int)
                <a class="shortlisted-profile-card d-block" href="{{ url('user',$int->interested_id) }}" target="_blank">
                    <div class="row">
                        <div class="col-md-6 col-6">
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
                        <div class="col-md-6 col-6 py-2 text-right">



                            @if($int->status)
                                <button class="btn btn-red"> Accepted</button>
                            @elseif($int->status == null)
                                <button class="btn btn-dark mr-1" disabled> Not Accepted </button>


                            @elseif($int->status == 0)
                                <button class="btn btn-dark mr-1" disabled> Rejected </button>

                            @endif



                        </div>
                    </div>
                </a>
            @endforeach

            <h3 class="font-weight-light mt-5"> Received Interests ( {{ $receivedInterests->count() }} ) </h3>
            <hr>

            @foreach($receivedInterests as $int)
                <a class="shortlisted-profile-card d-block" href="{{ url('user',$int->user_id) }}" target="_blank">
                    <div class="row">
                        <div class="col-md-6 col-6">
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
                                <p class="pt-1 text-capitalize mb-1"> {{ $int->user->name}} </p>
                                @if($int->status)
                                    <p> Accepted </p>
                                @elseif(!$int->status)
                                    <p class="text-dark mb-1"> Waiting to be accepted </p>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-6 col-6 py-2 text-right">



                            @if($int->status)
                                <button class="btn btn-dark" disabled> Accepted</button>
                                <button class="btn btn-red ml-1"> View Profile</button>
                            @elseif(!$int->status)
                                <form action="{{ url('reject-interest',$int->user_id) }}" method="post" class="d-inline">
                                    @csrf
                                    <button class="btn btn-dark mr-1"> Reject</button>
                                </form>


                                <form action="{{ url('accept-interest',$int->user_id) }}" method="post" class="d-inline">
                                    @csrf
                                    <button class="btn btn-red"> Accept</button>
                                </form>
                            @endif


                        </div>
                    </div>
                </a>
            @endforeach



        </div>

    </main>
    <!-- Main Area Ends Here -->
@endsection

