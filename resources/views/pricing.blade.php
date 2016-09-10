@extends('layouts.app')

@section('body-class', 'p-t-100')

@section('header')
    @include('layouts.partials.header-solid')
@endsection

@section('content')
    <!-- BEGIN PRICING SECTION -->
    <section class="p-t-40 p-b-75 sm-p-t-30">
        <div class="container">
            <h1 class="text-center m-b-5">
                Plans built for every agent you desire
            </h1>
            <h3 class="text-center m-t-5">
                Start up with 30 days <strong class="font-montserrat all-caps">free</strong> trial.
            </h3>
            <table class="table table-striped pricing-table no-border m-t-60">
                <thead>
                <tr>
                    <th class="no-border"></th>
                    <th class="text-center v-align-top no-padding bg-master-lightest" style="width: 22%;">
                        <div class="bg-menu-dark">
                            <p class="block-title text-white padding-10 fs-14 no-margin">
                                Regular
                            </p>
                        </div>
                        <p class="font-montserrat m-t-30 m-b-30 lh-large">FREE</p>
                    </th>
                    <th class="text-center bg-menu v-align-top no-padding" style="width: 22%;">
                        <p class="block-title text-white padding-10 fs-14 text-warning">
                            Premium
                        </p>
                        <p class="font-montserrat text-white m-t-30 m-b-30 lh-large">
                            50 <sup class="fs-14 dollar">USD</sup> / mo
                        </p>
                    </th>
                    <th class="text-center v-align-top no-padding bg-master-lightest" style="width: 22%;">
                        <div class="bg-menu-dark">
                            <p class="block-title text-white padding-10 fs-14 no-margin">
                                Extended
                            </p>
                        </div>
                        <p class="font-montserrat m-t-30 m-b-30 lh-large">
                            25 <sup class="fs-14 dollar">USD</sup> / mo
                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-master-lightest">
                    <td>
                        <p class="p-l-10 m-t-10 fs-14 semi-bold">
                            Number of website analysis per day
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <p class="block-title text-info m-t-10 fs-14">
                            10
                        </p>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <p class="block-title text-white m-t-10 fs-14">
                            No limit
                        </p>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <p class="block-title text-info m-t-10 fs-14">
                            30
                        </p>
                    </td>
                </tr>
                <tr class="bg-transparent">
                    <td class="v-align-middle">
                        <p class="p-l-10 m-t-10 fs-14 semi-bold">
                            Use in a single end product
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <h4 class="fa fa-times text-info m-t-15 fs-14"></h4>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning m-t-15 fs-14"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-info m-t-15 fs-14"></h4>
                    </td>
                </tr>
                <tr class="bg-master-lightest">
                    <td class="v-align-middle">
                        <p class="p-l-10 m-t-10 fs-14 semi-bold">
                            Use in a single end product
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <h4 class="fa fa-times text-info m-t-15 fs-14"></h4>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning m-t-15 fs-14"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-info m-t-15 fs-14"></h4>
                    </td>
                </tr>
                <tr class="bg-transparent">
                    <td class=""></td>
                    <td class="text-center p-b-30 p-t-20" data-title="Regular">
                        <p class="m-t-0 fs-14 semi-bold">
                            Billed monthly
                        </p>
                        <a class="m-t-10 btn btn-rounded btn-complete" href="#">Create a free account</a>
                    </td>
                    <td class="bg-menu text-center p-b-30 p-t-20" data-title="Extended">
                        <p class="m-t-0 fs-14 semi-bold text-white">
                            Billed monthly
                        </p>
                        <a class="m-t-10 btn btn-rounded btn-warning" href="#">Subscribe</a>
                    </td>
                    <td class="text-center p-b-30 p-t-20" data-title="Custom">
                        <p class="m-t-0 fs-14 semi-bold">
                            Billed monthly
                        </p>
                        <a class="m-t-10 btn btn-rounded btn-complete" href="#">Subscribe</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection