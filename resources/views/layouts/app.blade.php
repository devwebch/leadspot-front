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

    <link rel="canonical" href="{{url()->full()}}/" />
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
        "https://twitter.com/leadspotapp"
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
<!-- BEGIN HEADER -->
@section('header')
    @include('layouts.partials.header-transparent')
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
                        <li class="inline no-padding"><a class="hint-text text-master p-r-10 b-r b-grey" href="mailto:support@leadspotapp.com">{{trans('footer.nav.support')}}</a></li>
                        <li class="inline no-padding"><a class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10" href="{{ LaravelLocalization::getLocalizedURL(null, 'terms_and_conditions') }}" title="{{trans('footer.nav.terms')}}">{{trans('footer.nav.terms')}}</a></li>
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
@yield('scripts')
</body>
</html>