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
                <h3 class="font-weight-light mb-3">Getting Started</h3>
                <div class="row ">
                    <div class="col-md-8">

                        <div id="accordion">
                            <!-- Question 1 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6 class="mb-0">
                                            <b class="font-weight-normal pr-3">Question 1:</b> <span class="font-weight-light">How can I register on spouse-search.com?</span>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                         <span class="font-weight-light">Registration is simple & free of cost! Just log on to <a
                                                    href="{{ url('/register') }}" class="text-red font-weight-normal">www.spouse-search.com</a> and REGISTER FREE by filling the details in the registration form.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 2:</b> <span class="font-weight-light">	Can someone register on behalf of his/her relative or friend?</span>
                                    </h6>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body ">
                                         <span class="font-weight-light">Yes. One can register a profile for ‘Self’ as well as on behalf of Son, Daughter, Sibling or a Relative/Friend.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 3:</b> <span class="font-weight-light">	Is Email Address required to create a profile?</span>
                                    </h6>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">Yes, you need to enter a valid email address to create a profile. Email address is unique to every Profile and hence cannot be used to create or update another profile.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 4:</b> <span class="font-weight-light">	Can I use same phone number for more than one profile?</span>
                                    </h6>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            <p>
                                                Yes. You can choose to keep the same Phone number if you have registered profiles for more than one member in the family. However, the number of active profiles you can keep with the same phone number is restricted to two.
                                            </p>

                                            <p>
                                                Also, we may mark one of the profiles as duplicate if the number is same. If we do so, we keep notifying you about it on home page and also send an Email informing you about it. In such a case, you may need to contact support and provide justification that the two profiles are different to be able to keep both the profiles live. Please note that if a profile is marked duplicate, it will no longer appear in search results until it is marked non-duplicate after your follow up with the support team.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 5:</b> <span class="font-weight-light">How soon will my profile be visible in the search list?</span>
                                    </h6>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">All profiles registered on the site undergo a basic screening of content and photographs, post which it is made visible and searchable on the site. This process may take up to 24 hours.</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 6 -->
                            <div class="card mb-2">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 6:</b> <span class="font-weight-light">	How can I upload photos on my profile??</span>
                                    </h6>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">
                                            <b>UPLOAD Photos (DESKTOP)</b>

                                                <p>
                                                    Uploading the photo is recommended but it's not mandatory. We suggest you to upload the photo by below steps:
                                                </p>


                                                <ol>
                                                   <li>Login to your profile</li>
                                                    <li>Click on Photos available on main page</li>
                                                    <li>Click on photo and select a photo from gallery, camera.</li>
                                                    <li>Select and upload. The photo will get uploaded and will be made visible to other member within 24 hrs.</li>
                                                </ol>



                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 7 -->
                            <div class="card">
                                <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <h6 class="mb-0">
                                        <b class="font-weight-normal pr-3">Question 7:</b> <span class="font-weight-light">	How can I change my Email address/ Phone number on the profile?</span>
                                    </h6>
                                </div>

                                <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body ">
                                        <span class="font-weight-light">

                                            <p>To update your mobile number, kindly follow below steps:</p>

                                            <ol>
                                                <li>Login to your profile</li>
                                                <li>Click on “Contact” from highlight bar</li>
                                                <li>Click on Contact number. Make changes and save</li>
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
                            <dd>contact@spouse-search.com</dd>
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

