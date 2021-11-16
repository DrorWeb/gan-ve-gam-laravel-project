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
        <!-- CART -->
        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-9 col-sm-8">

                <!-- CART -->
                <form class="cartContent clearfix" method="post" action="#">

                    <!-- cart content -->
                    <div id="cartContent">
                        <!-- cart header -->
                        <div class="item head clearfix">
                            <span class="cart_img"></span>
                            <span class="product_name bold size-19 ">YOUR ITEMS</span>
                            <span class="remove_item size-13 bold"></span>
                            <span class="total_price size-13 bold">TOTAL</span>
                            <span class="qty size-13 bold">QUANTITY</span>
                        </div>
                        <!-- /cart header -->
                        @if($cart)
                        @foreach ($cart as $item)
                        <!-- cart item -->
                        <div class="item">
                            <div class="cart_img pull-left width-100 padding-10 text-left"><img src="assets/images/demo/shop/products/100x100/p1.jpg" alt="" width="80" /></div>
                            <a href="shop-single-left.html" class="product_name">
                                <span>{{$item['name']}}</span>
                                <!--small>{{$item['name']}}</small-->
                            </a>
                            <a href="#" class="remove_item"><i class="fa fa-times"></i></a>
                            <div class="total_price">$<span>{{$item['quantity'] * $item['price']}}</span></div>
                            <div class="qty"><input type="number" value="{{$item['quantity']}}" name="qty" maxlength="3" max="999" min="1" /> &times; ${{$item['price']}}</div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                        <!-- /cart item -->
                        @else
                        <div class="item">
                            
                            <a href="shop-single-left.html" class="product_name">
                                <h3 style='color:red; text-align: center'>There Are No Items In Your Cart</h3>
                                
                            </a>
                            <a href="#" class="remove_item"><i class="fa fa-times"></i></a>
                            <div class="total_price">$<span>0</span></div>
                            <div class="qty"><input type="number" value="0" name="qty" maxlength="3" max="999" min="0" /> </div>
                            <div class="clearfix"></div>
                        </div>
                        @endif
                        
                        


                        <!-- update cart -->
                        <button class="btn btn-success margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-ok"></i> UPDATE CART</button>
                        <button class="btn btn-danger margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-remove"></i> CLEAR CART</button>
                        <!-- /update cart -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- /cart content -->

                </form>
                <!-- /CART -->

            </div>


            <!-- RIGHT -->
            <div class="col-lg-3 col-sm-4">

                <!-- TOGGLE -->
                <div class="toggle-transparent toggle-bordered-full clearfix">

                    <div class="toggle nomargin-top">
                        <label>Voucher</label>

                        <div class="toggle-content">
                            <p>Enter your discount coupon code.</p>

                            <form action="#" method="post" class="nomargin">
                                <input type="text" id="cart-code" name="cart-code" class="form-control text-center margin-bottom-10" placeholder="Voucher Code" required="required">
                                <button class="btn btn-primary btn-block" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Shipping tax calculator</label>

                        <div class="toggle-content">
                            <p>To get a shipping estimate, please enter your destination.</p>

                            <form action="#" method="post" class="nomargin">
                                <label>Country*</label>
                                <select id="cart-tax-country" name="cart-tax-country" class="form-control pointer margin-bottom-20">
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="2">...........</option>
                                    <!-- add all here -->
                                </select>

                                <label>State/Province</label>
                                <select id="cart-tax-state" name="cart-tax-state" class="form-control pointer margin-bottom-20">
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                    <option value="2">...........</option>
                                    <!-- add all here -->
                                </select>

                                <label>Zip/Postal Code</label>
                                <input type="text" id="cart-tax-postal" name="cart-tax-postal" class="form-control margin-bottom-20">

                                <button class="btn btn-primary btn-block" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /TOGGLE -->

                <div class="toggle-transparent toggle-bordered-full clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">

                            <span class="clearfix">
                                <span class="pull-right">$120.75</span>
                                <strong class="pull-left">Subtotal:</strong>
                            </span>
                            <span class="clearfix">
                                <span class="pull-right">$0.00</span>
                                <span class="pull-left">Discount:</span>
                            </span>
                            <span class="clearfix">
                                <span class="pull-right">$0.00</span>
                                <span class="pull-left">Shipping:</span>
                            </span>

                            <hr />

                            <span class="clearfix">
                                <span class="pull-right size-20">$120.75</span>
                                <strong class="pull-left">TOTAL:</strong>
                            </span>

                            <hr />

                            <a href="shop-checkout.html" class="btn btn-primary btn-lg btn-block size-15"><i class="fa fa-mail-forward"></i> Proceed to Checkout</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /CART -->
    </div>
</section>
			<!-- /CART -->
@endsection




@section ('scripts')
<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = {{ asset('lib/Theme/assets/plugins/')}}</script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>
		
		<!-- STYLESWITCHER - REMOVE 
		<script async type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/styleswitcher/styleswitcher.js')}}"></script>
                -->
		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.revolution_slider.js')}}"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>
@endsection