@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת <span>אלבום</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/albums')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">שם</label>
                                    <input value="{{Input::old('name')}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- thumbnail  -->
                                <div class="form-group">
                                    <label for="thumbnail">תמונת שער</label>
                                    <input type="file" name="thumbnail" class="fileinput-button">
                                </div>
                                <!-- Date Taken  -->
                                <div class="form-group">
                                    <label for="picturesTaken">תאריך הצילום</label>
                                    <input name="picturesTaken" type="text" class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-RTL="true">
                                </div>
                                <!-- images  -->
                                <div class="form-group">
                                    <label for="images[]">תמונות לאלבום</label>
                                    <input type="file" name="images[]" class="fileinput-button" multiple>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-static box-border-top">
                                            <p class="" style="margin-bottom: -10px;">
                                                <strong>
                                                    אז צילמת וידאו ואת רוצה להוסיף אותו לאלבום. מה שצריך לעשות זה להעלות את הסרטונים ליוטיוב שלך,
                                                    <br>
                                                    לאחר שכל הקבצים סיימו לעלות את יוצרת מהם פלייליסט. בעמוד עריכת הפלייליסט ישנה אופציה לשיתוף 
                                                    <br>
                                                    
                                                    <span class="color-1"></span>
                                                </strong>
                                            </p>
                                        </div>    
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <!-- videos  -->
                                <div class="form-group">
                                    <label for="playlist_url"> <a href="https://www.youtube.com/channel/UCILG5aLKUAYBygQNbt6W23g/playlists?disable_polymer=1" target="_NEW"> YOUTUBE</a> PLAYLIST</label>
                                    
                                    <input value="{{Input::old('playlist_url')}}" type="text" name="playlist_url" class="form-control" placeholder="">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/albums')}}">בטל</a>  
                                    <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="צור אלבום">                         
                                </div>
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
