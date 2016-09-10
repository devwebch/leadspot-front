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
                            <h3 class="light text-white text-center">& find local business opportunities</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON -->
    <!-- BEGIN SECTION -->
    <section id="launch" class="p-b-60 p-t-60 no-overflow relative" style="min-height:730px">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h6 class="block-title m-b-0 ">Find clients</h6>
                    <h1 class="m-t-5">Are you struggling to find<br>new clients?</h1>
                    <p class="m-t-20">As a young agency or freelancer, finding your first clients<br>may be quite difficult, <strong>let's make it simple</strong>.</p>
                </div>
            </div>
            <img class="m-t-30" src="{{asset('images/arrow_down_2.png')}}" alt="">
        </div>
        <div class="text-center">
            <img class="demo-handboofk lazy loaded loaded"
                 data-pages="float"
                 src="{{asset('images/showcase.png')}}" alt=""
                 data-max-top-translate="40"
                 data-max-bottom-translate="300"
                 data-speed="-0.1" data-delay="1000"
                 data-curve="ease"
                 style="transition: transform 1s ease; transform: translateY(39.5776px); bottom: -100px; position:relative;">
        </div>
    </section>
    <!-- END SECTION -->
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
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h5 class="block-title hint-text no-margin">Search</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="m-t-5 m-b-20">Find local business opportunities.</h1>
                        <p class="m-b-20">Analyze the web presence of local companies and evaluate their need automatically through our tool.</p>
                        <p class="hint-text font-arial small-text col-md-8 no-padding">Use extended search parameters to locate relevent clients.</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="content-mask-md">
                            <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                                <img alt="" class="xs-image-responsive-height image-responsive-width"
                                     src="{{asset('images/map_example.png')}}">
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
                    <div class="text-center">
                        <h1 class="text-white col-sm-12 p-b-10">Start now at no charge!</h1>
                        <a href="https://go.leadspotapp.com" class="btn btn-lg btn-complete btn-cons btn-rounded m-t-20">Create a free account</a>
                        <p class="fs-12 font-arial text-white m-t-30">
                            Paid subscriptions will be available enabling more features.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h5 class="block-title hint-text no-margin">Go further</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="m-t-5 m-b-20">Manage your future clients</h1>
                        <p class="m-b-20">Categorize and manage contact informations.</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="content-mask-md">
                            <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                                <img alt="" class="xs-image-responsive-height image-responsive-width"
                                     src="{{asset('images/list_example.png')}}">
                            </div>
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
                <h5 class="block-title hint-text no-margin">Be efficient</h5>
                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        <h1 class="m-t-5">Find clients that needs you</h1>
                    </div>
                    <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                            <p>LeadSpot helps you finding great potential client by analyzing their current presence on the internet, stop wasting time researching manually your leads, meet them with accurate, relevent data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-15 p-t-10 bg-master-darker text-center text-white">
        <h3 class="inline text-white xs-m-b-20">Start finding clients today!</h3>
        <button class="btn btn-cons btn-bordered m-l-20 xs-no-margin" type="button">Create my free account</button>
    </section>
    <!-- END CONTENT SECTION -->
@endsection