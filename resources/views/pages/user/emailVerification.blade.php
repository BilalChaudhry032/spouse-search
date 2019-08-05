@extends('layouts.user')
@section('style')
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
@endsection
@section('content')

    <div class="container" style="height: 100vh;">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" style="margin-top: 25vh">
                <div class="card text-center">
                    <h4 class="card-header bg-dark text-white">
                        <i class="display-3 fas fa-envelope w-100 mb-2"> </i>
                        Email Confirmation
                    </h4>
                    <div class="card-body">
                        <p class="card-text">
                            A 6 digit code has been sent to your email <b> {{ Auth::user()->email }} </b>. Kindly go to
                            you email and confirm your email to use our services!
                        </p>
                        @if (session()->has('message'))

                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if($errors->any())
                            @foreach ($errors->all() as $error)

                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        &times;
                                    </button>
                                    {!!  $error !!}
                                </div>
                            @endforeach
                        @endif
                        <form action="{{ action('HomeController@verifyEmail') }}" method="post" data>
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control text-center"
                                       placeholder="6 Digit Verification Code" name="six_digit_code" autofocus required
                                       max="6" data-parsley-type="number" minlength="6"
                                       data-parsley-minlength="6" maxlength="6"
                                       data-parsley-maxlength="6">
                            </div>

                            <button class="btn btn-outline-red w-100 hide"> Confirm Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="vendor/parsley/parsley.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endsection