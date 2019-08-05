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
                <h3 class="font-weight-light mb-3">Help - Membership</h3>
                <div class="row ">
                    <div class="col-md-8">

                        <div id="accordion">
                            <!-- Question 1 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 1:</b> <span class="font-weight-light">What are the benefits of upgrading to Paid membership?</span>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                         <span class="font-weight-light">
                                             <p>By upgrading the profile to Paid membership, you can:-</p>
                                             <ol>
                                                 <li>Get Unlimited Phone/Email views of accepted members</li>
                                                 <li>Make your contacts visible to others</li>
                                                 <li>Get Direct contacts or Instant view of phone/email address</li>
                                             </ol>
                                         </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 2:</b> <span class="font-weight-light"> How can I upgrade to Paid membership?</span>
                                    </h6>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            	Kindly view the UPGRADE section on the profile to view the membership plans and benefits. You may further choose from the multiple methods for payment, with Safe & secure payment gateway for online transactions.

For further assistance, please contact the Helpline number 0092 42 35953263.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 3:</b> <span class="font-weight-light">	Are there any value added services?</span>
                                    </h6>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            Yes, you can choose from a list of Add-on services that add value to the profile and hence better your visibility and responses on the site. Please click on the <a
                                                    href="{{ url('upgrade') }}" class="text-red"><b>UPGRADE</b></a> section to get more information.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{--<!-- Question 4 -->--}}
                            {{--<div class="card mb-2">--}}
                                {{--<div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">--}}
                                    {{--<h6 class="mb-0">--}}
                                        {{--<b class="font-weight-normal pr-3">Question 4:</b> <span class="font-weight-light">	How can I pay for membership with cash? </span>--}}
                                    {{--</h6>--}}
                                {{--</div>--}}

                                {{--<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<span class="font-weight-light">--}}
                                            {{--<p>Kindly visit nearest ICICI bank branch in your city and deposit cash in our ICICI bank account. Account details are:</p>--}}
                                            {{--<p>Account no: “003705010255”</p>--}}
                                            {{--<p>Account name: “Jeevansathi Internet Services”</p>--}}
                                            {{--<p>Branch name: Preet Vihar, New Delhi</p>--}}
                                            {{--<p>Inform us the same via e-mail/ phone mentioning the amount of deposit, branch name, membership subscribed for and the date of deposit. </p>--}}
                                            {{--<p>This will take 24 to 48 working hours to activate the services.</p>--}}
                                            {{--</p>--}}

                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}




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

