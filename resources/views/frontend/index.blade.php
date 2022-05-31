
<!doctype html>
<html lang="en">

<head>
    <title>Certificate G-Academy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/slick/slick.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/animation/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style-main.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    @livewireStyles
</head>

<body data-scroll-animation="true">
    {{-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="{{asset('assets')}}/img/spinner_logo.png" alt="">
                    <h4><span>Doc</span>y</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div> --}}
    <div class="body_wrapper">
        @include('frontend.layouts.navbar')
        @include('frontend.layouts.middle')
        @include('frontend.layouts.footer')
    </div>

    <a id="back-to-top" title="Back to Top"></a>

    @livewireScripts
    <script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>
    <script src="{{asset('assets')}}/assets/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/pre-loader.js"></script>
    <script src="{{asset('assets')}}/assets/slick/slick.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.parallax-scroll.js"></script>
    <script src="{{asset('assets')}}/assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="{{asset('assets')}}/assets/wow/wow.min.js"></script>
    <script src="{{asset('assets')}}/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('assets')}}/assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>
