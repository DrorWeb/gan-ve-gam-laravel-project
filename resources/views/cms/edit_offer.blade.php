@extends('cms.cms_master')

@section('cmsCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
@endsection


@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת <span>פעוטון גנון צהרון</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-12 ">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/offer/'. $offer->id . '/update')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="row clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="offer_id" value="{{$offer->id}}">
                                <input type="hidden" name="offer_title" value="{{$offer->title}}">
                                <input type="hidden" name="ogImg" value="{{$offer->image}}">
                                
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label for="headline">כותרת</label>
                                        <input value="{{$offer->headline}}" type="text" name="headline" class="form-control" placeholder="">
                                        @if($offer->image)
                                        <br>
                                        <div id="aboutImage" class="col-md-12">
                                            <div class="thumbnail fancybox ">
                                                <label for="" >התמונה הגדולה</label>
                                                <img src="{{asset('images/' . $offer->image)}}">

                                            </div>
                                            <a id='aboutImage' class="close-icon btn btn-danger" href="{{ url('cms/deleteOfferImage', $offer->id) }}">X</a>
                                        </div>
                                        @else
                                        <br><br><br><br><br><br>
                                        <label for="image">לא מוגדרת תמונה גדולה לעמוד זה</label>
                                        <label>לחצי כאן להגדרת תמונה חדשה</label>

                                        <input type="file" name="image" class="fileinput-button" multiple>

                                        @endif
                                        <br>
                                        <label for="image_alt">טקסט חלופי לתמונה</label>
                                        <input value="{{$offer->image_alt}}" type="text" name="image_alt" class="form-control" placeholder="">

                                    </div>
                                    <div class="col-md-9">
                                        <label for="description">פרטים</label>
                                        <textarea value="" rows="20" type="text" name="description" class="form-control" placeholder="">{{$offer->description}}</textarea>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @if($thumbs)
                                <div id="albumCrud" class='list-group gallery'>
                                    <label style="padding-right:25px;">תמונות קטנות</label>
                                    <?php $index=1;   ?> 
                                    @foreach($thumbs as $thumb)
                                    
                                    <div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>
                                        <a class="thumbnail fancybox" rel="ligthbox" href="" target="">
                                            <img src="{{asset('images/servicesThumbs/' . $thumb->image)}}" alt="{{$thumb->image_alt}}">
                                            <div class='text-center'>
                                                <small class='text-muted'></small>
                                            </div> 
                                        </a>
                                        <a id='albumCrud' class="close-icon btn btn-danger" href="{{ url('cms/deleteOfferThumbnail', $thumb->id) }}">X</a>
                                        <label for="title{{$index}}">כותרת תמונה</label>
                                        <h4 class="color-4">{{$thumb->title}}</h4>
                                        <label class="size-20"></label>
                                    </div> 
                                     <?php $index++;   ?> 
                                    @endforeach
                                </div>
                                @endif
                                </div>
                      @if($existingThumbs<6)    
                    <div class="row clearfix">
                        <div class="col-md-12 padding-30">
                            <label for="thumbnails[]">להוספת תמונות קטנות לעמוד<a href="{{url('cms/offer/addThumbs/' . $offer->id)}}"> לחצי כאן</a></label>
                        </div>
                    </div>
                      @endif
                            <div class="row">
                                <div class="row margin-top-50">
                                    <div class="col-md-12">
                                        <a class="btn btn-danger pull-left" style="width:30%;" href="{{url('cms/offers')}}">בטל</a>  
                                        <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="שמור">                         
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
