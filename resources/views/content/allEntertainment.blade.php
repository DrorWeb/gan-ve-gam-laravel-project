@extends('master')

@section ('content')
<section id='entertainmentBody' style="background-image: url('{{asset('images/backgrounds/default.jpg')}}');">
    <div class="container" id="entertainment">
        <div class="row" style="margin-top:150px;">
            <div class="col-sm-12 text-center">
                
                <div class="col-md-6">
                    <a href="" data-toggle="modal" data-target="#myModal">
                        <h1 class="wow rotateIn"  data-wow-delay="0.4s"  style="font-size: 4em">סיפורים</h1>
                        <img class="wow fadeInRightBig responsive" style="width:80%;" src="{{asset('images/reading3.png')}}">
                    </a>
                </div>
                
                <div class="hidden-lg hidden-md"><br><br><br><br><br></div>
                
                <div class="col-md-6">
                    <a href="" data-toggle="modal" data-target="#myModal2">
                        <h1 class="wow rotateIn" data-wow-delay="0.4s" style="font-size: 4em">שירים</h1>
                        <img class="wow fadeInLeftBig responsive" style="width:80%;" src="{{asset('images/singing.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modal')
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:150px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title color-1" id="myModalLabel">סיפורים</h4>
            </div>
            <div class="modal-body">
                @if($allStories)
                <ol>
                    @foreach($allStories as $story)
                    <li><a href="{{url('media/story/' . $story->id)}}">{{$story->title}}</a></li>
                    @endforeach
                </ol>
                @endif
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
            </div>

        </div>
    </div>
</div>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
            </div>

        </div>
    </div>
</div>
@include('inc.footer')
@endsection