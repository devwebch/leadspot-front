@extends('layouts.app')

@section('body-class', 'p-t-100')

@section('title', trans('pricing.general.pricing'))

@section('header')
    @include('layouts.partials.header-solid')
@endsection

@section('styles')
    <style>
        .bg-red {
            background: #b94a67;
        }
        .bg-blue {
            background: #5b9ec1;
        }

        /* Small devices (tablets, 768px and up) */
        @media (min-width: 768px) {}

        /* Medium devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .plan-free .btn-buy { margin-top: 172px; }
            .plan-boutique .btn-buy { margin-top: 74px }
            .plan-company .btn-buy { margin-top: 50px; }
            .plan-agency .btn-buy {}
        }

        /* Large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {}

    </style>
@endsection

@section('content')

    <!-- BEGIN PRICING SECTION -->
    <section class="p-t-40 p-b-75 sm-p-t-30">
        <div class="container">
            <h1 class="text-center m-b-5">
                {{trans('pricing.general.plans_fitted')}}
            </h1>
            <!-- Start pricing -->
            <div class="m-t-40">
                <div class="row">
                    <!-- free -->
                    <div class="col-sm-3 p-l-5 p-r-5 plan-free">
                        <div class="pricing-heading m-t-45">
                            <div class="bg-white p-t-60 p-b-60">
                                <h2 class="text-center m-b-25 font-montserrat">{{trans('pricing.free.label')}}</h2>
                                <p class="hint-text text-center">{{trans('pricing.free.desc')}}</p>
                            </div>
                            <div class="bg-master-lighter p-t-20 p-b-20">
                                <h5 class="block-title text-center no-margin">{{trans('pricing.free.label')}}</h5>
                            </div>
                        </div>
                        <div class="pricing-details bg-white p-t-30 p-b-30 p-l-40 p-r-40 md-p-l-20 md-p-r-20">
                            <ul class="no-style">
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.one_user')!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.company_searches', ['num' => "60"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.email_lookups', ['num' => "10"])!!}</li>
                            </ul>
                            <div class="text-center">
                                <a href="https://go.leadspotapp.com/register" class="btn btn-info btn-block btn-lg all-caps btn-buy">{{trans('pricing.free.label')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- /free -->
                    <!-- boutique -->
                    <div class="col-sm-3 p-l-5 p-r-5 plan-boutique">
                        <div class="pricing-heading m-t-45">
                            <div class="bg-white p-t-60 p-b-60">
                                <h2 class="text-center m-b-25 font-montserrat">$49<span class="hint-text">{{trans('pricing.general.per_month')}}</span></h2>
                                <p class="hint-text text-center">{{trans('pricing.boutique.desc')}}</p>
                            </div>
                            <div class="bg-info-light p-t-20 p-b-20">
                                <h5 class="block-title text-center text-white no-margin bold">{{trans('pricing.boutique.label')}}</h5>
                            </div>
                        </div>
                        <div class="pricing-details bg-white p-t-30 p-b-30 p-l-40 p-r-40 md-p-l-20 md-p-r-20">
                            <ul class="no-style">
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.one_user')!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.company_searches', ['num' => "1'000"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.email_lookups', ['num' => "500"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.cms_detector') !!}</li>
                                <li class="text-black fs-16 normal m-b-25">&nbsp;</li>
                            </ul>
                            <div class="text-center">
                                <a href="https://go.leadspotapp.com/register" class="btn btn-info btn-block btn-lg all-caps btn-buy">{{trans('pricing.general.subscribe')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- /boutique -->
                    <!-- company -->
                    <div class="col-sm-3 p-l-5 p-r-5 xs-m-t-40 plan-company">
                        <div class="pricing-heading xs-p-t-10">
                            <div class="m-l-15 m-r-15 bg-red" style="height: 45px; padding: 8px;">
                                <h5 class="block-title text-center text-white no-margin">{{trans('pricing.general.recommended')}}</h5>
                            </div>
                            <div class="bg-white p-t-60 p-b-60">
                                <h2 class="text-center m-b-25 font-montserrat">$129<span class="hint-text">{{trans('pricing.general.per_month')}}</span></h2>
                                <p class="hint-text text-center">{{trans('pricing.company.desc')}}</p>
                            </div>
                            <div class="bg-red p-t-20 p-b-20">
                                <h5 class="block-title text-center text-white no-margin bold">{{trans('pricing.company.label')}}</h5>
                            </div>
                        </div>
                        <div class="pricing-details bg-white p-t-30 p-b-30 p-l-40 p-r-40 md-p-l-20 md-p-r-20">
                            <ul class="no-style">
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.team_members', ['num' => "3"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.company_searches', ['num' => "5'000"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.email_lookups', ['num' => "2'000"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.cms_detector') !!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.pdf_reports') !!}</li>
                            </ul>
                            <div class="text-center">
                                <a href="https://go.leadspotapp.com/register" class="btn btn-info btn-block btn-lg all-caps btn-buy">{{trans('pricing.general.subscribe')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- /company -->
                    <!-- agency -->
                    <div class="col-sm-3 p-l-5 p-r-5 plan-agency">
                        <div class="pricing-heading m-t-45 ">
                            <div class="bg-white p-t-60 p-b-60">
                                <h2 class="text-center m-b-25 font-montserrat">$499<span class="hint-text">{{trans('pricing.general.per_month')}}</span></h2>
                                <p class="hint-text text-center">{{trans('pricing.agency.desc')}}</p>
                            </div>
                            <div class="bg-warning p-t-20 p-b-20">
                                <h5 class="block-title text-center text-white no-margin bold">{{trans('pricing.agency.label')}}</h5>
                            </div>
                        </div>
                        <div class="pricing-details bg-white p-t-30 p-b-30 p-l-40 p-r-40 md-p-l-20 md-p-r-20">
                            <ul class="no-style">
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.team_members', ['num' => trans('pricing.general.unlimited')]) !!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.company_searches', ['num' => "50'000"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.email_lookups', ['num' => "10'000"])!!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.cms_detector') !!}</li>
                                <li class="text-black fs-16 normal m-b-25">{!! trans('pricing.quotas.pdf_reports') !!}</li>
                            </ul>
                            <div class="text-center">
                                <a href="https://go.leadspotapp.com/register" class="btn btn-info btn-block btn-lg all-caps btn-buy">{{trans('pricing.general.subscribe')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- /agency -->
                </div>
            </div>
            <!-- End pricing -->
        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection