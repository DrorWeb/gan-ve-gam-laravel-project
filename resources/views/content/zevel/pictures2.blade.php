@extends('master')
@section ('slider')
<section id="slider" class="height-300 hidden-xs" style="margin-bottom: 0px;" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/photos.jpg')}}');">
        <div class="overlay dark-2"></div>
    </div>
</section>
@endsection
@section('content')
<section>
    <div class="container">
        <h3 class="color-1 text-center">
            <span style="color:#000;">   אלבום:  </span>
            {{$album['name']}}
        </h3>
        <h5 class="color-1 text-center">
            <span style="color:#000;">   תאריך צילום:  </span>
            {{Carbon\Carbon::parse($album['picturesTaken'])->format('d/m/Y') }}
        </h5>        
        <div class="row margin-top-40"> 
            <div class="col-md-12 col-sm-12">
                <div class="masonry-gallery columns-5 margin-bottom-60 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                    @foreach($pictures as $picture)
                   
                    <a class="image-hover" href="{{$appUrl .'storage/privateAlbums/' . $picture['name']}}">                         
                        <img src="{{$appUrl .'storage/privateAlbums/' . $picture['name']}}" alt="{{$picture['alt']}}">
                    </a>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    <div class="container" dir="rtl">
        @if($videos) 
        <h3 class="color-1 text-center">וידאו</h3>
        <div class="row margin-top-40 "> 
            <div class="col-md-12 col-sm-12">
                <div class="margin-bottom-60 clearfix">
                    @foreach($videos as $video)
                    <video width="280" controls>
                        <source src="{{$appUrl .'storage/privateAlbums/' . $video['name']}}" type="video/mp4">
                        This browser does not support this video.
                    </video>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="row text-left" style="margin-left: 10px;">            
            <a class="text-right fa fa-arrow-circle-o-right color-9" href="{{url('albums')}}">  חזרה לדף האלבומים </a>
        </div>
    </div>    
</section>
@include('inc.footer')
@endsection