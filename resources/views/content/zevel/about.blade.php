@extends('master')
@section ('css')
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/essentials.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/header-1.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/color_scheme/green.css') }}" type="text/css" id="color_scheme" />
@endsection

@section ('topAbout')
<!-- PARALLAX IMAGE - WITH ABOUT US TEXT-->
<section class="no-transition height-800 parallax parallax-5 text-center" style="background-image:url('images/site/aboutParallex.jpg');">
    <div class="overlay dark-5 ">   </div>
        <div class="display-table">
            <div class="display-table-cell vertical-align-middle ">
                <div class="container ">
                    <h1 class="nomargin size-50 weight-300 wow fadeInDown">
                        <span style="color:red; font-size: 2em; font-weight: bold;">X-STORE</span> <br> You Dream, We Deliever</h1>
                    <p class="col-md-6"></p>
                    <div class="col-md-6 size-15  wow fadeInRight" data-wow-delay="0.2s" style="margin-top:30px;">
                        @if($contents)
                        {!!$contents[0]['article']!!}
                        @endif
                    
                    <blockquote>
                        <p class="text-left">" If you can dream it, you can do it. "</p>
                        <cite class="text-left">Walt Disney</cite>
                    </blockquote></div>
                    <p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.4s">Over <span class="countTo" data-speed="4000">1428</span><br><span class="theme-color weight-400 font-style-italic"> Happy Costumers! </span></p>
                </div>
            </div>
        </div>    
</section>

<!-- CLIENTS SAY...???     -->
<section class="padding-xs"  style="background-color: #23233a">
    <div class="container" >

        <div class="text-center margin-bottom-10">
            <h3 style="color: #fff;"  class="size-25 wow fadeInLeftBig text-center" data-wow-delay="0.2s">OUR CLIENTS SAY...</h3>
        </div>

        <hr class="margin-bottom-60" />
        @if($messages)
        <div class="row"  style="color: #fff;">
            @foreach($messages as $message)
            <div class="col-md-4 wow fadeInRight">
                <div class="testimonial testimonial-bordered padding-15">
                    <figure class="pull-left">
                        <img class="rounded" style="width:100px; height:100px;" src="{{ asset('images/picsFromClients/' . $message->image)}}" alt="userPic" />
                    </figure>
                    <div class="testimonial-content" style="overflow:hidden; height:230px;" >
                        <cite>
                           {{$message->name}}
                            <span style="color: #fff;">{{$message->company}}</span>
                        </cite><br>
                        <p>{{$message->message}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach    
        </div>
        @endif
    </div>
</section>
<!-- /CLIENTS SAY -- topAbout -->
@endsection

@section ('content')
<!---------------------   About Page - Services    ---------------------------->
<section>
    <div class="container bg-grey  text-center">
        <div class="row wow bounceIn"data-wow-delay="0.4s">
            <p></p>
            @if($services)
            @foreach($services as $row) 
            <div class="col-md-3 col-xs-6">
                <div class="text-center">
                    <i class="ico-light ico-lg ico-rounded ico-hover {{$row['image']}}"></i>
                    <h4>{{$row['title']}}</h4>
                    <p> {!!$row['article']!!}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
<!-- PARALLAX  OUR STAFF  -->


@section ('staff')
    @if($employee)
        <section class=" height-1500 parallax parallax-5 " style="background-image: url('{{asset('images/Site/banner-902587_1920.jpg')}}');">
            <div class="overlay dark-5"></div>
            <div class="container">
                <h3 style="color: #fff;" class="size-25 wow fadeInRightBig text-center" data-wow-delay="0.2s">OUR DREAM TEAM</h3>
                <div class="row animation-visible wow fadeInLeftBig">
                    <!--employee card--> 
                    @foreach($employee as $employee)
                    <div class="col-md-3 col-sm-6  animation-visible wow fadeInLeftBig margin-top-30"  data-wow-delay="0.{{$employee->id}}{{$employee->id}}s">
                        <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center" style="min-height: 490px;">
                            <div class="front">
                                <div class="box1 box-default" style="min-height: 490px;">
                                    <span class="box-icon-title" >
                                        <img class="img-responsive" src="images/employees 460X700/{{$employee->image}}" alt="{{$employee->alt}}" />
                                        <h2>{{$employee->name}}</h2>
                                        <span style="color:red; text-size:1.2em">{{ $employee->jobDescription }}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="box2 box-default" style="min-height: 490px;">
                                    <h4 class="nomargin">{{$employee->name}}</h4>
                                    <small>{{ $employee->tagline }}</small>
                                    <hr />
                                    <p>{{ $employee->text }}</p>
                                    <hr />
                                    <a href="{{ $employee->facebook }}" class="social-icon social-icon-sm social-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="{{ $employee->twitter }}" class="social-icon social-icon-sm social-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="{{ $employee->linkedin }}" class="social-icon social-icon-sm social-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/employee card--> 
                    @endforeach
                </div>
            </div>
        </section>
    <!-- /PARALLAX OUR STAFF-->
    @endif
@endsection


@section ('scripts')		
<!-- PAGE LEVEL SCRIPTS -->
<!--<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>-->
@endsection