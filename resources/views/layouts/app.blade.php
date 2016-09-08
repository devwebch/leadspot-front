<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Front End</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="{{asset('')}}/ico/60.png">
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
<body class="pace-complete">
<!-- BEGIN HEADER -->
<nav class="header bg-header transparent-light " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
    <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
            <!-- .header-inner Allows to vertically Align elements to the Center-->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <img src="{{asset('images/logo-leadspot-negative.png')}}" width="152" data-src-retina="{{asset('images/logo-leadspot-negative.png')}}" alt="">
            </div>
        </div>
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
            <div class="header-inner">
                <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN RIGHT CONTENT -->
        <div class="pull-right menu-content clearfix" data-pages="menu-content" data-pages-direction="slideRight" id="header">
            <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
            <div class="pull-right">
                <a href="#" class="text-black link padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
                    <i class=" pg-close_line"></i>
                </a>
            </div>
            <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
            <!-- BEGIN MENU ITEMS -->
            <div class="header-inner">
                <ul class="menu">
                    <li>
                        <a href="index.html" data-text="Home" class="active">Home </a>
                    </li>
                    <li class="classic">
                        <a href="javascript:;" data-text="Elements">Elements <i class="pg-arrow_minimize m-l-5"></i></a>
                        <nav class="classic ">
                            <span class="arrow"></span>
                            <ul>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#color" target="_blank">Colors</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#icons" target="_blank">Icons</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#buttons" target="_blank">Buttons</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#modals" target="_blank">Modals</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#progress_bars" target="_blank">Progress &amp; Activity</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#accordians" target="_blank">Accordians</a>
                                </li>
                                <li>
                                    <a href="http://pages.revox.io/frontend/1.0/doc/#tabs" target="_blank">Tabs</a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                    <li>
                        <a href="pricing.html" data-text="Pricing">Pricing </a>
                    </li>
                    <li>
                        <a href="portfolio.html" data-text="Portfolio">Portfolio </a>
                    </li>
                    <li>
                        <a href="contact.html" data-text="Contact">Contact </a>
                    </li>
                    <li>
                        <a class="btn btn-bordered fs-12 btn-white hidden-sm hidden-xs" href="http://themeforest.net/item/pages-responsive-admin-dashboard-template/9694847" data-text="Buy now">Buy now</a>
                        <a class="btn btn-bordered fs-12 btn-black  font-montserrat fs-12 all-caps pull-bottom visible-sm visible-xs buy-now sm-static sm-m-l-20 sm-m-r-20" href="http://themeforest.net/item/pages-responsive-admin-dashboard-template/9694847">Buy now</a>
                    </li>
                </ul>
            </div>
            <!-- END MENU ITEMS -->
        </div>
    </div>
</nav>
<!-- END HEADER -->
<!-- BEGIN JUMBOTRON -->
<section class="jumbotron full-vh relative">
    <div class="container-xs-height full-height z-index-1">
        <div class="col-xs-height col-middle text-left">
            <!-- BEGIN CONTENT -->
            <div class="inner full-height">
                <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h1 class="light text-white m-t-5" data-swiper-parallax="-15%">
                                        A new Beginning
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
    <div class="op-left bottom-right full-width full-vh z-index-1" data-vide-bg="assets/video/hero.mp4" data-vide-options="loop: true, muted: false, position: 50% 0%">
    </div>
    <div class="bottom-right full-width full-vh z-index-1 hidden demo-video-placeholder" data-pages-bg-image="assets/images/Screenshot.jpg"></div>
    <a id="start_tour" href="#" class="btn btn-lg btn-black demo-btn-tour font-montserrat all-caps no-border fs-13">Start tour</a>
    <div class="video-overlay z-index-1"></div>
</section>
<!-- END JUMBOTRON -->
<!-- BEGIN INTRO CONTENT -->
<section id="stats" class="p-b-40 p-t-50 sm-p-b-0">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="text-center">
                <h5 class="block-title m-t-40 hint-text m-b-0">Parallax Slide</h5>
                <h1 class="light m-t-5 m-b-0">Celebrate Motion paralax scroll.</h1>
            </div>
            <div class="row m-t-30">
                <div class="col-sm-4">
                    <div class="progress progress-small m-t-15">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                        </div>
                    </div>
                    <h3 class="no-margin"><span data-pages-animate="number" data-value="200" data-animation-duration="800">0</span>%</h3>
                    <p class="font-arial hint-text fs-12">Smoother
                    </p>
                    <p>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="progress progress-small m-t-15">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                        </div>
                    </div>
                    <h3 class=" no-margin"><span data-pages-animate="number" data-value="200" data-animation-duration="800">0</span>%</h3>
                    <p class="font-arial hint-text fs-12">Lighter
                    </p>
                    <p>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="progress progress-small m-t-15">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                        </div>
                    </div>
                    <h3 class=" no-margin"><span data-pages-animate="number" data-value="200" data-animation-duration="800">0</span>ma</h3>
                    <p class="font-arial hint-text fs-12">Micro Awesomness
                    </p>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BEGIN PRICING SECTION -->
