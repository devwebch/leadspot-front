<div class="container relative">
    <!-- BEGIN LEFT CONTENT -->
    <div class="pull-left">
        <!-- .header-inner Allows to vertically Align elements to the Center-->
        <div class="header-inner">
            <!-- BEGIN LOGO -->
            <h1 class="sr-only">LeadSpot</h1>
            <a href="/" title="LeadSpot">
                <img src="{{asset('images/logo-leadspot-negative.png')}}" width="152" data-src-retina="{{asset('images/logo-leadspot-negative.png')}}" alt="LeadSpot">
            </a>
        </div>
    </div>
    <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
    <div class="pull-right">
        <div class="header-inner">
            <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
        </div>
    </div>
    <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
    <!-- BEGIN RIGHT CONTENT -->
    <div class="pull-right menu-content clearfix" data-pages="menu-content" data-pages-direction="slideRight" id="header">
        <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
        <div class="pull-right">
            <a href="#" class="text-black link padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
                <i class=" pg-close_line"></i>
            </a>
        </div>
        <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
        <!-- BEGIN MENU ITEMS -->
        <div class="header-inner">
            <ul class="menu">
                <li>
                    <a href="/" data-text="Home" class="<?php echo (Route::current()->uri() == '/') ? 'active' : ''; ?>" title="{{trans('nav.home')}}">{{trans('nav.home')}}</a>
                </li>
                <li>
                    <a href="/pricing" data-text="Pricing" class="<?php echo (Route::current()->uri() == 'pricing') ? 'active' : ''; ?>" title="{{trans('nav.pricing')}}">{{trans('nav.pricing')}}</a>
                </li>
                <li>
                    <a href="/contact" data-text="Contact" class="<?php echo (Route::current()->uri() == 'contact') ? 'active' : ''; ?>" title="{{trans('nav.contact')}}">{{trans('nav.contact')}}</a>
                </li>
                <li>
                    <a class="btn btn-bordered fs-12 btn-white hidden-sm hidden-xs" href="https://go.leadspotapp.com" data-text="{{trans('nav.contact')}}" title="{{trans('nav.contact')}}">{{trans('nav.dashboard')}}</a>
                    <a class="btn btn-bordered fs-12 btn-black font-montserrat fs-12 all-caps pull-bottom visible-sm visible-xs buy-now sm-static sm-m-l-20 sm-m-r-20 m-t-10" href="https://go.leadspotapp.com" title="{{trans('nav.contact')}}">{{trans('nav.dashboard')}}</a>
                </li>
            </ul>
        </div>
        <!-- END MENU ITEMS -->
    </div>
</div>