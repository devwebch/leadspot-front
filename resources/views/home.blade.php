@extends('layouts.app')

@section('title', '')

@section('description', trans('home.metas.description'))

@section('header')
    @parent
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.slick-modal.min.js')}}" async defer></script>
    <script type="text/javascript" async defer>
        jQuery(document).ready(function ($) {
            // Modal 1
            $('#popup-1').slickModals({
                // Hide on pages
                hideOnPages: [
                    '/foo/page1/',
                    '/foo/page2/',
                    '/foo/page3/'
                ],
                // Popup type
                popupType: 'exit',
                delayTime: 1000,
                exitTopDistance: 20,
                scrollTopDistance: 400,
                // Popup cookies
                setCookie: true,
                cookieDays: 30,
                cookieTriggerClass: 'setCookie-1',
                cookieName: 'slickModal-1',
                cookieScope: 'domain',
                // Overlay styling
                overlayBg: true,
                overlayClosesModal: true,
                overlayBgColor: 'rgba(0,0,0,0.85)',
                overlayTransitionSpeed: '0.4',
                // Background effects
                pageEffect: 'scale',
                blurBgRadius: '1px',
                scaleBgValue: '0.9',
                // Popup styling
                popupWidth: '560px',
                popupHeight: '300px',
                popupLocation: 'center',
                popupAnimationDuration: '0.6',
                popupAnimationEffect: 'fadeIn',
                popupShadowOffsetX: '0',
                popupShadowOffsetY: '0',
                popupShadowBlurRadius: '20px',
                popupShadowSpreadRadius: '0',
                popupShadowColor: 'rgba(0,0,0,0)',
                popupBackground: "rgba(255,255,255,1)",
                popupRadius: '0',
                popupMargin: '0',
                popupPadding: '0',
                // Animate content
                contentAnimate: false,
                contentAnimateEffect: 'zoomIn',
                contentAnimateSpeed: '0.4',
                contentAnimateDelay: '0.4',
                // Youtube videos
                videoSupport: false,
                videoAutoPlay: true,
                videoStopOnClose: true,
                // Close and reopen button
                addCloseButton: true,
                buttonStyle: 'icon',
                enableESC: true,
                reopenClass: 'openSlickModal-1',
                // Additional events
                onSlickLoad: function () {
                    ga('send', 'event', 'Popup', 'open', 'Exit popup');
                },
                onSlickClose: function () {
                    ga('send', 'event', 'Popup', 'close', 'Exit popup');
                }
            });

        });
    </script>
@endsection

