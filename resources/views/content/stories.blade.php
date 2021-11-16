@extends('master')

@section('content')
<section id="slider" class="fullheight" 
         style="background-image:url('{{asset('images/backgrounds/bg-fairy.jpg')}}');
         background-size: cover; background-position-x:left; background-position-y:top;">
    <br><br>
    <div class="hidden-sm hidden-xs"><br><br><br><br><br><br></div>
    <div class="container">
        <div class="full-video-page ">
            <div class="videoPage-right">
                <div class="videoPage-right-content">
                    <h3>{{$story->title}}</h3>
                    <div class="player embed-responsive embed-responsive-16by9">
                        {{!! $story->url !!}}
                    </div><br>
                    <a href="" data-toggle="modal" data-target="#myModal">
                        <h5>  הצג רשימה של כל הסיפורים  </h5>
                    </a>
                </div>
            </div>
            <div class="videoPage-left hidden-xs hidden-sm">
                <div class="videoPage-left-content"></div>
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
@endsection