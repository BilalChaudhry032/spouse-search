@extends('layouts.user')

@section('content')



    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')


    <!-- Main Area Starts Here -->
    <main>
        <!-- Map Section Starts Here -->
        <section class="background-image-secondary text-center text-white">
            <div class="container">
                <h1> Pricing </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </section>

        <div class="container mt-5">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li><i class="fas fa-check mr-2 text-red"></i>View 10 Profile</li>
                            <li><i class="fas fa-check mr-2 text-red"></i>Send 5 Interests</li>
                            <li><i class="fas fa-times mr-2 text-dark "></i><del>Profile Boost </del></li>
                            <li><i class="fas fa-times mr-2 text-dark"></i><del>View Contacts of others</del> </li>
                            <li><i class="fas fa-times mr-2 text-dark "></i><del>Make your contacts visible</del></li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-red">Sign up for free</button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li><i class="fas fa-check mr-2 text-red"></i>View 30 Profile</li>
                            <li><i class="fas fa-check mr-2 text-red"></i>Send 10 Interests</li>
                            <li><i class="fas fa-check mr-2 text-red "></i>Profile Boost </li>
                            <li><i class="fas fa-check mr-2 text-red"></i>View Contacts of others </li>
                            <li><i class="fas fa-check mr-2 text-red "></i>Make your contacts visible</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-red">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4 text-left">
                            <li><i class="fas fa-check mr-2 text-red"></i>View <b>Unlimited</b> Profile</li>
                            <li><i class="fas fa-check mr-2 text-red"></i>Send 100 Interests</li>
                            <li><i class="fas fa-check mr-2 text-red "></i>Profile Boost </li>
                            <li><i class="fas fa-check mr-2 text-red"></i>View Contacts of others </li>
                            <li><i class="fas fa-check mr-2 text-red "></i>Make your contacts visible</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-red">Contact us</button>
                    </div>
                </div>
            </div>


        </div>
    </main>
    <!-- Main Area Ends Here -->
@endsection

