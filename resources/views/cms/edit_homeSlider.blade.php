@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> שקופית</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($slide)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/homeSlider/'.$slide['id'])}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="user_id" value="{{$slide['id']}}">
                                {{csrf_field()}}
                               
                                <!-- Image -->
                                <div class="form-group">
                                    <label for="image">תמונה</label>
                                    <img src="{{asset('images/sliders/' . $slide['image'])}}" style="width:300px;">
                                    <input type="file" name="image">
                                </div>
                                <!-- title -->
                                <div class="form-group">
                                    <label for="title">כותרת</label>                               
                                    <input value="{{$slide['title']}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                                <!-- description -->
                                <div class="form-group">
                                    <label for="description">תת-כותרת</label>
                                    <input value="{{$slide['Description']}}" type="text" name="description" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/homeSlider')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן שקופית">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <h1 class="text-center color-3">לא נמצאה השקופית - כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
