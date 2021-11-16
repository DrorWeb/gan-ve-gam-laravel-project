@extends('master')

@section('content')
<section id="slider" class="fullheight" 
         style="background-image:url('{{asset('images/backgrounds/bg-songs.jpg')}}');
         background-size: cover; background-position-x:left; background-position-y:top;">
    <br><br>
    <div class="hidden-sm hidden-xs"><br><br><br><br><br><br></div>
    <div class="container">
        <div class="full-video-page ">
            <div class="videoPage-right">
                <div class="videoPage-right-content">
                    <h3>{{$song->title}}</h3>
                    <div class="player embed-responsive embed-responsive-16by9">
                        {{!! $song->url !!}}
                    </div><br>
                    <a href="" data-toggle="modal" data-target="#myModal2">
                        <h5>  הצג רשימה של כל השירים  </h5>
                    </a>
                </div>
            </div>
            <div class="videoPage-left hidden-xs hidden-sm">
                <div class="videoPage-left-content">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modal')
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:150px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title color-1" id="myModalLabel">שירים</h4>
            </div>
            <div class="modal-body">
                @if($allSongs)
                <ol>
                    @foreach($allSongs as $song)
                    <li><a href="{{url('media/songs/' . $song->id)}}">{{$song->title}}</a></li>
                    @endforeach
                </ol>
                @endif
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
@endsection