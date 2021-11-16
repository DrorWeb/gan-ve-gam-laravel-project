@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> סיפור</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                @if($story)
                <div class="col-md-10 col-md-offset-1">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/stories/'. $story->id)}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="story_id" value="{{$story->id}}">
                                
                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="title">שם הסיפור</label>                               
                                        <input value="{{$story->title}}" type="text" name="title" class="form-control" placeholder="">
                                    </div>
                                <!-- url -->
                                <div class="form-group">
                                    <label for="url">קישור &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:120px;" src="{{asset('images/designElements/youtube.png')}}"</label>                               
                                    <input dir="ltr" value="{{$story->url}}" type="text" name="url" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row"><br><br><br>
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/stories')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <h1 class="text-center color-3">כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
