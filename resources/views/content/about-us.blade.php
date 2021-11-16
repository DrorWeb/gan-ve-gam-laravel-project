@extends('master')
@section ('slider')
<section id="slider" class="height-200" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/aboutus.jpg')}}');"></div>
</section>
@endsection

<!--============================================================================
=================================== About-1 =================================-->
@section ('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <!-- top -->
                 <div class="col-md-9">
                    <!-- image -->
                    <img class="pull-left hidden-xs hidden-sm" src="{{asset('images/'. $aboutPic->image )}}" style="width:300px" alt="ooopsss...missing image-{{$aboutPic->image_alt}}" />
                    <!-- כותרת -->
                    <div class="heading-title">
                        <h2 class="color-2">{{$about1->title}}</h2>
                    </div>
                    <p> {{$about1->article}} </p>
                </div>
                <div class="col-md-3" style="margin-top:90px">

                    <div class="box-static box-border-top margin-bottom-60">
                        <div class="box-title">
                            <h4 class="color-2">{{$capabilitiesHeadline->title}}</h4>
                        </div>
                        <ul class="list-unstyled list-icons padding-15 nopadding-bottom">
                            @if($capabilities)
                            @foreach($capabilities as $capability) 
                            <li class="margin-bottom-20">
                                <i class="fa fa-check text-success size-18"></i> 
                                <span class="block bold size-18">{{$capability->title}}</span>
                                <small>{{$capability->article}}</small>
                            </li>
                            @endforeach
                            <li class="margin-bottom-20">
                                <i class="fa fa-check text-success size-18 hide"></i> 
                                <span class="block bold size-18">ועוד...</span>
                               
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
</section>    
<!--============================================================================
============================= Counters Section ==============================-->
@if($facts)
<section class="parallax padding-xxs" style="background-image: url( {{ URL::asset('images/backgrounds/bg-facts.jpg') }})" >
    <div class="overlay dark-5"></div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">{{$factsHeadline->headline}}</h3>
        </div>

        <div class="row countTo-lg text-center">
            <!--  facts color generator   -->
            <?php $factColor=4; ?>
            @foreach($facts as $fact)
            @if($factColor>6)
            <?php $factColor=1; ?>
            @endif
            <div class="col-md-3 col-xs-6 col-sm-6">
                <span class="countTo color-{{$factColor}}" data-speed="3000" >{{$fact->number}}</span>
                <h4>{{$fact->title}}</h4>
            </div>
            <?php $factColor++; ?>
            @endforeach
        </div>
        </div>
</section>
@endif
<!--============================================================================
=================================== About-2-3-4 =================================-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">       
                <div class="row margin-top-60">
                    <div class="col-sm-6">
                        <div class="heading-title heading-border-bottom heading-color">
                            <h3 class="color-2">{{$about2->title}}</h3>        
                        </div>
                        <p>{{$about2->article}}</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="heading-title heading-border-bottom heading-color">
                            <h3 class="color-2">{{$about3->title}}</h3>
                        </div>
                        <p>{{$about3->article}}</p>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-md-12 margin-top-60">
                <div class="heading-title heading-border-bottom heading-color text-center">
                    <h3 class="color-2">{{$about4->title}}</h3>
                </div>
                <p>{{$about4->article}}</p>
            </div>
        </div>
    </div>
    <!-- /LEFT -->
</section>

@if($testamonials)
<section class="parallax" style="background-image:url('{{asset('images/backgrounds/footer-bg-5.png')}}')">
    <div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>
    <div class="container">
        <div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 5500, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
            @foreach($testamonials as $testa)
            <div class="testimonial">
                <div class="testimonial-content nopadding">
                    <p class="lead" style="direction: rtl">{{$testa->details}}</p>
                    <cite>
                        {{$testa->name}}
                    </cite>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@include('inc.footer')
@endsection


