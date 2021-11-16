@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> לוח הזמנים של הגן</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($schedule)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/schedule/'.$schedule->id)}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="_method" value="PUT">
                               <div class="form-group"> 
                                    <label for="time">שעה  - (נא להקפיד על מבנה אחיד. לדוגמה - 09:30)</label>  
                                    <input value="{{$schedule->time}}" type="text" name="time" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="title">פעילות  -  (כותרת קצרה)</label>                               
                                    <input value="{{$schedule->title}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="description">פירוט - (פרט נמק והסבר)</label>                               
                                    <textarea name="description" placeholder="" class="form-control" rows="5" required="">{{$schedule->description}}</textarea>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/schedule')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן ">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <h1 class="text-center color-3">schedule כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
@section('cmsScripts')

@endsection