<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/findash/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 15:54:29 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env("APP_NAME") }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset("css/typography.css")}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div id="container-inside">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center bg-primary rounded">
                <div class="row m-0">
                    <div class="col-md-5 bg-white sign-in-page-data">
                        <div class="sign-in-from">
                            <h1 class="mb-0 text-center">Sign in</h1>
                            <p class="text-center text-dark">Enter your email address and password to access admin panel.</p>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign in</button>
                                    <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="{{ route("register") }}">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7 text-center sign-in-page-image">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{asset("images/logo-full.png")}}" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{asset("images/login/1.png")}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset("images/login/1.png")}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset("images/login/1.png")}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
<!-- color-customizer -->

<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset("js/jquery.appear.js")}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset("js/countdown.min.js")}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset("js/waypoints.min.js")}}"></script>
<script src="{{asset("js/jquery.counterup.min.js")}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset("js/wow.min.js")}}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{asset("js/apexcharts.js")}}"></script>
<!-- lottie JavaScript -->
<script src="{{asset("js/lottie.js")}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset("js/slick.min.js")}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset("js/select2.min.js")}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset("js/smooth-scrollbar.js")}}"></script>
<!-- Style Customizer -->
<script src="{{asset("js/style-customizer.js")}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset("js/chart-custom.js")}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset("js/custom.js")}}"></script>
</body>

<!-- Mirrored from templates.iqonic.design/findash/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 15:54:30 GMT -->
</html>
