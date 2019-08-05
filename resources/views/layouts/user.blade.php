<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('css/spouse-search.css') }}">

    @yield('style')

    <!-- Linear Icons Font -->
    <link href="{{ asset('vendor/fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- Google Fonts -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Spouse Search</title>


    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" sizes="16x16" type="image/png">
</head>
<body>

<div class="se-pre-con"></div>

@yield('content')
@if(Request::url() != 'login')
    <footer class="py-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <ul class="list-unstyled footer-list">
                        <li> Explore </li>
                        <li><a href=""> Home</a> </li>
                        <li><a href="">Advance Search </a> </li>
                        <li><a href=""> Success Stories </a> </li>
                        <li><a href="">Metrimonial Blog </a> </li>
                        <li><a href=""> Site Map  </a> </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footer-list">
                        <li> Legal </li>
                        <li><a href="{{url('about')}}"> About Us</a> </li>
                        <li><a href="{{url('contact')}}">Fraud Alerts </a> </li>
                        <li><a href="{{url('terms')}}"> Terms of Use </a> </li>
                        <li><a href="">3rd party Terms of Use </a> </li>
                        <li><a href="{{url('privacy')}}"> Privacy Policy  </a> </li>
                        <li><a href=""> Privacy Features  </a> </li>
                        <li><a href=""> Summons/Notices  </a> </li>
                        <li><a href="">Grievances</a> </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footer-list">
                        <li> Help </li>
                        <li><a href="{{url('contact')}}"> Contact Us</a> </li>
                        <li><a href="{{url('query')}}">Feedback / Queries </a> </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footer-list">
                        <li> Follow Us </li>
                        <li><a href=""> Facebook</a> </li>
                        <li><a href="">Twitter </a> </li>
                        <li><a href=""> Google+ </a> </li>
                        <li><a href=""> LinkedIn </a> </li>
                        <li><a href=""> Youtube </a> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Customer Service</h6>
                    <ul class="list-unstyled">
                        <li><img class="mr-2" src="{{asset('/images/icons/006-pakistan.png')}}" alt="">   0092 42 35953263 <small>(Head Office)</small></li>
                        <li><img class="mr-2" src="{{asset('/images/icons/003-united-states.png')}}" alt="">   001 412 999 3060</li>
                        <li><img class="mr-2" src="{{asset('/images/icons/002-united-kingdom.png')}}" alt="">   0044 208 491 0567</li>
                        <li><img class="mr-2" src="{{asset('/images/icons/001-australia.png')}}" alt="">   0061 410 351 041</li>
                        <li><img class="mr-2" src="{{asset('/images/icons/004-canada.png')}}" alt="">   001 416 731 9001</li>
                        <li><img class="mr-2" src="{{asset('/images/icons/005-saudi-arabia.png')}}" alt="">   0096 650 570 7345</li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endif

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('vendor/jquery.min.js') }}"></script>

@yield('script')
<script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    $(window).on('load', function(){
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });

</script>

<link rel="stylesheet" href="{{ asset('vendor/fancybox/jquery.fancybox.min.css') }}" />
<script src="{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}"></script>



<!-- Vue Js -->
<script src="{{ asset('js/vue.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>



<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
{{--

<script>
    $document.getElementById("p-name").click(function() {
        $document.getElementById('p-name').removeAttr("disabled");
    });
</script>
--}}

<!-- Scripts -->

@if (!Request::is('register') && !Request::is('invite'))
    <script src="{{ asset('js/app.js') }}"></script>
@endif


<script>
    $(document).ready( function() {

        $('.dropdown-toggle').dropdown();
        $('#confirmEmail').modal('show');
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b6ebf7ef31d0f771d83b2af/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
