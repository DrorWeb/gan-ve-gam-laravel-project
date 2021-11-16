@extends('master')

@section('content')
<section id="slider" class="fullheight" 
         style="background-image:url('{{asset('images/backgrounds/bg-fairy.jpg')}}');
         background-size: cover; background-position-x:left; background-position-y:top;">
    <br><br>
    <div class="hidden-sm hidden-xs"><br><br><br><br><br><br></div>

<div class="container">
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/_1DzH4l63lY?list=PL_WKmB3mhSbKOKOYIFJkbzyWsAtLKjTHU?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
</section>
@endsection



<!--{{ $storage_path . '/privateAlbums/' . $video['name']}}-->