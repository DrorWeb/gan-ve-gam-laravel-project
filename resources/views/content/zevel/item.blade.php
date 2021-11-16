@extends('master')
@section ('css')
<link rel='stylesheet' href="{{ asset('lib/bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('css/style.css')}}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/essentials.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/header-1.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-datatables.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-jqgrid.css') }}" type="text/css">    
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-shop.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/plugin-hover-buttons.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/color_scheme/green.css') }}" type="text/css" id="color_scheme" />
<link rel="stylesheet" href="{{ asset('lib/Theme/assets/plugins/slider.revolution/css/extralayers.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ asset('lib/Theme/assets/plugins/slider.revolution/css/settings.css')}}" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css')}}"> 
@endsection


@section('themeHeader')

<script type="text/javascript" src="{{ asset('lib/html5gallery/html5gallery.js')}}"></script>
@endsection


@section ('pageTitle')
<section class="page-header page-header-xs margin-top-50">
    <div class="container text-center padding-top-20">

        <h1>{{$title}}</h1>

        <!-- breadcrumbs -->
        <ol class="breadcrumb margin-top-10">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('shop')}}">Categories</a></li>
            <li class="active">{{$title}}</li>
        </ol><!-- /breadcrumbs -->

    </div>
</section>
<!-- /PAGE HEADER -->
@endsection
@section('content')
<section>

    @if($item)
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"  style="background-color: #fff; padding-left:3%;">    
                <!----------ITEM  IMAGE ------------>

                @if($item['image']) 
                <div class="col-lg-12 col-sm-12">
                    <div class="thumbnail relative margin-bottom-3">
                        <img class="img-responsive" src="{{asset('images/products/'. $imageFolder .'/' . $item['image'] )}}" width="1200" height="1500" alt="{{$item['alt']}}" />
                    </div>
                </div>
                @else
                <div class="col-lg-12 col-sm-12">
                    <div class="thumbnail relative margin-bottom-3">
                        <img src="{{asset('images/fix path.jpg')}}" alt="placeholder"> 
                        <!--change to ooops....  something went wrong  -->
                    </div>
                </div>
                @endif 

                <br>  
                <!----------/ITEM IMAGE ------------>  

                <!----------SHOP BUTTONS ------------>  
                <div class="shop-item-buttons text-center col-md-12">                   
                    <button class="btn btn-hover hvr-bounce-out btn-red" style="width:25%;" onclick="history.go(-1);">Go Back</button>
                    <input @if(Cart::get($item['id'])) disabled="disabled" @endif type="button" data-id="{{ $item['id'] }}" class="add-to-cart btn btn-hover hvr-bounce-out btn-green" style="width:25%;" value="Add To Cart">

                </div>

                <!----------/SHOP BUTTONS ------------>
            </div>





            <!---------- ITEM INFO  ------------>

            <div class="col-md-6 text-left nomargin nopadding grain-blue"  style="background-color: #F5F5F5; padding:3%;">
            <!---------- ITEM TITLE  ------------>    
                <h1 class="size-28 bold text-center" >{{$item['title']}}</h1>
            <!---------- ITEM PRICE  ------------>
                <div class="col-md-2 text-left">
                    <p><span class="size-20 bold">PRICE : </span>
                </div>   
                <div class="col-md-10">    
                    @if($item['sale']>0)
                     <div class="col-md-4 text-left">   
                        <span class="line-through size-20 font-raleway" style="color:red;">{{$item['price']}}$</span>
                    </div> 
                    <div class="col-md-6 text-left">     
                        <span class="size-20 font-raleway bold" style="color:green;">{{$item['discountPrice']}}$</span>
                    </div>
                      
                   
                @else
                <div class="col-md-12 text-left">     
                    <span class="size-20 font-raleway bold" style="color:green;">{{$item['price']}}$</span>
                </div>
                </div>
                <!--                    <h4 class="size-30" style="color:green; margin-top:-5px; ">$ {{$item['price']}}</h4>-->
                @endif
                <div class="col-md-12">
                    <p class="size-11"> Disclaimer </p>
                </div>
            </div>

            <!---------- / INFO  ------------>
        </div>
    </div>       

    @else
    <div class="container-fluid">
        <div class="row">
            <div class="container margin-bottom-30 margin-top-30">
                <div class="col-md-12">           
                    <br>   <h4><i>no such product</i></h4>  <br>
                    <a class="btn btn-info" href="{{url('shop')}}"> Back to Categories Page </a>
                </div>
            </div>
        </div>
    </div>     
    @endif 
</section>        
@endsection


@section ('scripts')

<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "lib/Theme/assets/plugins/"</script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.revolution_slider.js')}}"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>


@endsection







<!-- <a href="{{url('shop/checkout')}}" class="btn btn-default">Go To    Checkout</a>-->

