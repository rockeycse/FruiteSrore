<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Flavours Home Page</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css"
          href="http://htmldemo.themesmart.net/flavours/version1/stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="http://htmldemo.themesmart.net/flavours/version1/stylesheet/revslider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="http://htmldemo.themesmart.net/flavours/version1/stylesheet/style.css"
          media="all">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/css/responsive.css')}}" media="all">

    <link href="{{ asset('/css/css.css')}}"
          rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/css1.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/css2.css')}}" rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
@yield('header')
</head>
<body>

{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@if (Auth::check())--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ url('/login') }}">Login</a>--}}
                {{--<a href="{{ url('/register') }}">Register</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--Laravel--}}
        {{--</div>--}}

        {{--<div class="links">--}}
            {{--<a href="https://laravel.com/docs">Documentation</a>--}}
            {{--<a href="https://laracasts.com">Laracasts</a>--}}
            {{--<a href="https://laravel-news.com">News</a>--}}
            {{--<a href="https://forge.laravel.com">Forge</a>--}}
            {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<script type="text/javascript" src="{{ asset('/js/jquery-3.2.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/revslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/common.js')}}"></script>
<script type="text/javascript"
        src="{{ asset('/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{ asset('/js/jquery.mobile-menu.min.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#thm-rev-slider').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 0,
            startheight: 900,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'on',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'on',
            forceFullWidth: 'off',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
<script type="text/javascript">
    function HideMe() {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>
@yield('content')
<footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
        <div class="newsletter-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
                        <!-- Footer Payment Link -->
                        <div class="payment-accept">
                            <div><img src="images/payment-1.png"
                                      alt="payment1"> <img
                                        src="images/payment-2.png"
                                        alt="payment2"> <img
                                        src="images/payment-3.png"
                                        alt="payment3"> <img
                                        src="images/payment-4.png"
                                        alt="payment4"></div>
                        </div>
                    </div>
                    <!-- Footer Newsletter -->
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">
                        <div class="newsletter-wrap">
                            <h4>Sign up for emails</h4>
                            <form action="#" method="post" id="newsletter-validate-detail1">
                                <div id="container_form_news">
                                    <div id="container_form_news2">
                                        <input type="text" name="email" id="newsletter1"
                                               title="Sign up for our newsletter"
                                               class="input-text required-entry validate-email"
                                               placeholder="Enter your email address">
                                        <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span>
                                        </button>
                                    </div>
                                    <!--container_form_news2-->
                                </div>
                                <!--container_form_news-->
                            </form>

                        </div>
                        <!--newsletter-wrap-->
                    </div>

                </div>
            </div>
            <!--footer-column-last-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 col-lg-4">
                    <div class="co-info">
                        <div><a href="http://htmldemo.themesmart.net/flavours/version1/index.html"><img
                                        src="images/logo.png"
                                        alt="footer logo"></a></div>
                        <address>
                            <div><em class="icon-location-arrow"></em>
                                <span>ABC Town Luton Street, New York 226688</span></div>
                            <div><em class="icon-mobile-phone"></em><span> + 0800 567 345</span></div>
                            <div><em class="icon-envelope"></em><span>support@themesmart.net</span></div>
                        </address>
                        <div class="social">
                            <ul class="link">
                                <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#"
                                                            title="Facebook"></a></li>
                                <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#"
                                                            title="Twitter"></a></li>
                                <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                    title="GooglePlus"></a></li>
                                <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#"
                                                             title="RSS"></a></li>
                                <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                  title="PInterest"></a></li>
                                <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                  title="Linkedin"></a></li>
                                <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#"
                                                                 title="Youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-xs-12 col-lg-8">
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul class="links">
                            <li class="first"><a title="How to buy"
                                                 href="http://htmldemo.themesmart.net/blog/">Blog</a></li>
                            <li><a title="FAQs" href="#">FAQs</a></li>
                            <li><a title="Payment" href="#">Payment</a></li>
                            <li><a title="Shipment" href="#">Shipment</a></li>
                            <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                            <li class="last"><a title="Return policy" href="#">Return policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Style Advisor</h4>
                        <ul class="links">
                            <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                            <li><a title="Information" href="#">Information</a></li>
                            <li><a title="Addresses" href="#">Addresses</a></li>
                            <li><a title="Addresses" href="#">Discount</a></li>
                            <li><a title="Orders History" href="#">Orders History</a></li>
                            <li class="last"><a title=" Additional Information" href="#"> Additional Information</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Information</h4>
                        <ul class="links">
                            <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                            <li><a title="Search Terms" href="#">Search Terms</a></li>
                            <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                            <li><a title="History" href="#">About Us</a></li>
                            <li><a title="History" href="#">Contact Us</a></li>
                            <li><a title="Suppliers" href="#">Suppliers</a></li>
                        </ul>
                    </div>


                </div>

                <!--col-sm-12 col-xs-12 col-lg-8-->
                <!--col-xs-12 col-lg-4-->
            </div>
            <!--row-->

        </div>

        <!--container-->
    </div>
    <!--footer-inner-->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="row"></div>
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-middle-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright">© 2015 Flavours. All Rights Reserved.</div>

            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--footer-bottom-->
    <!-- BEGIN SIMPLE FOOTER -->
</footer>
@yield('footer')
</body>
</html>
