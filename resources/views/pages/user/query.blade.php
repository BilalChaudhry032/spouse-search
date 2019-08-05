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

                    <form>
                        <div class="form-group ">
                            <label for="name"> Your Name </label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group ">
                            <label for="staticEmail">Email</label>
                            <input type="email" class="form-control" id="staticEmail" placeholder="Enter your email">
                        </div>
                        <div class="form-group ">
                            <label for="staticEmail">Category</label>
                            <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="name"> Your Name </label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1">Reason</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your query here..."></textarea>
                        </div>
                        <a href="" class="btn btn-red w-100"> Post</a>
                    </form>
                </div>

                <div class="col-md-4">
                    <dl>
                        <dt>Address</dt>
                        <dd>Emporium Mall, Johar Town</dd>
                        <dt>Email</dt>
                        <dd>contact@spouse-search.com</dd>
                        <dt>Phone</dt>
                        <dd>+92 310 004 0369</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main Area Ends Here -->
@endsection

