@extends('layouts.app')

@section('body-class', 'p-t-100')

@section('title', 'Pricing')

@section('header')
    @include('layouts.partials.header-solid')
@endsection

@section('content')
    <!-- BEGIN PRICING SECTION -->
    <section class="p-t-40 p-b-75 sm-p-t-30">
        <div class="container">
            <h1 class="text-center m-b-5">
                Plans fitted to your needs
            </h1>
            <h3 class="text-center m-t-5">
                Start safely with a <strong class="font-montserrat all-caps">free</strong> account.
            </h3>

            <h4 class="text-center m-t-40">Paid plans are coming soon,<br>free plans are (and will always be) opened to everyone.</h4>
            
            <p class="text-center m-t-30"><a href="https://go.leadspotapp.com" class="btn btn-complete btn-lg">Start now!</a></p>
        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection