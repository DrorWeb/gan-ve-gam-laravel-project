@extends('master')
@section ('css')
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" type="text/css" />
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/essentials.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/header-1.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/color_scheme/green.css') }}" type="text/css" id="color_scheme" />
<link rel='stylesheet' href="{{ asset('css/style.css')}}" type="text/css">
@endsection

@section ('pageTitle')
<section class="page-header page-header-xs margin-top-50">
    <div class="container text-center padding-top-20">
        <h1>{{$title}}</h1>   
    </div>
</section>
<!-- /PAGE HEADER -->
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-6">
                <!-- register form -->
                <form class="nomargin sky-form boxed" action="#" method="post">
                    <header>
                        <i class="fa fa-users"></i> Register
                    </header>
                    {{csrf_field()}}
                    <fieldset class="nomargin">					
                        <div class="row margin-bottom-10">
                            <div class="col-md-6">
                                <label for="firstName" class="input">
                                    <input value="{{Input::old('firstName')}}" type="text" name="firstName" placeholder="First name" autofocus>
                                </label>
                            </div>
                            <div class="col col-md-6">
                                <label class="input" for="lastName">
                                    <input value="{{Input::old('lastName')}}" type="text" name="lastName" placeholder="Last name">
                                </label>
                            </div>
                        </div>
                        <label for="email" class="input margin-bottom-10">
                            <i class="ico-append fa fa-envelope"></i>
                            <input  value="{{Input::old('email')}}" type="text" name="email" placeholder="Email address">
                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                        </label>
                        <label for="password" class="input margin-bottom-10">
                            <i class="ico-append fa fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <label for="password_confirmation" class="input margin-bottom-10">
                            <i class="ico-append fa fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm password">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <div class="margin-top-30">
                            <label class="checkbox nomargin">
                                <input type="checkbox" name="checkbox" ><i></i>I want to receive news and  special offers
                            </label>
                        </div>
                    </fieldset>

                    <div class="row margin-bottom-20">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> REGISTER ME</button>
                        </div>
                    </div>

                </form>
                <!-- /register form -->

            </div>
						<!-- /LOGIN -->

						<!-- SOCIAL LOGIN -->
<!--						<div class="col-md-6 col-sm-6">
							<form action="#" method="post" class="sky-form boxed">

								<header class="size-18 margin-bottom-20">
									Register using your favourite social network
								</header>
								
								<fieldset class="nomargin">

									<div class="row">
									
										<div class="col-md-8 col-md-offset-2">

											<a class="btn btn-block btn-social btn-facebook margin-bottom-10">
												<i class="fa fa-facebook"></i> Sign up with Facebook
											</a>

											<a class="btn btn-block btn-social btn-twitter margin-bottom-10">
												<i class="fa fa-twitter"></i> Sign up with Twitter
											</a>

											<a class="btn btn-block btn-social btn-google margin-bottom-10">
												<i class="fa fa-google-plus"></i> Sign up with Google
											</a>
									
										</div>
									</div>

								</fieldset>

								<footer>
									Already have an account? <a href="{{url('user/login')}}"><strong>Back to login!</strong></a>
								</footer>

							</form>

						</div>-->
						<!-- /SOCIAL LOGIN -->
        </div>
    </div>
</section>	
@endsection


@section ('scripts')

<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>

@endsection