<section class="p-b-65 p-t-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-sm-5 sm-m-t-30">
                        <div class="p-r-65 md-p-l-0 md-p-r-10 sm-m-t-20">
                            <div class="b-black b-a text-center b-rad-md no-overflow">
                                <div class="bg-black p-t-30 p-b-30">
                                    <h5 class="block-title text-white no-margin">Regular</h5>
                                    <h1 class="font-montserrat no-margin text-white">27 <sup class="fs-14 dollar">USD</sup></h1>
                                    <p class="text-white no-margin fs-14">per Company/ mo</p>
                                </div>
                                <div class="p-t-20 p-b-20">
                                    <p class="semi-bold">Billed annually or
                                        <br> $27 month-to-month</p>
                                    <ul class="list-unstyled p-l-60 p-r-60  sm-p-l-10 sm-p-r-10 hint-text m-t-20">
                                        <li class="b-b b-grey">
                                            <p class="font-arial fs-14 no-margin p-t-5 p-b-5">Upto 30 Companies</p>
                                        </li>
                                        <li class="b-b b-grey">
                                            <p class="font-arial fs-14  no-margin p-t-5 p-b-5">Free Email Server</p>
                                        </li>
                                        <li class="b-b b-grey">
                                            <p class="font-arial fs-14 no-margin p-t-5 p-b-5">2 Domain Names</p>
                                        </li>
                                        <li class="b-b b-grey">
                                            <p class="font-arial fs-14 no-margin p-t-5 p-b-5">1 Web Server</p>
                                        </li>
                                        <li class="">
                                            <p class="font-arial fs-14 no-margin p-t-5 p-b-5">1 End Product</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-master-lighter p-t-20 p-b-20">
                                    <a class="btn btn-rounded btn-black" href="#">Rounded</a>
                                    <a class="btn btn-rounded btn-white" href="#">Try</a>
                                    <p class="small hint-text m-t-15 m-b-5">30 Days Free Trail for the
                                        <br> Regular package</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7  sm-p-t-20 ">
                        <h1 class="m-t-30 light">Hundred of UI Elements <br>
                            for the price of one</h1>
                        <div class="p-t-50">
                            <dl>
                                <dt class="block-title p-b-15 text-black">Launch Design <i class="pg-arrow_right m-l-10"></i></dt>
                                <dd class="m-b-30">Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a more sophisticated yet simple framework</dd>
                            </dl>
                            <dl>
                                <dt class="block-title p-b-15 text-black">Responsive <i class="pg-arrow_right m-l-10"></i></dt>
                                <dd class="m-b-30">Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a</dd>
                            </dl>
                            <dl>
                                <dt class="block-title text-black p-b-15 ">Launch Your Design <i class="pg-arrow_right m-l-10"></i></dt>
                                <dd class="m-b-30">Our long standing vision has been to bypass the usual admin dashboard structure.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PRICING SECTION -->
<!-- START CONTENT SECTION -->
<section class="p-b-50 p-t-50 bg-master-darkest m-t-35 sm-no-margin" data-pages-bg-image="{{asset('images/banner_2.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.3" data-pages="parallax">
    <div class="container p-b-50 p-t-50">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-xs-height col-middle">
                    <div class="text-center">
                        <h1 class="text-white col-sm-12 p-b-10">Crafted with detail for a great start!
                            front-end plus back-end.</h1>
                        <button type="button" class="btn btn-lg btn-primary btn-cons btn-rounded m-t-20">Explore</button>
                        <p class="fs-12 font-arial text-white m-t-30"><span class="hint-text">Exclusive only at
                        Envato Marketplace,<br></span> Themeforest See Standard licenses &amp; Extended licenses
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT SECTION -->
<!-- START CONTENT SECTION -->
<section class="bg-master-lightest p-b-60 p-t-60">
    <div class="container">
        <div class="md-p-l-20 md-p-r-20 xs-no-padding">
            <h5 class="block-title hint-text no-margin">Explore</h5>
            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <h1 class="m-t-5">Different ways to Organize your Content.</h1>
                </div>
                <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                    <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                        <p>Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a more sophisticated yet simple framework that would create a credible impact on the many conventional dashboard users.</p>
                        <p class="hint-text font-arial small-text col-md-7 no-padding">A product is accessible when all people regardless of ability can navigate it, understand it, and use it to achieve goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT SECTION -->
