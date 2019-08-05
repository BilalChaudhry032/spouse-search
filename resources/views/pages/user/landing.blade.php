@extends('layouts.user')

@section('content')


    <!-- Header -->
    <header class="hero-section">
        @include('layouts.user.navigation')
        <!-- Here Section Starts Here -->
        <div class="hero-text mt-5 w-100">
            <h1 class="font-weight-light text-center text-white mb-5">Love is looking for you. Be Found.</h1>

            <div class="main-search text-white">
                <div class="container">
                    <div class="search-input main-search-container">
                    <span class="search-input-container">
                        <span class="search-input-text"> Search for Bride or Groom</span>
                        <a class="search-button"> Let's Begin </a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section Ends Here -->
    </header>
    <!-- Header Ends Here -->


    <!-- Main Area Starts Here -->
    <main>
        <!-- Success Stories Starts Here -->
        <section class="successful-stories">
            <div class="section-header container">
                <h3 class="section-title">  Successful Stories </h3>
                <p class="title-description"> Lorem ipsum dolor sit amet, sed et zril noster deserunt. Ludus tibique definitiones eu mei. Sonet theophrastus nam ei. Et dictas lobortis sed, no sed quando vulputate, an cum novum nemore reprehendunt. Quo commodo postulant dissentiunt no, mucius oportere sed te, nam stet graecis elaboraret ad.</p>
            </div>
            <div class="section-body container">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top profile-card-img" src="images/js1.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top profile-card-img" src="images/js2.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top profile-card-img" src="images/js3.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top profile-card-img" src="images/js4.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Success Stories Ends Here -->

        <!-- About Us Section Starts Here -->
        <section class="about-us">
            <div class="section-header container">
                <h3 class="section-title">  Featured Profiles </h3>
                <p class="title-description"> Lorem ipsum dolor sit amet, sed et zril noster deserunt. Ludus tibique definitiones eu mei. Sonet theophrastus nam ei. Et dictas lobortis sed, no sed quando vulputate, an cum novum nemore reprehendunt. Quo commodo postulant dissentiunt no, mucius oportere sed te, nam stet graecis elaboraret ad.</p>
            </div>
            <div class="section-body container">
                <div class="row mb-3">
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g1.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g2.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g3.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g4.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g5.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g6.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g7.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card profile-card">
                            <img class="card-img-top" src="images/g8.jpg">
                            <div class="profile-img-overlay">
                                <h3 class="card-title"> Shipra weds Rajesh </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section Ends Here -->
    </main>
    <!-- Main Area Ends Here -->

    <!-- Modal Starts Here -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endsection