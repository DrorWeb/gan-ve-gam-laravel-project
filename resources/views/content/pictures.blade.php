@extends('master')
@section ('slider')
<section id="slider" class="height-300 hidden-xs" style="margin-bottom: 0px;" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/photos.jpg')}}');">
        <div class="overlay dark-2"></div>
    </div>
</section>
@endsection
@section('content')
<section style="background-color: #f2f0ea">
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="masonry-gallery columns-5 margin-bottom-60 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                    @foreach($pictures as $picture)
                    <a class="image-hover" href="{{$appStorage .'storage/privateAlbums/' . $picture['name']}}">                         
                        <img src="{{$appStorage .'storage/privateAlbums/' . $picture['name']}}" alt="{{$picture['alt']}}">
                    </a>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    <div class="container" dir="rtl">
        @if($playlist_url) 
        <h3 class="color-1 text-center">וידאו</h3>
        <div class="row margin-top-40 ">
            <!-- card for mobile -->
            <div class="col-md-2 hidden-lg hidden-md">
                <div class="box-static box-border-top box-color p-30">

                    <div class="box-title mb-30">
                        <span class="fs-20" style="text-shadow: 1px 2px #727261; font-size:1em; font-weight: bold;">שימו
                            <i class="fa fa-heart-o"></i>
                        </span>
                    </div>

                   לחיצה על האייקון 

                    <img src="{{ asset('images/designElements/playlistIconDror.png') }}" alt="Playlist Icon" height="20" width="20">  
                    (בחלקו העליון של הנגן)
                    מגלה את רשימת הסרטונים 

                </div>

            </div>
            <div class="col-md-10">
                <div class="margin-bottom-60 clearfix">
                    @if($playlist_url)
                    <div style="position:relative;height:0;padding-bottom:56.25%">
                        <iframe src="{{'https://www.youtube.com/embed/?list=' . $playlist_url->url . '&showinfo=1'}}" width="800" height="450" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
                    </div>   
                </div>
                @endif
            </div>
             <!-- card for desktops -->
             <div class="col-md-2 hidden-xs hidden-sm">
                <div class="box-static box-border-top box-color p-30">
                    <div class="box-title mb-30">
                        <span class="fs-20" style="text-shadow: 1px 2px #727261; font-size:2em; font-weight: bold">שימו <i class="fa fa-heart-o"></i></span>
                    </div>
                    לחיצה על האייקון 
                        <img src="{{ asset('images/designElements/playlistIconDror.png') }}" alt="Playlist Icon" height="30" width="30">   
                    (בחלקו העליון של הנגן)
                    מגלה את רשימת הסרטונים 
                </div>
            </div>
        </div>

        @endif
        
        <div class="row text-left color-1 hidden-xs hidden-sm" style="position:absolute; margin-left: 10px;">
            <a class="text-right fa fa-arrow-circle-o-right size-25 back2albums" href="{{url('albums')}}"> <h3 class="back2albums size-25 color-1" style="display: inline;">   חזרה לדף האלבומים  </h3></a>          
        </div>
        
        <div class="row text-left color-1 hidden-lg hidden-md" style="margin-left: 10px;">
            <a class="text-right size-15" href="{{url('albums')}}"><i class=" fa fa-arrow-circle-o-right"></i> <h3 class="back2albums size-15 color-1" style="display: inline;">   חזרה לדף האלבומים  </h3></a>          
        </div>
    </div>
</div>    
</section>
@include('inc.footer')
@endsection

                             