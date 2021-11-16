@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
     @if($thumbsNeeded)
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת תמונות קטנות ל<span>{{$offer->headline}}</span></h3>
            </div>
        </div>
    </section>
    <section>
       
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="box-static box-border-top padding-30">
                        
                        <form class="nomargin" method="post" action="{{url('cms/offer/storeThumbs/' . $offer->id)}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                 <input type="hidden" name="offer_id" value="{{$offer->id}}">
                                    @if($existingThumbs)
                                    <?php  $existingThumbs++?>
                                    @for($x=$existingThumbs; $x<7; $x++)
                                         <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin: 40px;">
                                             <!-- Image -->
                                             <div class="form-group">
                                                 <label for="image{{$x}}">תמונה</label>
                                                 <input type="file" name="image{{$x}}">
                                             </div>
                                             <!-- Alt -->
                                             <div class="form-group">
                                                 <label for="image_alt{{$x}}">תיאור תמונה</label>                               
                                                 <input value="{{Input::old('image_alt'.$x)}}" type="text" name="image_alt{{$x}}" class="form-control" placeholder=""  style="border-radius: 10px;">
                                             </div>
                                             <!-- title -->
                                             <div class="form-group">
                                                 <label for="title{{$x}}">כותרת</label>
                                                 <input value='{{Input::old('title'.$x)}}' type="text" name="title{{$x}}" class="form-control"  placeholder="" style="border-radius: 10px;">
                                             </div>
                                         </div> 
                                         @endfor
                                         @else
                                         @for($x=1; $x<7; $x++)
                                         <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin: 40px;">
                                             <!-- Image -->
                                             <div class="form-group">
                                                 <label for="image{{$x}}">תמונה</label>
                                                 <input type="file" name="image{{$x}}" required="true">
                                             </div>
                                             <!-- Alt -->
                                             <div class="form-group">
                                                 <label for="image_alt{{$x}}">תיאור תמונה</label>                               
                                                 <input value="{{Input::old('image_alt'.$x)}}" type="text" name="image_alt{{$x}}" class="form-control" placeholder="" required="true" style="border-radius: 10px;">
                                             </div>
                                             <!-- title -->
                                             <div class="form-group">
                                                 <label for="title{{$x}}">כותרת</label>
                                                 <input value='{{Input::old('title'.$x)}}' type="text" name="title{{$x}}" class="form-control"  placeholder=""  required="true" style="border-radius: 10px;">
                                             </div>
                                         </div> 
                                         @endfor
                                         
                                         
                                         @endif
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/offer/' . $offer->id .  '/edit')}}">בטל</a>  
                                    <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="הוסף תמונות">                         
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
        @else 
        <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>אין מקום לעוד תמונות ב<span>{{$offer->headline}}</span></h3>
            </div>
        </div>
    </section>

        <section>
       
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <h3>אם את רוצה להוסיף תמונות חיזרי אחורה </h3>
                <h3>ומיחקי מה שאת מעוניינת להחליף קודם</h3>
            </div>
        </div>
     @endif
</div>
@endsection


<!--                                <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin: 40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image1">תמונה</label>
                                         <input type="file" name="image1">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt1">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt1')}}" type="text" name="image_alt1" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title1">כותרת</label>
                                         <input value="{{Input::old('title1')}}" type="text" name="title1" class="form-control"  placeholder="" style="border-radius: 10px;">
                                     </div>
                                 </div> 
                                 <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin: 40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image2">תמונה</label>
                                         <input type="file" name="image2">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt2">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt2')}}" type="text" name="image_alt2" class="form-control"  placeholder="" style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title2">כותרת</label>
                                         <input value="{{Input::old('title2')}}" type="text" name="title2" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                 </div> 
                                 <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin:40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image3">תמונה</label>
                                         <input type="file" name="image3">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt3">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt3')}}" type="text" name="image_alt3" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title3">כותרת</label>
                                         <input value="{{Input::old('title3')}}" type="text" name="title3" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                 </div> 
                                 <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin:40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image4">תמונה</label>
                                         <input type="file" name="image4">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt4">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt4')}}" type="text" name="image_alt4" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title4">כותרת</label>
                                         <input value="{{Input::old('title4')}}" type="text" name="title4" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                 </div> 
                                 <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin:40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image5">תמונה</label>
                                         <input type="file" name="image5">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt5">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt5')}}" type="text" name="image_alt5" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title5">כותרת</label>
                                         <input value="{{Input::old('title5')}}" type="text" name="title5" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                 </div> 
                                 <div id="addThumbCard" class="col-md-3" style="background-color:#FFCF40;border-radius: 40px; padding:20px; margin:40px;">
                                      Image 
                                     <div class="form-group">
                                         <label for="image6">תמונה</label>
                                         <input type="file" name="image6">
                                     </div>
                                      Alt 
                                     <div class="form-group">
                                         <label for="image_alt6">תיאור תמונה</label>                               
                                         <input value="{{Input::old('image_alt6')}}" type="text" name="image_alt6" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                      title 
                                     <div class="form-group">
                                         <label for="title6">כותרת</label>
                                         <input value="{{Input::old('title6')}}" type="text" name="title6" class="form-control" placeholder=""  style="border-radius: 10px;">
                                     </div>
                                 </div>-->