@section('content')
    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron full-height bg-info-dark demo-height-2" data-pages="parallax">
        <div class="full-height" data-pages-bg-image="{{asset('images/jumbotron-1.jpg')}}" data-bg-overlay="black"
             data-overlay-opacity="0.6">
            <div class="container-xs-height full-height inner">
                <div class="col-xs-height col-middle text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="light text-white sm-text-center"
                                    style="font-size: 2.5rem; line-height: 1.5em;">{!! trans('home.jumbotron_title') !!}</h2>
                                <h3 class="light text-white sm-text-center">{!! trans('home.jumbotron_sub') !!}</h3>
                                <div class="m-t-40 sm-text-center">
                                    <a href="#launch" title="Discover LeadSpot"
                                       class="btn btn-danger btn-discover btn-lg xs-m-b-20">{{trans('home.discover_leadspot')}}</a>
                                    <a href="https://go.leadspotapp.com/register"
                                       title="{{trans('home.register_leadspot')}}" target="_blank"
                                       class="btn btn-bordered btn-white btn-lg"
                                       onclick="ga('send', 'event', 'Registration', 'click', 'CTA Jumbotron')">{{trans('home.register_now')}}</a>
                                </div>
                            </div>
                            <div class="col-md-5 hidden-xs hidden-sm">
                                <div class="optin-form p-l-20 p-t-10 p-b-10" style="border-left: 1px solid rgba(255,255,255,0.5);">
                                    <h3 class="text-white">{!! trans('home.optin_form.title') !!}</h3>
                                    <p class="text-white">{!! trans('home.optin_form.desc') !!}</p>
                                    <form class="m-t-25" method="get" action="https://go.leadspotapp.com/register" onsubmit="ga('send', 'event', 'Registration', 'click', 'Optin Jumbotron')">
                                        <div class="form-group form-group-default input-group no-border input-group-attached col-md-10 col-sm-12 col-xs-12">
                                            <label>{!! trans('home.optin_form.label') !!}</label>
                                            <input type="email" name="email" class="form-control" placeholder="john@gmail.com">
                                            <span class="input-group-btn">
                                                <button class="btn btn-black btn-cons" type="button">{!! trans('home.optin_form.submit_label') !!}</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                    <h3 class="m-t-5">{!! trans('home.struggle_clients') !!}</h3>
                    <p class="m-t-20">{!! trans('home.struggle_clients_msg') !!}</p>
                </div>
            </div>
            <img class="m-t-30" src="{{asset('images/arrow_down_2.png')}}" alt="more">
        </div>
        <div class="text-center">
            <img class="demo-handboofk lazy loaded loaded xs-image-responsive-height image-responsive-width"
                 data-pages="float"
                 src="{{asset('images/app_showcase.png')}}" alt="LeadSpot application" title="LeadSpot application"
                 data-max-top-translate="40"
                 data-max-bottom-translate="300"
                 data-speed="-0.1" data-delay="1000"
                 data-curve="ease"
                 style="transition: transform 1s ease; transform: translateY(39.5776px); bottom: -100px; position:relative;">
        </div>
    </section>
    <!-- END SECTION -->
    <!-- BEGIN INTRO CONTENT -->
    <section id="stats" class="p-b-70 p-t-50 sm-p-b-0">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="text-center">
                    <h2 class="light m-t-5 m-b-20">{{trans('home.head_start')}}</h2>
                    <p>{!! trans('home.head_start_msg') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-md-12 m-b-20 text-center">
                <h2 class="light m-t-5 m-b-20">{{trans('home.features_title')}}</h2>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/optimplaces.svg" alt="{{trans('features.point_1_title')}}">
                <h6 class="block-title">{{trans('features.point_1_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_1_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/statsanticipate.svg" alt="{{trans('features.point_2_title')}}">
                <h6 class="block-title">{{trans('features.point_2_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_2_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/humantarget.svg" alt="{{trans('features.point_3_title')}}">
                <h6 class="block-title">{{trans('features.point_3_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_3_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/businessman.svg" alt="{{trans('features.point_4_title')}}">
                <h6 class="block-title">{{trans('features.point_4_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_4_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/PDF.svg" alt="{{trans('features.point_5_title')}}">
                <h6 class="block-title">{{trans('features.point_5_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_5_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="images/icn/teammates.svg" alt="{{trans('features.point_6_title')}}">
                <h6 class="block-title">{{trans('features.point_6_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_6_content')}}</p>
            </div>
        </div>
    </section>
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h4 class="block-title hint-text no-margin">{{trans('home.search')}}</h4>
                <div class="row">
                    <div class="col-sm-5">
                        <h3 class="m-t-5 m-b-20">{{trans('home.find_businesses')}}</h3>
                        <p class="m-b-20">{{trans('home.find_businesses_msg')}}</p>
                        <p class="hint-text font-arial small-text col-md-8 no-padding">{{trans('home.find_businesses_msg_2')}}</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <div>
                            <div>
                                <img alt="Find local businesses on LeadSpot" title="Find local businesses on LeadSpot"
                                     class="xs-image-responsive-height image-responsive-width"
                                     src="{{asset('images/map_example.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-50 p-t-50 bg-master-darkest sm-no-margin"
             data-pages-bg-image="{{asset('images/photo-1465637735148-7a30f47f5b2b.jpg')}}" data-bg-overlay="black"
             data-overlay-opacity="0.7" data-pages="parallax">
        <div class="container p-b-50 p-t-50">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h3 class="text-white col-sm-12">{{trans('home.start_now_no_charge')}}</h3>
                        <p class="text-white col-sm-12 p-b-5">{{trans('home.start_now_no_charge_msg')}}</p>
                        <a href="https://go.leadspotapp.com/register"
                           class="btn btn-lg btn-danger btn-cons btn-rounded m-t-20 bold"
                           onclick="ga('send', 'event', 'Registration', 'click', 'CTA 1')">{{trans('home.create_free_account')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-t-75 no-overflow">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h4 class="block-title hint-text no-margin">{{trans('home.go_further')}}</h4>
                <div class="row">
                    <div class="col-sm-5">
                        <h3 class="m-t-5 m-b-20">{{trans('home.manage_clients')}}</h3>
                        <p class="m-b-20">{{trans('home.manage_clients_msg')}}</p>
                    </div>
                    <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                        <img alt="Manage clients with LeadSpot" title="Manage clients with LeadSpot"
                             class="xs-image-responsive-height image-responsive-width"
                             src="{{asset('images/list_example.jpg')}}">
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
                <h4 class="block-title hint-text no-margin">{{trans('home.be_efficient')}}</h4>
                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        <h3 class="m-t-5">{{trans('home.find_clients_need')}}</h3>
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
        <a href="https://go.leadspotapp.com/register" title="{{trans('home.create_free_account')}}"
           class="btn btn-cons btn-bordered m-l-20 m-b-10 xs-no-margin"
           onclick="ga('send', 'event', 'Registration', 'click', 'CTA 2')">{{trans('home.create_free_account')}}</a>
    </section>
    <!-- END CONTENT SECTION -->

    <!-- MODAL START -->
    <div id="popup-1" class="slickModal">
        <div class="slickWindow">
            <!-- Your popup content -->
            <div class="col-left">
                <div class="content">
                    <h2 class="title">{{trans('home.exit_popup.title')}}</h2>
                    <h4>{!! trans('home.exit_popup.subtitle') !!}</h4>
                    <p class="m-t-30">{{trans('home.exit_popup.strings')}}</p>
                    <p><a href="//go.leadspotapp.com/register">{{trans('home.exit_popup.create_account_seconds')}}</a>
                    </p>
                </div>
            </div>
            <div class="col-right">
                <div class="content">

                    <div class="text-center m-t-10">
                        <img src="images/optimplaces.png" alt="LeadSpot free account">
                    </div>
                    <div class="text-center m-t-40">
                        <a href="//go.leadspotapp.com/register" class="btn btn-danger btn-block btn-lg"
                           onclick="ga('send', 'event', 'Registration', 'click', 'CTA 3')">{{trans('home.exit_popup.register_now')}}</a>
                    </div>
                </div>
            </div>
            <!-- / Your popup content -->
        </div>
    </div>
    <!-- MODAL END -->

@endsection