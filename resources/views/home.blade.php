@extends('layouts.app')

@section('header')
    @parent
@endsection

@section('content')
    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron full-height bg-primary demo-height-2" data-pages="parallax">
        <div class="full-height" data-pages-bg-image="{{asset('images/photo-1414690165279-49ab0a9a7e66.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.4">
            <div class="container-xs-height full-height inner">
                <div class="col-xs-height col-middle text-left">
                    <div class="container">
                        <div class="col-sm-12">
                            <h1 class="light text-white text-center">Rethink your leads generation process</h1>
                            <h3 class="light text-white text-center">Find local business opportunities</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h5 class="block-title hint-text no-margin">MENU CLIPPING</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="m-t-5 m-b-20">Easier to remember and access.</h1>
                        <p class="m-b-20">Menu clipping makes it easier to keep track of the page you are at & helps you to identify menu labels using abbreviations</p>
                        <p class="hint-text font-arial small-text col-md-8 no-padding">This is something extra to give users an exceptional user experience with a condensed menu.</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="content-mask-md">
                            <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                                <img alt="" class="xs-image-responsive-height image-responsive-width" src="{{asset('images/b_phone.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-50 p-t-50 bg-master-darkest sm-no-margin" data-pages-bg-image="{{asset('images/banner_2.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.3" data-pages="parallax">
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
@endsection