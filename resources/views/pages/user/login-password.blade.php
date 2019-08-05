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
                <h3 class="font-weight-light mb-3">Help - Login /  Password</h3>
                <div class="row ">
                    <div class="col-md-8">

                        <div id="accordion">
                            <!-- Question 1 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 1:</b> <span class="font-weight-light">	I forgot my Password, how can I reset?</span>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                         <span class="font-weight-light">
                                            Resetting the Password is an easy process. Please click on the ‘Forgot Password’ link on the login page and enter your registered email ID/registered mobile number of Spouse-Search to receive an Email and SMS with the link to reset your password. In case there are multiple profiles with the same mobile number then the system would give the error prompt "There are multiple profiles against this phone number, please enter Email Address of account or contact customer care." In such case you need to enter the email ID only or you can call the customer care at 0092 42 35953263 from your registered mobile number.
                                         </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 2:</b> <span class="font-weight-light"> 	How can I login and logout from spouse-search.com?</span>
                                    </h6>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            	Please open www.spouse-search.com and click on LOGIN. Please enter the Email ID as the username and the password. In order to Log out or Sign out, please hover the mouse on the photo thumbnail icon at the top right of the homepage, you will find an option to ‘Sign out’ there.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 3:</b> <span class="font-weight-light">	How can I change the Password?</span>
                                    </h6>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            <p>We suggest you to kindly reset your password by your registered email id. Kindly follow the procedure as mentioned below to create a new password:</p>
                                            <ul>
                                                <li>Open the login page.</li>
                                                <li>Click on the option “forgot password” on the login page.</li>
                                                <li>Enter your registered mobile no.</li>
                                                <li>Click on Send Link</li>
                                            </ul>
                                            <p>A link will be sent to your registered email id and mobile no. You can open the link and create a new password.</p>
                                            <p>In case you forgot your registered Email address - We suggest you to kindly reset your password by your registered phone number. Kindly follow the procedure as mentioned below to create a new password:</p>
                                            <ul>
                                                <li>Open the login page.</li>
                                                <li>Click on the option “forgot password” on the login page.</li>
                                                <li>Enter your registered mobile no.</li>
                                                <li>Click on Send Link</li>
                                            </ul>
                                            <p>A link will be sent to your registered mobile no. You can open the message where your registered email id is mentioned. You can open the link and create a new password.</p>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 4:</b> <span class="font-weight-light">	Password Security Tips? </span>
                                    </h6>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">

                                            <ol>
                                                <li>Create a strong alpha-numeric password and change it frequently as a practice.</li>
                                                <li>Never share your Spouse-Search account information (user id, password) with anyone.</li>
                                                <li>Password is case sensitive, hence recheck and enter it correctly in order to avoid inconvenience.</li>

                                                <li>In case of any further issues, notify Spouse-Search customer support team immediately on 0092 42 35953263.</li>
                                            </ol>
                                        </span>
                                    </div>
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

