<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = ""; </script>
        <meta name="keywords" content="{{$keywords}}" />
        <meta name="description" content="" />
        <meta name="Author" content="Dror Ashkenazi" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Alef:400,700%7CAmatica+SC:400,700%7CVarela+Round&amp;subset=hebrew" rel="stylesheet">

        <!-- CORE CSS -->
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- SWIPER SLIDER -->
        <link href="{{ asset('plugins/slider.swiper/dist/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        
        <!-- THEME CSS -->
        <link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap/RTL/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap/RTL/bootstrap-flipped.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/layout-RTL.css') }}" rel="stylesheet" type="text/css" />
        <!-- PAGE LEVEL SCRIPTS -->
        <link href="{{ asset('css/header-5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/color_scheme/yellow.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
        <link href="{{ asset('css/myStyles.css') }}" rel="stylesheet" type="text/css" />

        
        
       @yield('css')
       @yield('headderCode')
    </head>
    
<body class="smoothscroll enable-animation">
    
     <div id="wrapper">   
         <div id="header" class="sticky clearfix transparent">

             
<!-- ============================= Color Bars  =================================
=============================================================================-->
<div class="container-fluid color-bar top-fixed clearfix">
    <div class="row">
        <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
                <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
    </div>
</div>
<!-- ============================= Color Bars  =================================
=============================================================================-->             


<!--  NAVBAR   --> 
@include('inc.navbar')
</div>

@yield('slider')

<!--  Flash Message Module  -->
        <div class="nopadding nomargin">
            @include('inc.thankYouLarge')
            @include('inc.confLarge')
            @include('inc.confSmall')
            @include('inc.errorLarge')
            @include('inc.sm')
            @include('inc.errors')
            @include('inc.adminMust')
            @include('inc.parentsOnly')
        </div>
        <!--  /Flash Message Module  --> 
@yield('content')
@yield('modal')      
<a href="#" id="toTop"></a>
     </div>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div>
    <!-- /PRELOADER -->


<!--============================================================================
=============================== SCRIPTS ===================================-->

<script type="text/javascript">var plugin_path = '{{asset('plugins')}}/';</script>
<script type="text/javascript" src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
<!-- SWIPER SLIDER -->
<script type="text/javascript" src="{{asset('plugins/slider.swiper/dist/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/view/demo.swiper_slider.js')}}"></script>  
@yield('scripts')
</body> 
</html>