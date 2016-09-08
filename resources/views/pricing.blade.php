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
                            <p class="block-title text-white fs-14 no-margin">
                                Regular
                            </p>
                        </div>
                        <p class="font-montserrat m-t-20 m-b-0 lh-large">
                            27 <sup class="fs-14 dollar">USD</sup>
                        </p>
                        <p class="block-title text-complete fs-12 m-t-0">
                            per agent / mo
                        </p>
                    </th>
                    <th class="text-center bg-menu v-align-top no-padding" style="width: 22%;">
                        <p class="block-title text-white fs-14 text-warning">
                            Extended
                        </p>
                        <p class="font-montserrat no-margin text-white m-t-20 m-b-0 lh-large">
                            1000 <sup class="fs-14 dollar">USD</sup>
                        </p>
                        <p class="block-title fs-12 text-white m-t-0">
                            per agent / mo
                        </p>
                    </th>
                    <th class="text-center v-align-top no-padding bg-master-lightest" style="width: 22%;">
                        <div class="bg-menu-dark">
                            <p class="block-title text-white fs-14 no-margin">
                                Regular
                            </p>
                        </div>
                        <p class="font-montserrat m-t-20 m-b-0 lh-large">
                            XXX <sup class="fs-14 dollar">USD</sup>
                        </p>
                        <p class="block-title text-complete fs-12 m-t-0">
                            per agent / mo
                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            Number of end products
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <p class="block-title text-complete fs-14">
                            1
                        </p>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <p class="block-title text-white fs-14">
                            1
                        </p>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr class="bg-master-lightest">
                    <td class="v-align-middle">
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            Use in a single end product
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr>
                    <td class="v-align-middle">
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            Use in a free end product
                        </p>
                        <p class="hint-text p-l-10 small m-t-5">
                            (more than one end user allowed)
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr class="bg-master-lightest">
                    <td class="v-align-middle">
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            Use in an end product that's sold
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        <p class=" no-margin fs-14 semi-bold sm-text-right sm-p-r-10">
                            One license per each
                            <br> customized end product
                        </p>
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr>
                    <td class="v-align-middle">
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            On-demand products/services
                        </p>
                        <p class="hint-text small p-l-10 m-t-5">
                            (e.g. "made to order" or "create your own" apps and sites)
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        &nbsp;
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr class="bg-master-lightest">
                    <td class="v-align-middle">
                        <p class=" no-margin p-l-10 fs-14 semi-bold">
                            Use in stock items/templates
                        </p>
                        <p class="hint-text small m-t-5 p-l-10">
                            (See FAQ for more details)
                        </p>
                    </td>
                    <td class="text-center" data-title="Regular">
                        &nbsp;
                    </td>
                    <td class="bg-menu text-center" data-title="Extended">
                        <h4 class="fa fa-check text-warning fs-14" style="font-style: italic"></h4>
                    </td>
                    <td class="text-center" data-title="Custom">
                        <h4 class="fa fa-check text-complete fs-14" style="font-style: italic"></h4>
                    </td>
                </tr>
                <tr class="bg-transparent">
                    <td class=""></td>
                    <td class="text-center p-b-30 p-t-30" data-title="Regular">
                        <p class="m-t-0 fs-14 semi-bold">
                            Billed annually or
                            <br> $27 month-to-month
                        </p><a class="m-t-10 btn btn-rounded btn-complete" href="#">Subscribe</a>
                    </td>
                    <td class="bg-menu text-center p-b-30 p-t-30" data-title="Extended">
                        <p class="m-t-0 fs-14 semi-bold text-white">
                            Billed annually or
                            <br> $1000 month-to-month
                        </p><a class="m-t-10 btn btn-rounded btn-warning" href="#">Subscribe</a>
                    </td>
                    <td class="text-center p-b-30 p-t-30" data-title="Custom">
                        <p class="m-t-0 fs-14 semi-bold">
                            Billed annually or
                            <br> $xxx month-to-month
                        </p><a class="m-t-10 btn btn-rounded btn-complete" href="#">Subscribe</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection