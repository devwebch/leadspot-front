@extends('layouts.app')

@section('title', '')

@section('header')
    @parent
@endsection

@section('content')
    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron full-height bg-info-dark demo-height-2" data-pages="parallax">
        <div class="full-height" data-pages-bg-image="{{asset('images/jumbotron-1.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.6">
            <div class="container-xs-height full-height inner">
                <div class="col-xs-height col-middle text-left">
                    <div class="container">
                        <div class="col-sm-12">
                            <h1 class="light text-white text-center">{!! trans('home.jumbotron_title') !!}</h1>
                            <h3 class="light text-white text-center">{{trans('home.jumbotron_sub')}}</h3>
                        </div>
                        <div class="col-sm-12 text-center m-t-20">
                            <a href="#launch" title="Discover LeadSpot" class="btn btn-danger btn-discover btn-lg xs-m-b-20">{{trans('home.discover_leadspot')}}</a>
                            <a href="https://go.leadspotapp.com/register" title="{{trans('home.register_leadspot')}}" target="_blank" class="btn btn-bordered btn-white btn-lg">{{trans('home.register_now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON -->
    <!-- BEGIN SECTION -->
    <section id="launch" class="p-b-60 p-t-60 no-overflow relative" style="min-height:630px">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h6 class="block-title m-b-0 ">{{trans('home.find_clients')}}</h6>
                    <h1 class="m-t-5">{!! trans('home.struggle_clients') !!}</h1>
                    <p class="m-t-20">{!! trans('home.struggle_clients_msg') !!}</p>
                </div>
            </div>
            <img class="m-t-30" src="{{asset('images/arrow_down_2.png')}}" alt="">
        </div>
        <div class="text-center">
            <img class="demo-handboofk lazy loaded loaded xs-image-responsive-height image-responsive-width"
                 data-pages="float"
                 src="{{asset('images/app_showcase.png')}}" alt=""
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
                    <h2 class="light m-t-5 m-b-20">{{trans('home.head_start')}}</h2>
                    <p>{!! trans('home.head_start_msg') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h5 class="block-title hint-text no-margin">{{trans('home.search')}}</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="m-t-5 m-b-20">{{trans('home.find_businesses')}}</h1>
                        <p class="m-b-20">{{trans('home.find_businesses_msg')}}</p>
                        <p class="hint-text font-arial small-text col-md-8 no-padding">{{trans('home.find_businesses_msg_2')}}</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="content-mask-md">
                            <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                                <img alt="Find local businesses on LeadSpot" class="xs-image-responsive-height image-responsive-width"
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
    <section class="p-b-50 p-t-50 bg-master-darkest sm-no-margin" data-pages-bg-image="{{asset('images/photo-1465637735148-7a30f47f5b2b.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.7" data-pages="parallax">
        <div class="container p-b-50 p-t-50">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h1 class="text-white col-sm-12">{{trans('home.start_now_no_charge')}}</h1>
                        <p class="text-white col-sm-12 p-b-5">{{trans('home.start_now_no_charge_msg')}}</p>
                        <a href="https://go.leadspotapp.com/register" class="btn btn-lg btn-danger btn-cons btn-rounded m-t-20 bold">{{trans('home.create_free_account')}}</a>
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
                <h5 class="block-title hint-text no-margin">{{trans('home.go_further')}}</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="m-t-5 m-b-20">{{trans('home.manage_clients')}}</h1>
                        <p class="m-b-20">{{trans('home.manage_clients_msg')}}</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="content-mask-md">
                            <div class="device_morph pull-center-inner" id="iphone01" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="300" data-speed="-0.1" data-delay="1000" data-curve="ease">
                                <img alt="Manage clients with LeadSpot" class="xs-image-responsive-height image-responsive-width"
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
                <h5 class="block-title hint-text no-margin">{{trans('home.be_efficient')}}</h5>
                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        <h1 class="m-t-5">{{trans('home.find_clients_need')}}</h1>
                    </div>
                    <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                        <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                            <p>{{trans('home.find_clients_need_msg')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-15 p-t-10 bg-master-darker text-center text-white">
        <h3 class="inline text-white xs-m-b-20">{{trans('home.start_finding')}}</h3>
        <a href="https://go.leadspotapp.com/register" title="{{trans('home.create_free_account')}}" class="btn btn-cons btn-bordered m-l-20 m-b-10 xs-no-margin">{{trans('home.create_free_account')}}</a>
    </section>
    <!-- END CONTENT SECTION -->
@endsection