<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>
        @if(View::hasSection('title'))
            @yield('title') - LeadSpot
        @else
            LeadSpot - B2B Local lead generation
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGINS -->
    <link href="{{asset('plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/swiper/css/swiper.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link class="main-stylesheet" href="{{asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="{{asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGES CSS -->
</head>
<body class="pace-complete @yield('body-class')">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-10894705-3', 'auto');
    ga('send', 'pageview');

</script>
<!-- BEGIN HEADER -->
@section('header')
    @include('layouts.partials.header-transparent')
@show
<!-- END HEADER -->
@yield('content')
<!-- START FOOTER -->
<section class="p-b-30 p-t-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img alt="" class="logo inline m-r-50" src="{{asset('images/logo-leadspot.png')}}" width="100">
                <div class="m-t-10 ">
                    <ul class="no-style fs-11 no-padding font-arial">
                        <li class="inline no-padding"><a class="hint-text text-master p-r-10 b-r b-grey" href="mailto:support@leadspotapp.com">Support</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10" href="/terms-and-conditions">Terms and conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right font-arial sm-text-left">
                <p class="fs-11 m-t-30 muted">Copyright &copy; {{date('Y')}} LeadSpot. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->
<!-- BEGIN VENDOR JS -->
<script src="{{asset('plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/velocity/velocity.ui.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jquery-appear/jquery.appear.js')}}"></script>
<!-- END VENDOR JS -->
<!-- BEGIN PAGES FRONTEND LIB -->
<script type="text/javascript" src="{{asset('pages/js/pages.frontend.js')}}"></script>
<!-- END PAGES LIB -->
</body>
</html>