@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> שיר</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                @if($song)
                <div class="col-md-10 col-md-offset-1">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/songs/'. $song->id)}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="song_id" value="{{$song->id}}">
                                <div class="row">
                                    <!-- title -->
                                    <div class="form-group col-md-6">
                                        <label for="title">שם השיר</label>                               
                                        <input value="{{$song->title}}" type="text" name="title" class="form-control" placeholder="">
                                    </div>
                                    <!-- description -->
                                    <div class="form-group col-md-6">
                                        <label for="description">פרטים</label>
                                        <input value="{{$song->description}}" type="text" name="description" class="form-control" placeholder="">
                                    </div>

                                </div>
                                <!-- url -->
                                <div class="form-group">
                                    <label for="url">קישור &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:120px;" src="{{asset('images/designElements/youtube.png')}}"</label>                               
                                    <input value="{{$song->url}}" type="text" name="url" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row"><br><br><br>
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/songs')}}">בטל</a> 
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
