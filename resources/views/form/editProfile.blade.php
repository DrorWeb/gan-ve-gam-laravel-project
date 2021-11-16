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
            @if( Session::has('is_admin') )
            <div class="col-md-3"></div>
            @endif
            <div class="col-md-6">
                <div class="box-static box-border-top padding-30">
                    <form class="nomargin" action="{{url('users/'.$user['id'])}}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="user_id" value="{{$user['id']}}">
                        <div class="clearfix">
                          
                            {{csrf_field()}}
                            <!-- First Name -->
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input value="{{$user['firstName']}}" type="text" name="firstName" class="form-control" placeholder="">
                            </div>
                             @if( !Session::has('is_admin') )
                            <!-- Last Name -->
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input value="{{$user['lastName']}}" type="text" name="lastName" class="form-control" placeholder="">
                            </div>
                            @endif
                            <!-- email -->
                            <div class="form-group">
                                <label for="email">E-Mail</label>                               
                                <input value="{{$user['email']}}" type="text" name="email" class="form-control" placeholder="">
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Please Re-Type Your Password or Create A New One">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left pull-left">
                                    <a class="btn btn-default" href="#" onclick="history.back();">Oh No! Cancel This</a>  
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right pull-right">
                                     <input type="submit" name="submit" class="btn btn-primary" value="Yes, Update My Profile">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            @if(!Session::has('is_admin'))
            <div class="col-md-6">
                <div class="box-static box-border-top padding-30  height-200">
                    <div class="col-md-12 text-center">
                        <a  title="Delete" style="text-align: center; font-size:2em"> Delete Profile Permanently ?</a><br><br> 
                        <a href="{{url('users/'.$user['id'])}}" class="btn btn-danger"style="width: 80% "> DELETE </a> 
                    </div>
                   
                </div>
            </div> 
            @endif
        </div>
</section>		
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
