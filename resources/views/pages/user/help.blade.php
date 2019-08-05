@extends('layouts.user')

@section('content')



    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')


    <!-- Main Area Starts Here -->
    <main>
        <!-- Map Section Starts Here -->
        <section class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.0671045815234!2d74.26344151475828!3d31.467340181387254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391903d4d940f12b%3A0xdb8c83f6699d5226!2sEmporium+Mall+by+Nishat+Group!5e0!3m2!1sen!2s!4v1525081148470"
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>

        <section class="contact">
            <div class="container py-5">
                <h3 class="font-weight-light mb-3">Contact Us</h3>
                <div class="row ">
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Getting Started </h3>
                                    <a href="{{ url('help/getting-started') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Membership </h3>
                                    <a href="{{ url('help/membership') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Search Profile </h3>
                                    <a href="{{ url('help/search-profile') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Login / Password </h3>
                                    <a href="{{ url('help/login-password') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Common Issues </h3>
                                    <a href="{{ url('help/common-issues') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="help-card py-4 card text-center mb-3">
                                    <h3 class="display-5 font-weight-light"> Changing Basic Details </h3>
                                    <a href="{{ url('help/changing-basic-details') }}" class="text-red"> View All Questions </a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">
                        <dl>
                            <dt>Address</dt>
                            <dd>Office 138, Q-Block, Johar Town Lahore Pakistan</dd>
                            <hr>
                            <dt>Email</dt>
<<<<<<< HEAD
<<<<<<< HEAD
                            <dd>support@spouse-search.com</dd>
                            <dt>Phone</dt>
                            <dd>0092 42 35953263</dd>
=======
                            <dd>contact@spouse-search.com</dd>
>>>>>>> spouse/master
=======
                            <dd>contact@spouse-search.com</dd>
>>>>>>> spouse/master
                        </dl>
                        <hr>
                        <h6>Customer Service</h6>
                        <ul class="list-unstyled">
                            <li><img class="mr-2" src="{{asset('/images/icons/006-pakistan.png')}}" alt="">   0092 42 35953263 <small>(Head Office)</small></li>
                            <li><img class="mr-2" src="{{asset('/images/icons/003-united-states.png')}}" alt="">   001 412 999 3060</li>
                            <li><img class="mr-2" src="{{asset('/images/icons/002-united-kingdom.png')}}" alt="">   0044 208 491 0567</li>
                            <li><img class="mr-2" src="{{asset('/images/icons/001-australia.png')}}" alt="">   0061 410 351 041</li>
                            <li><img class="mr-2" src="{{asset('/images/icons/004-canada.png')}}" alt="">   001 416 731 9001</li>
                            <li><img class="mr-2" src="{{asset('/images/icons/005-saudi-arabia.png')}}" alt="">   0096 650 144 7971</li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main Area Ends Here -->
@endsection

