@extends('master')
@section ('css')

<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/essentials.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/header-1.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-shop.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/color_scheme/green.css') }}" type="text/css" id="color_scheme" />
<link rel='stylesheet' href="{{ asset('css/style.css')}}" type="text/css">
@endsection


@section('themeHeader')
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
@endsection
@section ('content')
<section>
    @if($cart)<br><br>
    <div class="row">
        
        <div class="col-md-8 col-xs-6" style="margin-left: 20%">
            <table class="table" >
                <th>PRODUCT</th>
                <th>QUANTITY</th>
                <th class="text-center">PRICE</th>
                <th class="text-center">SUB TOTAL</th>

                @foreach ($cart as $item)            
                <!-- cart items -->
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>
                        <input type="button" value="-" class="update-cart" data-op="minus" data-id="{{$item['id']}}"/>
                        <input class="text-center" type="text" size="1" value="{{$item['quantity']}}"/>
                        <input type="button" value="+" class="update-cart" data-op="plus" data-id="{{$item['id']}}"/>
                    </td>
                    <td class="text-center">${{$item['price']}}</td>
                    <td class="text-center">${{$item['quantity'] * $item['price']}}</td>
                </tr>              
        </div>
        @endforeach
        <tr>
            <td></td><td></td>
            <td style="font-size: 1.2em"  class="text-center"><b>TOTAL: </b></td>
            <td style="font-size: 1.2em;" class="text-center"><b>${{Cart::getTotal()}}</b></td>


        </tr> 
        </table>
        <!-- update cart -->
        <a href="{{url('shop/order')}}" class="btn btn-success margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-ok"></i>PLACE ORDER</a>
        <a href="{{url('shop/clear-cart')}}" class="btn btn-danger margin-top-20 margin-right-10 pull-left"><i class="glyphicon glyphicon-remove"></i> CLEAR CART</a>
        <!-- /update cart -->



        <!-- /cart items -->     
    </div> 
</div>

<!-- /CART -->
@else
<div class="panel panel-default">
    <div class="panel-body text-center" style="margin-left: 2%">
        <span style="font-size:3em"><strong>Your shopping cart is empty!</strong></span><br />
        <a href="{{url('shop')}}" class="btn btn-success margin-top-20 margin-right-10 ">KEEP SHOPPING</a>  
    </div>
</div>

@endif
</div>
</section>
			<!-- /CART -->
@endsection




@section ('scripts')
<!-- JAVASCRIPT FILES -->
		
		
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>
		
		
		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.revolution_slider.js')}}"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>
@endsection