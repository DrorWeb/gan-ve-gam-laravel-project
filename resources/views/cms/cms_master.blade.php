<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<html>
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = ""; </script>
        <meta name="keywords" content="" />
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
        <link href="{{ asset('admincss/adminStyles.css') }}" rel="stylesheet" type="text/css" />
        <link rel='stylesheet' href="{{ asset('css/layout-datatables.css') }}" type="text/css">
        <link rel='stylesheet' href="{{ asset('css/layout-jqgrid.css') }}" type="text/css">    
<!--    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>        -->
        @yield('cmsCss')
    </head>

    <body class="smoothscroll enable-animation menu-vertical" style="dir:rtl">
        <div id="wrapper">
            <!--Navigation Bar - MENU  - -->
            @include('cms.cms_navbar')
            <!--  Page Title  -->           
            @yield('pageTitle')           
            <!--  Flash Message Module  -->
            <div class="nopadding nomargin">
                @include('inc.sm')
                @include('inc.confLarge')
                @include('inc.confSmall')
                @include('inc.errorLarge')
                @include('inc.errorSmall')
                @include('inc.errors')
            </div>
            <!--  Middle Content  -->  
            <div class="container-fluid">
                @yield('cms_content')
            </div>
            
        </div>
        
        <script type="text/javascript">var plugin_path = '{{asset('plugins')}}/';</script>
<script type="text/javascript" src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/myScripts.js')}}"></script>

<script type="text/javascript" src="{{asset('adminjs/jquery.fonticonpicker.min.js')}}"></script>
        @yield('cmsScripts')
        
    </body>
</html>