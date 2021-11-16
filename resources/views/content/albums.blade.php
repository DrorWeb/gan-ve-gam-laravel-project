@extends('master')
@section ('slider')
<section id="slider" class="height-300 hidden-xs" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/photos.jpg')}}');">
        <div class="overlay dark-2"></div>
    </div>
</section>
@endsection
@section('content')
<div id="gradMenu" class="hidden-sm hidden-md hidden-lg gradmenudror"> <br> <br><br> </div>
    <div id="portfolio" class="portfolio-nogutter">
        <br><br>
        <h1 style="color:black; text-align: center">האלבומים שלנו</h1>
        <br><br>
        <div class="row mix-grid">
            @foreach($albums as $album)
            <div class="col-md-3 col-sm-3 mix margin-top-30">
                <div class="item-box">
                    <figure>
                        <span class="item-hover">
                            <span class="overlay dark-5"></span>
                            <span class="inner">
                                <a class="ico-rounded" href="{{url('pictures/' . $album['id'])}}">
                                    <span class="size-20" style="padding: 10px;">פתח אלבום</span>
                                </a>

                            </span>
                        </span>
                        <img class="img-responsive" src="{{$appStorage . 'storage/privateAlbums/' . $album['thumbnail']}}" width="600" height="399" alt="תמונת שער לאלבום">
                    </figure>
                    <div class="item-box-desc">
                        <h2 class="text-center">{{$album['name']}}</h2>
                        <h3 class="text-center" style="color:grey">{{Carbon\Carbon::parse($album['picturesTaken'])->format('d/m/Y')}}</h3>
                           
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            </div>
<br><br>
@include('inc.footer')
@endsection

