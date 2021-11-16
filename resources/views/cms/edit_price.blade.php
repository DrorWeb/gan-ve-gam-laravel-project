@extends('cms.cms_master')
@section('cmsCss')
<link rel='stylesheet' href="{{asset('plugins/fontawesome-iconpicker-1.3.0/dist/css/fontawesome-iconpicker.css')}}" type="text/css"> 

@endsection
@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> מחירון</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($price)
                <div class="col-md-6">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/prices/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="price_id" value="{{$price->id}}">
                                
                                <div class="form-group">
                                    <label for="myOrder"> סדר</label>                               
                                    <input value="{{$price->myOrder}}" type="text" name="myOrder" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="title">כותרת </label>                               
                                    <input value="{{$price->title}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="image">תמונה </label>                               
                                    <input value="{{$price->image}}" type="text" name="image" class="form-control" placeholder="">
                                </div>
                               
                                <div class="form-group">
                                    <label for="icon1">אייקון - 1 - כרגע האייקון הוא <i style="font-size:1.5em" class="{{$price->icon1}}"></i>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:red" class="hidden-sm hidden-xs"> הוראות לעזרה ---> </span></label>  
                                     
                                    <input value="{{$price->icon1}}" type="text" name="icon1" class="form-control" placeholder="">
                                </div>
                               
                               <div class="form-group">
                                    <label for="detail1">פרטים-1</label>                               
                                    <input value="{{$price->detail1}}" type="text" name="detail1" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="icon2">אייקון - 2 - כרגע האייקון הוא <i style="font-size:1.5em" class="{{$price->icon2}}"></i>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:red" class="hidden-sm hidden-xs"> הוראות לעזרה ---> </span></label>  
                                    <input value="{{$price->icon2}}" type="text" name="icon2" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="detail2">פרטים-2</label>                               
                                    <input value="{{$price->detail2}}" type="text" name="detail2" class="form-control" placeholder="">
                                </div>
                               <div id="iconPicker" class="form-group">
                                    <label for="icon3">אייקון - 3 - כרגע האייקון הוא <i style="font-size:1.5em" class="{{$price->icon3}}"></i>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:red" class="hidden-sm hidden-xs"> הוראות לעזרה ---> </span></label>                             
                                    <input value="{{$price->icon3}}" type="text" name="icon3" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="detail3">פרטים-3</label> 
                                    
                                    <input value="{{$price->detail3}}" type="text" name="detail3" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                   <label for="icon4">אייקון - 4 - כרגע האייקון הוא <i style="font-size:1.5em" class="{{$price->icon4}}"></i>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:red;" class="hidden-sm hidden-xs"> הוראות לעזרה ---> </span></label>                                 
                                    <input value="{{$price->icon4}}" type="text" name="icon4" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="detail4">פרטים-4</label>                               
                                    <input value="{{$price->detail4}}" type="text" name="detail4" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="price">מחיר</label>                               
                                    <input value="{{$price->price}}" type="text" name="price" class="form-control" placeholder="">
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/prices')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן מחירון">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 <div class="col-md-4 hidden-xs hidden-sm" style="position:fixed; top:282px; right:60%;">
                    <div class="row"> 
                     <div class="box-static box-border-top padding-30">
                         <form class="nomargin" method="" action="" autocomplete="on">
                             <div class="clearfix">
                                 <div class="form-group">
                                    <label for="">לבחירת אייקונים חדשים:  
                                        <a href="http://theme.stepofweb.com/Smarty/v1.2.0/HTML/feature-icons-fontawesome.html" target="_new">לחצי כאן</a> <br> 
                                        אם לא מצאת אפשר גם 
                                        <a href="http://theme.stepofweb.com/Smarty/v1.2.0/HTML/feature-icons-glyphicons.html" target="_new"> כאן</a><br>
                                        <span style="color:red;">      בלחיצה על האייקון שבחרת, יקפוץ חלון.<br> תעתיקי מה שכתוב בו ותדביקי בשדה המתאים</span>
                                    </label>  
                                 </div>
                                 
                             </div>
                          </form>   
                     </div>
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