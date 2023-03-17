<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:22:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') || JobHere</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEndAssets')}}/images/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- All css files are included here
    ============================================ -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/bootstrap.min.css">

    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <!-- Nice select css
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/nice-select.css">
    <!-- This core.css file contents all plugins css file
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/core.css">

    <!-- Theme shortcodes/elements style
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/shortcode/shortcodes.css">

    <!--  Theme main style
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/style.css">

    <!-- Color CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/plugins/color.css">

    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/responsive.css">

    <!-- Modernizr JS -->
    <script src="{{asset('frontEndAssets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--Main Wrapper Start-->
<div class="as-mainwrapper">

    @include('frontEnd.include.header')

    @yield('content')

    @include('frontEnd.include.footer')

    @include('frontEnd.include.quickLogin')
<!--End of Login Form-->
<!--Start of Login Form-->
<div id="quickview-register">
    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                        <div class="area-title text-center mb-43">
                            <img src="{{asset('frontEndAssets')}}/images/logo/logo.png" alt="jobhere">
                        </div>
                        <form method="post" action="#">
                            <div class="form-box box2">
                                <input type="text" name="firstname" placeholder="First Name" class="mb-14">
                                <input type="text" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-box">
                                <input type="email" name="emailnew" placeholder="Email" class="mb-14">
                                <input type="password" name="pass" placeholder="Password">
                            </div>
                            <div class="fix ptb-30">
                                <span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="text-uppercase">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Login Form-->


<!-- jquery latest version
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap framework js
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAssets')}}/js/popper.min.js"></script>

<!-- Owl Carousel js
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/owl.carousel.min.js"></script>

<!-- Jquery nice select js
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/jquery.nice-select.min.js"></script>

<!-- nivo slider js
========================================================= -->
<script src="{{asset('frontEndAssets')}}/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="{{asset('frontEndAssets')}}/lib/nivo-slider/home.js"></script>

<!-- Js plugins included in this file
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/plugins.js"></script>

<!-- Video Player JS
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/jquery.mb.YTPlayer.js"></script>

<!-- AJax Mail JS
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/ajax-mail.js"></script>

<!-- Mail Chimp JS
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/jquery.ajaxchimp.min.js"></script>

<!-- Waypoint Js
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/waypoints.min.js"></script>

<!-- Main js file contents all jQuery plugins activation
========================================================= -->
<script src="{{asset('frontEndAssets')}}/js/main.js"></script>

</body>

<!-- Mirrored from htmldemo.net/jobhere/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:23:33 GMT -->
</html>
