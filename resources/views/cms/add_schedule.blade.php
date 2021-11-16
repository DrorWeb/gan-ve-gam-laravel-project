@extends('cms.cms_master')
@section('cmsCss')
<!--<link rel='stylesheet' href="{{asset('plugins/fontawesome-iconpicker-1.3.0/dist/css/fontawesome-iconpicker.css')}}" type="text/css">-->
@endsection
@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת שורה ל<span>לוח הזמנים שלנו</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/schedule')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <div class="form-group"> 
                                    <label for="time">שעה  - (נא להקפיד על מבנה אחיד. לדוגמה - 09:30)</label>  
                                    <input value="{{Input::old('time')}}" type="text" name="time" class="form-control" placeholder="" required="true">
                                </div>
                                <div class="form-group">
                                    <label for="title">פעילות  -  (כותרת קצרה)</label>                               
                                    <input value="{{Input::old('title')}}" type="text" name="title" class="form-control" placeholder="" required="true">
                                </div>
                               <div class="form-group">
                                    <label for="description">פירוט - (פרט נמק והסבר)</label>                               
                                    <textarea name="description" placeholder="" class="form-control" rows="5" required="">{{Input::old('description')}}</textarea>
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