@extends('master')


@section ('slider')
<!--=========================== Slider Section =================================
=============================================================================-->       
<section id="slider" class="fullheight" style="height: 723px;">
    <div class="swiper-container" data-effect="slide" data-autoplay="6000">
        <div class="swiper-wrapper">
            @if($homeSlider)
            @foreach($homeSlider as $slide)
            <div class="swiper-slide" style="background-image: url('{{asset('images/sliders/' . $slide->image)}}');">
                <div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
                <div class="display-table">
                    <div class="display-table-cell vertical-align-middle">
                        <div class="container">
                            <div class="row">
                                <div class="text-center col-md-8 col-xs-12 col-md-offset-2">
                                    <h1 class="bold wow fadeInUp" data-wow-delay="0.4s">{{$slide->title}}</h1>
                                    @if($slide->Description)
                                    <p class="wow fadeInUp" data-wow-delay="0.6s">{{$slide->Description}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Swiper Arrows -->
        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    </div>
</section>
@endsection


@section ('content')
<!--============================================================================
===================== Call For Action - Subscribe Section ===================-->
<section id="arrowDown" class="alternate padding-xxs callout-dark heading-title heading-arrow-bottom">
    <div class="container">
        <div class="row text-center">
            <div class="cfa col-lg-6 col-sm-8 col-lg-offset-3 col-md-offset-2 col-sm-offset-2">
                <h5 class="letter-spacing-1 color-9">
                    הרשם לניוזלטר שלנו לקבלת חדשות והטבות
                </h5>
                <p class="color-9 nomargin">
                    חשוב לנו מאד לציין כי לעולם לא נעביר את המייל שלך לאף אחד !!!
                </p>
                <form action="{{url('newsletter')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="הכנס/י את כתובת האימייל שלך" required="required">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">הרשם</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--============================================================================
=============================== Services Section ============================-->

@if($services)
<section class='bg-color-4 servicesSection' style="background-attachment: scroll; ">
     <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="color-0">
                <img class="hidden-xs" style="width:6%; vertical-align: central;" src="images/designElements/shape-right-new.svg">                   
                {{$servicesHeadline->headline}}
                <img class="hidden-xs" style="width:6%; vertical-align: central;" src="images/designElements/shape-left-new.svg">
            </h2>
            <hr class="hidden-lg hidden-md hidden-sm">
            <hr class="hidden-lg hidden-md hidden-sm">
        </div>
    </div><br><br><br>
   
        <div class="row">
            <div class="col-md-5">
                @foreach($servicesRight as $serviceRight)
                <div class="servicesContent wow fadeInRight">
                    <span class="media-right">
                        <i class="serviceIcons color-6 {{$serviceRight['icon']}} bg-color-4" aria-hidden="true" style="padding:30px 30px"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="media-heading color-0">{{$serviceRight['כותרת']}}</h3>
                        <p>{{$serviceRight['תקציר']}}</p>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="hidden-xs col-md-2 text-center wow fadeInUp">
                <img src="images/kidsImages/services.png" style="margin-right:-30px;">
            </div>


            <div class="col-md-5 col-sm-12 col-xs-12">
                @foreach($servicesLeft as $serviceLeft)
                <div class="servicesContent wow fadeInLeft" data-wow-delay="0.6s">
                    <span class="media-right">
                        <i class="serviceIcons color-6 {{$serviceLeft['icon']}} bg-color-4" aria-hidden="true" style="padding:30px 30px"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="media-heading color-0">{{$serviceLeft['כותרת']}}</h3>
                        <p>{{$serviceLeft['תקציר']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endif

<!--============================================================================
============================= Team Section ==================================-->
@if($boss)
<section class='colorSection' style='background-attachment: fixed;'>
     <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="color-9">
                <img class="hidden-xs" style="width:6%; vertical-align: central;" src="images/designElements/right-pink-new.svg">
                {{$crewHeadline->headline}}
                <img class="hidden-xs" style="width:6%; vertical-align: central;" src="images/designElements/left-pink-new.svg">
            </h2>
            <hr class="hidden-lg hidden-md hidden-sm">
            <hr class="hidden-lg hidden-md hidden-sm">
        </div>
    </div>
    @foreach($boss as $boss)
        <div class="row padding-top-20">
            <div class="box-static box-transparent box-border-top p-30">
                <div class="col-md-7">
                    <img class="img-responsive bossImage" src="{{asset('images/employees/' . $boss->image)}}" alt="{{$boss->alt}}" />
                    
                </div>
                <div class="col-md-5" style="background-color:#fff;">
                    <h2 class="nomargin color-1">{{$boss->name}}</h2>
                            <h5 class="nomargin color-1">{{$boss->job}}</h5>
                            <hr />
                            <p style="font-size: 1.2em;">
                                {{$boss->details}} 
                            </p>
                            <hr />
                </div>
            </div>
            
        </div>
    @endforeach
    <div class="row" id="spacer"></div>
        <!-- סייעות -->
        @if($helpers)
        <div class="row">
            <div class="col-md-12">
                <?php $helperColor = 1; ?>
                @foreach($helpers as $helper)
                @if($helperColor > 6)
                <?php $helperColor = 1; ?>
                @endif
                <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-30">
                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box-dror box1 box-{{$helper->color}}" style=" border-radius: 8px;">
                                <div class="box-icon-title">
                                    <img class="img-responsive circle" src="{{asset('images/employees/' . $helper->image)}}" alt="{{$helper->alt}}" />
                                    <h2 class="size-20">{{$helper->name}}</h2>
                                </div>
                                <p class="size-15">{{$helper->job}}</p>
                                <p style="font-size: 12px;">{{$helper->details}}</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="box2 box-{{$helper->color}} box-dror" style=" border-radius: 8px;">
                                <h4 class="size-20">{{$helper->name}}</h4>
                                <hr />
                                <p>{{$helper->fullDetails}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $helperColor++; ?>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endif


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
============================ Testamonials Section ===========================-->
@if($testamonials)
<section id="testamonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="color-9">
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/right-pink-new.svg')}}">
              {{$testamonialsHeadline->headline}}
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/left-pink-new.svg')}}">
                </h2>
                <hr class="hidden-lg hidden-md hidden-sm">
                <hr class="hidden-lg hidden-md hidden-sm">
            </div>
        </div>
        <br><br>   
        <div class="row">
            <?php $testaColor=1;  ?>
            @foreach($testamonials as $testa)
            @if($testaColor>6)
            <?php $testaColor=1;  ?>
            @endif
            @if($testa->homeDisplay)
            <div class="col-md-4 testaCard">
                <div class=" box-dror testaBox box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large bg-color-{{$testaColor}}">
                    <div class="testaContent">
                        <span class="box-dror text-center border-color-{{$testaColor}} testaIconFa">
                            <i class="fa fa-quote-right"></i>
                        </span><br>
                        <h3 class="text-center">{{$testa->name}}</h3>
                        <p>{{$testa->details}}</p>
                    </div>
                </div>
            </div>
            @endif
             <?php $testaColor++;  ?>
            @endforeach
        </div>
    </div>
</section>
@endif

<!--============================================================================
============================== EVENTS Section ===============================-->
@if($events)
<section id="events2">
    
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 class="color-0">
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/shape-right-new.svg')}}">
              {{$eventsHeadline->headline}}
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/shape-left-new.svg')}}">
                </h2>
                <hr class="hidden-lg hidden-md hidden-sm">
                <hr class="hidden-lg hidden-md hidden-sm">
            </div>
        </div>
        <br><br>
        <div class="events2container">
            <?php $eventColor=1;  ?>
            @foreach($events as $event)
            @if($eventColor>6)
            <?php $eventColor=1; ?>
            @endif
            <div class="events2-card bg-color-{{$eventColor}}" style="min-height: 250px;">  
                
                <div class="events2-img_sticker" style="background-image: url( {{ URL::asset('images/events/240X240/' . $event->image) }})" alt="{{$event->image_alt}}">
                    <span class="date-sticker-round2">{{$event->day}}<br>{{$event->month}}</span>                
                </div>
                <div class="events2-info">
                    <div class="events2-details">
                        <h5>{{$event->title}}</h5><br>
                        <table id="eventsTable">
                            <tr>
                                <td><i class="fa fa-user" aria-hidden="true"></i></td>
                                <td class="padd">גילאים:</td>
                                <td class="padd">{{$event->age}}</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-clock-o" aria-hidden="true"></i> </td>
                                <td class="padd">שעה:</td>
                                <td class="padd">{{$event->hour}}</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                <td class="padd">מיקום:</td>
                                <td class="padd">{{$event->location}}</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-ils" aria-hidden="true"></i></td>
                                <td class="padd">מחיר:</td>
                                <td class="padd">{{$event->price}}</td>
                            </tr>
                        </table>
                        
                        <p>{{$event->short}}</p>
                        <a class="btn btn-dirtygreen pull-right" href="{{url('event/'.$event->id)}}">לפרטים נוספים</a>
                    </div>
                </div>
            </div> 
                <?php $eventColor++;  ?>
            @endforeach
        </div>
    </div>
</section>
@endif


<!--============================================================================
========================== Daily Scedule Section ============================-->
<section  style="background-image: url({{asset('images/backgrounds/myPattern1.png')}}); background-attachment: scroll;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="color-9">
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/right-pink-new.svg')}}">
              {{$scheduleHeadline->headline}}
                    <img class="hidden-xs" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/left-pink-new.svg')}}">
                </h2>
                <hr class="hidden-lg hidden-md hidden-sm">
                <hr class="hidden-lg hidden-md hidden-sm">
            </div>
        </div>
        <br><br> 
        
        <div class="panel panel-default">
        <table class="table table-bordered drorRoundedTable" style="border-radius: 20px;">
                <thead>
                    <tr class="bg-color-4">
                        <th class="text-center size-20" style="width:10%">שעות</th>
                        <th class="text-center size-20" style="width:20%">פעילות</th>
                        <th class="text-center size-20" style="width:70%">פירוט</th>
                    </tr>
                </thead>
                <?php $x = 1 ?>
                @foreach ($schedule as $item)
                @if($x>6)
                <?php $x = 1 ?>
                @endif
                <tr class="bg-color-{{$x}}">
                    <td>{{$item->time}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                </tr>
                <?php $x++ ?>
                @endforeach
                <th colspan="3" rowspan="4" class="text-center size-30 bg-color-4"><br>
                    איסוף ע״י ההורים
                    <br>עד שעה 17:00
                    
                <br>&nbsp;</th>
            </table>
        </div>
    </div>
</section>





<!--============================================================================
========================== Pricing Tables Section ===========================-->
@if($prices)
<section id="priceTables" style="background-color: #4d4d4d;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="color-0">
                    <img class="hidden-xs hidden-sm" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/shape-right-new.svg')}}">
                  {{$pricesHeadline->headline}}
                    <img class="hidden-xs hidden-sm" style="width:6%; vertical-align: central;" src="{{asset('images/designElements/shape-left-new.svg')}}">
                </h2>
                <hr class="hidden-lg hidden-md">
                <hr class="hidden-lg hidden-md">
            </div>
        </div>
        
        <div class="row"><?php $priceColor=4;  ?>
            @foreach($prices as $priceTable)
            @if($priceColor>6)
            <?php $priceColor=1; ?>
            @endif
            <div class="col-md-4 col-sm-4 col-xs-12 price-table">
                <div class="price-table-dror bg-color-{{$priceColor}}">
                    <h3>{{$priceTable->title}}</h3>
                    <img class="priceImg" src="{{asset('images/priceTables 640X426/' . $priceTable->image)}}">   
                    <div class="price-details text-right">
                        <ul>
                            <li>
                                <i class="{{$priceTable->icon1}} color-0"></i>
                                <span>{{$priceTable->detail1}}</span>
                            </li>
                            <li>
                                <i class="{{$priceTable->icon2}} color-0"></i>
                                <span>{{$priceTable->detail2}}</span>
                            </li>
                            <li>
                                <i class="{{$priceTable->icon3}} color-0"></i>
                                <span>{{$priceTable->detail3}}</span>
                            </li>
                            <li>
                                <i class="{{$priceTable->icon4}} color-0"></i>
                                <span>{{$priceTable->detail4}}</span>
                            </li>
                        </ul>

                    </div>
                    <p>	
                         {{$priceTable->price}}&nbsp;₪
                        <span class="color-0">לחודש</span>
                    </p>
                </div>
            </div><?php $priceColor++  ?>
            @endforeach
        </div>
    </div>
</section>
@else
@endif



@include('inc.footer')
@endsection

