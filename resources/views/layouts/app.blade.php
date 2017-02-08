<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>
        @if(View::hasSection('title'))
            @yield('title') - LeadSpot
        @else
            LeadSpot - {{trans('app.metas.title')}}
        @endif
    </title>

    <!-- Android navbar color -->
    <meta name="theme-color" content="#b94a67">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#b94a67">
    <!-- IOS -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#b94a67">


    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <link rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" />
    @endforeach

    <meta content="LeadSpot" name="author" />
    <link rel="publisher" href="https://plus.google.com/+leadspotapp"/>

    <meta name="robots" content="noodp"/>
    <link rel="apple-touch-icon" href="{{asset('images/icn_152x152.png')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('images/icn_152x152.png')}}" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta content="@yield('description')" name="description" />

    <meta property="og:locale" content="{{App::getLocale()}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="LeadSpot"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:url" content="{{url()->full()}}"/>
    <meta property="og:site_name" content="LeadSpot"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:title" content="LeadSpot - {{trans('app.metas.title')}}"/>
    <meta name="twitter:site" content="@leadspotapp"/>

    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "LeadSpot",
      "url": "https://leadspotapp.com",
      "sameAs": [
        "https://plus.google.com/+leadspotapp",
        "https://twitter.com/leadspotapp",
        "https://www.facebook.com/leadspotapp"
      ]
    }
    </script>

    @yield('styles')
</head>
<body class="pace-complete @yield('body-class')">
@if( App::environment('production') )
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('set', 'anonymizeIp', true);
    ga('create', 'UA-10894705-3', 'auto');
    ga('send', 'pageview');

</script>
@endif

<?php $uri = Route::current()->uri(); ?>
@if( $uri == '/' || $uri == 'en' || $uri == 'fr')
<div class="p-b-10 p-t-10 bg-danger-dark text-center text-white" style="margin-top: 88px;">
    <a href="https://go.leadspotapp.com/register" class="text-white" onclick="ga('send', 'event', 'Registration', 'click', 'Offer TRYOUT')">{!! trans('app.promo.tryout') !!}</a>
</div>
@endif
<!-- BEGIN HEADER -->
@section('header')
    @include('layouts.partials.header-solid')
@show
<!-- END HEADER -->
@yield('content')
<!-- START FOOTER -->
<section class="p-b-30 p-t-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img alt="LeadSpot" title="LeadSpot" class="logo inline m-r-50" src="{{asset('images/logo-leadspot.png')}}" width="100">
                <div class="m-t-10 ">
                    <ul class="no-style fs-11 no-padding font-arial">
                        <li class="inline no-padding"><a class="hint-text text-master p-r-10" href="mailto:support@leadspotapp.com" title="{{trans('footer.nav.support')}}">{{trans('footer.nav.support')}}</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 b-l b-grey" href="{{ LaravelLocalization::getLocalizedURL(null, 'terms-and-conditions') }}" title="{{trans('footer.nav.terms')}}">{{trans('footer.nav.terms')}}</a></li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if( LaravelLocalization::getCurrentLocale() != $localeCode )
                                <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 b-l b-grey" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}" title="{{$properties['native']}}">{{$properties['native']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right font-arial sm-text-left">
                <p class="fs-11 m-t-30 muted">Copyright &copy; {{date('Y')}} LeadSpot. {{trans('footer.copyright')}}</p>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-3.1.1.min.js')}}" async defer><\/script>')</script>

<script type="text/javascript" src="{{asset('js/pace.min.js')}}" async defer></script>
<script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}" async defer></script>
<script type="text/javascript" src="{{asset('js/all.js')}}" async defer></script>
<script type="text/javascript" src="{{asset('js/app.js')}}" async defer></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/58596267ddb8373fd2b151a0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@yield('scripts')
</body>
</html>