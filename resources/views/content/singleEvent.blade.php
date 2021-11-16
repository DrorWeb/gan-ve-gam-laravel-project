@extends('master')
@section ('222slider')
<section id="slider" class="height-200" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/backgrounds/default.jpg')}}'); background-repeat: repeat;" ></div>
</section>
@endsection


@section ('content')
<section style="background-image: url('{{asset('images/backgrounds/default.jpg')}}'); background-repeat: repeat; padding-top: 150px;">
    @if($event)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                <div class="blog-post-item" style="background-color: #FFF; padding: 24px; border-radius: 8px;">
                    <div class="row hidden-xs hidden-sm">
                    <figure class="margin-bottom-20 col-md-4">
                        <img class="img-responsive" style="width:100%; border-top-right-radius: 8px;" src="{{asset('images/events/240X240/' . $event['image'])}}" alt="{{$event['image_alt']}}">
                    </figure>
                    <p class="col-md-8" style="padding-left: 110px;">{!!$event['details']!!}</p>
                    </div>
                    <div class="row hidden-md hidden-lg">
                    <figure class="margin-bottom-20 col-md-4">
                        <img class="img-responsive" style="width:100%; border-top-left-radius: 8px; border-top-right-radius: 8px;" src="{{asset('images/events/240X240/' . $event['image'])}}" alt="{{$event['image_alt']}}">
                    </figure>
                    </div>
                    <div class="row">
                        <div class="col-lg-11">
                    <h2 class="color-4">{{$event['title']}}</h2>
                    <ul class="blog-post-info list-inline">
                        <li class="color-4">
                            <i class="fa fa-calendar color-4"></i> 
                            <span class="color-4">{{$event['day']}}&nbsp;ב{{$event['month']}}, 2017</span>
                        </li>
                        <li>
                            <i class="fa fa-user"></i> 
                            <span class="color-4">גילאים: {{$event['age']}}</span>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i> 
                            <span class="color-4">{{$event['hour']}}</span>
                        </li>
                        <li>
                            <i class="fa fa-money"></i> 
                            <span class="color-4">{{$event['price']}}</span>
                        </li>
                    </ul>
                    <p class="hidden-md hidden-lg">{!!$event['details']!!}</p>
                    <button onclick="history.go(-1)" class="btn btn-default pull-right hidden-sm hidden-xs">
                        <i class="fa fa-arrow-right"></i>
                        חזרה
                    </button>
                    <a onclick="history.go(-1)" class="hidden-lg hidden-md"><i class="fa fa-arrow-right"></i>&nbsp;חזרה</a>
                    </div> 
                    </div>
                </div>
                <!-- /POST -->
            </div>
        </div>
    </div>
    @endif
</section>


@include('inc.footer')
@endsection


