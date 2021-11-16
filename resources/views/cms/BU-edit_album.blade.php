@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת <span>אלבום</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/albums/'. $album->id)}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="album_id" value="{{$album->id}}">
                                <input type="hidden" name="oldImage" value="{{$album->thumbnail}}">
                                <input type="hidden" name="originalyTaken" value="{{Carbon\Carbon::parse($album->picturesTaken)->format('Y-m-d')}}">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">שם</label>
                                    <input value="{{$album->name}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- picturesTaken  -->
                                <div class="form-group">
                                    <label for="picturesTaken">תאריך הצילום המקורי היה: {{Carbon\Carbon::parse($album->picturesTaken)->format('d/m/Y') }}</label>
                                    <input name="picturesTaken" type="text" class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-RTL="true" placeholder="אם ברצונכן לשנות אנא הכניסו תאריך חדש" value="">
                                </div>
                                <!-- thumbnail  -->
                                <div class="form-group col-md-4">
                                    <label for="thumbnail">תמונת השער של האלבום</label>
                                    
                                    <img src="{{$path . $album->thumbnail}}" style="width:200px;">
                                    <br><br>
                                    <label for="thumbnail">אם ברצונכן לשנות אנא ביחרו תמונה חדשה</label>
                                    <input type="file" name="thumbnail" class="fileinput-button">
                                </div>
                                <!-- images  -->
                                <div class="form-group">
                                    <label for="images[]">הוספת תמונות לאלבום</label>
                                    <input type="file" name="images[]" class="fileinput-button" multiple>
                                </div>
                                <!-- videos  -->
                                <div class="form-group">
                                    <label for="playlist_url"> <a href="https://www.youtube.com/channel/UCILG5aLKUAYBygQNbt6W23g/playlists?disable_polymer=1" target="_NEW"> YOUTUBE</a> PLAYLIST</label>
                                    
                                    <input type="text" name="playlist_url" class="form-control" placeholder="{{$playlist_url[0]->url}}">
                                    <label> 
                                        להעתיק ולהדביק רק את החלק שאחרי ה      =list  <br>
                                        https://www.youtube.com/playlist?list=<span style='color:red'>PL76pAfL6eZWgKskU33E0tuH2usMFoSxsH</span>
                                    </label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/albums')}}">בטל</a>  
                                    <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="שמור אלבום">                         
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
