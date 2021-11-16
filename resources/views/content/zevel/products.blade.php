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
@endsection

@section ('pageTitle')
<section class="page-header page-header-xs margin-top-50">
    <div class="container text-center padding-top-20">
        <h1>{{$title}}</h1>
        <!-- breadcrumbs -->
        <ol class="breadcrumb margin-top-20">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('shop')}}">Shop</a></li>
            <li class="active">{{$cat_url}}</li>
        </ol><!-- /breadcrumbs -->
    </div>
</section>
<!-- /PAGE HEADER -->
@endsection

@section('content')
<div class="text-center"><br>
 <a class="btn btn-foursquare" href="{{ url('shop/' . $cat_url . '/asc') }}">Price: Low to High</a>  
 <a class="btn btn-dirtygreen" href="{{ url('shop/' . $cat_url . '/desc') }}">Price: Hign to Low</a>
 </div>
  
@if($products)
<section>
    <div class="container">
    <ul class="shop-item-list row list-inline nomargin">
@foreach($products as $product)
<!-- ITEM -->
<li class="col-lg-4 col-sm-4">
    <div class="shop-item">
        <div class="thumbnail">
            <!-- product image(s) -->
            <a class="shop-item-image" href="{{url('shop/' . $cat_url . '/' . $product['url'])}}">
                <img class="img-responsive" src="{{asset('images/products/' .  $cat_url . '/' . $product['image'])}}" alt="{{$product['alt']}}"/>
            </a>
            <!-- /product image(s) -->

            <!-- product more info -->
            <div class="shop-item-info">
                @if( $product['new'])
                <span class="label label-success">NEW</span>
                @endif
                @if($product['sale']>0)
                <span class="label label-danger">SALE</span>
                @endif
            </div>
        </div>
            <!-- product summary -->
        <div class="shop-item-summary text-center">
            <h3>{{$product['title']}}</h3>
            <h4>{{$product['subtitle']}}</h4>
            <!--FIX--> <!-- rating -->
            <div class="shop-item-rating-line">
                <div class="rating rating-{{$product['rating']}} size-13" style="color:green;"><!-- rating-0 ... rating-5 --></div>
            </div>
            <!-- price -->
            <div class="shop-item-price">            
                @if( $product['sale']>0 && $product['discountPrice']>0)
                <span class="line-through" style="color:red;">${{$product['price']}}</span>
                ${{$product['discountPrice']}}
                @else
                ${{$product['price']}}
                @endif      
            </div> 
        </div>
        <!-- buttons -->
        <div class="shop-item-buttons text-center">            
            <a href="{{url('shop/' . $cat_url . '/' . $product['url'])}}" class="btn btn-info">View Product</a>
            <input @if(Cart::get($product['id'])) disabled="disabled" @endif type="button" data-id="{{ $product['id'] }}" class="add-to-cart btn btn-success" value="Add to Cart">        
        </div>
    </div>

</li>
<!-- /ITEM -->
@endforeach
    </ul>
    </div>
  </div>
</section>


@else
<div class="row">
    <div class="container margin-bottom-30 margin-top-30">
        <div class="col-md-12">           
            <br>   <h4><i>No products to display in this Category</i></h4>  <br>
            <a class="btn btn-info" href="{{url('shop')}}"> Back to Categories Page </a>
        </div>
    </div>
</div>
@endif


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
     