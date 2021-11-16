@extends('cms.cms_master')
@section('cmsCss')
<!--<link rel='stylesheet' href="{{asset('plugins/fontawesome-iconpicker-1.3.0/dist/css/fontawesome-iconpicker.css')}}" type="text/css">--> 

@endsection
@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> השירות שלנו</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($service)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/ourServices/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="service_id" value="{{$service->id}}">
                               <div class="form-group">
                                    <label for="icon">האייקון כרגע הוא:    <i style="font-size:1.5em" class="{{$service->icon}}"></i>     </label>  
                                    <label for="">לבחירת אייקון חדש:  
                                        <a href="http://theme.stepofweb.com/Smarty/v1.2.0/HTML/feature-icons-fontawesome.html" target="_new">לחצי כאן</a> - 
                                        אם לא מצאת אפשר גם 
                                        <a href="http://theme.stepofweb.com/Smarty/v1.2.0/HTML/feature-icons-glyphicons.html" target="_new"> כאן</a><br>
                                        <span style="color:red;">      בלחיצה על האייקון שבחרת, יקפוץ חלון. תעתיקי מה שכתוב בו ותדביקי פה למטה</span>
                                    </label>  
                                    <input value="{{$service->icon}}" type="text" name="icon" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="כותרת">כותרת (חובה) </label>                               
                                    <input value="{{$service->כותרת}}" type="text" name="כותרת" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="תקציר">תוכן (מה שבא לך, הכל כשר...) </label>                               
                                    <input value="{{$service->תקציר}}" type="text" name="תקציר" class="form-control" placeholder="">
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/services')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן ">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <h1 class="text-center color-3"> כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
@section('cmsScripts')

<script type="text/javascript" src="{{asset('plugins/fontawesome-iconpicker-1.3.0/src/js/iconpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/fontawesome-iconpicker-1.3.0/src/js/jquery.ui.pos.js')}}"></script>
<script>$('#iconPicker').iconpicker();</script>
@endsection