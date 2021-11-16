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
                 @if($fact)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/fact/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="fact_id" value="{{$fact->id}}">
                                <!-- title -->
                                <div class="form-group">
                                    <label for="title">כותרת עובדה</label>                               
                                    <input value="{{$fact->title}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                                <!-- number -->
                                <div class="form-group">
                                    <label for="number">מספר / כמות</label>
                                    <input value="{{$fact->number}}" type="text" name="number" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/facts')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן עובדה">                         
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