<!-- START CONTENT SECTION -->
<section class="p-b-85 p-t-75 p-b-65 p-t-55 text-center">
    <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30 xs-no-padding clearfix">
                    <img src="{{asset('images/Parachute.svg')}}" class="m-b-20" alt="">
                    <h6 class="block-title p-b-5">Launch Design <i class="pg-arrow_right"></i></h6>
                    <p class="m-b-30">Awesome notepad app. It gives you a quick and simple notepad editing experience when you write notes.</p>
                    <p class="muted font-arial small-text no-padding col-xs-6 col-xs-offset-3">Icon Fonts, Vector SVG's, pages 14x14px vector icons.</p>
                </div>
                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30 xs-no-padding clearfix">
                    <img src="{{asset('images/Prizemedalion.svg')}}" class="m-b-20" alt="">
                    <h6 class="block-title p-b-5">Award Wining <i class="pg-arrow_right"></i></h6>
                    <p class="m-b-30">Quick chat helps you to Keep in touch with your friends and colleagues while working. It has a unique responsive design.</p>
                    <p class="muted font-arial small-text no-padding col-xs-6 col-xs-offset-3">Limitless possibilities, Highly customizable, Great UI &amp; UX</p>
                </div>
                <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="p-r-40 md-pr-30 xs-no-padding clearfix">
                    <img src="{{asset('images/Umbrella.svg')}}" class="m-b-20" alt="">
                    <h6 class="block-title p-b-5">Shop ready <i class="pg-arrow_right"></i></h6>
                    <p class="m-b-30">This is a very young collection of charts, with the goal of keeping these components very customizable.</p>
                    <p class="muted font-arial small-text no-padding col-xs-6 col-xs-offset-3">Highly customizable NVD3, rickshaw, Spark Lines, D3.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT SECTION -->
<!-- START CONTENT SECTION -->
<section class="container container-fixed-lg p-t-65 p-b-60">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding">
        <div class="row">
            <div class="col-sm-3 xs-m-b-30">
                <h2 class="font-montserrat no-margin text-uppercase p-l-30 sm-no-padding"><span data-pages-animate="number" data-value="102345345" data-animation-duration="800">0</span></h2>
                <h6 class="block-title fs-13 m-t-5 text-uppercase p-l-30 sm-no-padding muted">Active Customers</h6>
            </div>
            <div class="col-sm-9">
                <div class="sm-p-l-20 xs-no-padding">
                    <p>Our motivation "Perfection simplified" helps to craft meaningful experiences for the people around us, This mission inspires us to jump out of bed each day and guides every aspect of what we do.</p>
                    <p class="m-t-30 fs-12 font-arial hint-text">Creative Direction, Code Perfection, Innovative Mindset
                    </p>
                </div>
            </div>
        </div>
        <div class="progress progress-tiny m-t-15 m-b-5">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                <span class="sr-only">60% Complete</span>
            </div>
        </div>
        <p class="pull-right font-arial hint-text fs-11">67% <span class="hint-text">Higher than Previous Month</span></p>
    </div>
</section>
<!-- END CONTENT SECTION -->
<!-- START FOOTER -->
<section class="p-b-30 p-t-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img alt="" class="logo inline m-r-50" src="{{asset('images/logo_black.png')}}">
                <div class="m-t-10 ">
                    <ul class="no-style fs-11 no-padding font-arial">
                        <li class="inline no-padding"><a class=" text-master p-r-10 b-r b-grey" href="#">Home</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 b-r b-grey" href="#">Themeforest</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 b-r b-grey" href="#">Support</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10" href="#">Made with Pages</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right font-arial sm-text-left">
                <p class="fs-11 no-margin"><span class="hint-text">Exclusive only at</span> Envato Marketplace,Themeforest <span class="hint-text">See</span> Standard licenses &amp; Extended licenses
                </p>
                <p class="fs-11 muted">Copyright &copy; 2014 REVOX. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->
<!-- BEGIN VENDOR JS -->
<script src="{{asset('plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/swiper/js/swiper.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/velocity/velocity.ui.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jquery-appear/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/animateNumber/jquery.animateNumbers.js')}}"></script>
<!-- END VENDOR JS -->
<!-- BEGIN PAGES FRONTEND LIB -->
<script type="text/javascript" src="{{asset('pages/js/pages.frontend.js')}}"></script>
<!-- END PAGES LIB -->
<!-- BEGIN YOUR CUSTOM JS -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- END PAGES LIB -->
</body>
</html>