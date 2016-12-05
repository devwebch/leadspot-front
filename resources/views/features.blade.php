@extends('layouts.app')

@section('body-class', 'p-t-100')

@section('title', trans('features.general.features'))

@section('description', trans('features.metas.description'))

@section('header')
    @include('layouts.partials.header-solid')
@endsection

@section('styles')
    <style>
        /* Small devices (tablets, 768px and up) */
        @media (min-width: 768px) {}

        /* Medium devices (desktops, 992px and up) */
        @media (min-width: 992px) {}

        /* Large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {}

    </style>
@endsection

@section('content')

    <!-- BEGIN PRICING SECTION -->
    <section class="p-t-40 p-b-75 sm-p-t-30">
        <div class="container">
            <h1 class="text-center m-b-30">
                {{trans('features.general.features')}}
            </h1>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/optimplaces.svg" alt="{{trans('features.point_1_title')}}">
                <h6 class="block-title">{{trans('features.point_1_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_1_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/statsanticipate.svg" alt="{{trans('features.point_2_title')}}">
                <h6 class="block-title">{{trans('features.point_2_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_2_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/humantarget.svg" alt="{{trans('features.point_3_title')}}">
                <h6 class="block-title">{{trans('features.point_3_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_3_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/businessman.svg" alt="{{trans('features.point_4_title')}}">
                <h6 class="block-title">{{trans('features.point_4_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_4_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/PDF.svg" alt="{{trans('features.point_5_title')}}">
                <h6 class="block-title">{{trans('features.point_5_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_5_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/teammates.svg" alt="{{trans('features.point_6_title')}}">
                <h6 class="block-title">{{trans('features.point_6_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_6_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <img src="/images/icn/investigating.svg" alt="{{trans('features.point_7_title')}}">
                <h6 class="block-title">{{trans('features.point_7_title')}}</h6>
                <p class="m-b-30">{{trans('features.point_7_content')}}</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center p-t-60">
                <h6 class="block-title">{{trans('features.general.more_to_come')}}</h6>
            </div>

        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection