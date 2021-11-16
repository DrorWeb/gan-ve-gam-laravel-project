@extends('master')

@section ('slider')
<section id="slider" class="height-150" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/aboutus.jpg')}}');"></div>
</section>
@endsection

@section('content')
<section style="padding-top:30px;padding-bottom:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h2 class="color-2">{{$thisService->headline}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="heading-title heading-border-bottom heading-color"></div>
                    <p>{{$thisService->description}}</p>
                </div>
                <div id="servicePic" class="col-md-6">
                    <img class="img-responsive  text-center" src="{{asset('images/' . $thisService->image)}}">
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="portfolio-nogutter margin-top-60">
        <div class="row">
            @foreach($thumbs as $thumb)
            <div class="col-md-2 col-sm-4 col-xs-4 mix development"><!-- item -->
                <div class="item-box">
                    <figure>
                        <div class="item-hover">
                            <div class="item-box-overlay-title">
                                <h3>{{$thumb->title}}</h3>
                            </div>
                        </div>
                        <img class="img-responsive" src="{{asset('images/servicesThumbs/' . $thumb->image)}}" alt="">
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('inc.footer')
@endsection




