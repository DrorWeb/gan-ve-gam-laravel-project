@extends('cms.cms_master')

@section('cmsCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
@endsection


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
                <div class="col-md-12 ">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/albums/'. $album['id'])}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="row clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="album_id" value="{{$album['id']}}">
                                <input type="hidden" name="oldImage" value="{{$album['thumbnail']}}">
                                <input type="hidden" name="originalyTaken" value="{{Carbon\Carbon::parse($album['picturesTaken'])->format('Y-m-d')}}">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <label for="name">שם</label>
                                        <input value="{{$album['name']}}" type="text" name="name" class="form-control" placeholder="">
                                        <br>
                                    </div>
                                    <!-- picturesTaken  -->
                                    <div class="col-md-6">
                                        <label for="picturesTaken">תאריך הצילום המקורי היה: {{Carbon\Carbon::parse($album['picturesTaken'])->format('d/m/Y') }}</label>
                                        <input name="picturesTaken" type="text" class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-RTL="true" placeholder="אם ברצונכן לשנות אנא הכניסו תאריך חדש" value="">
                                    </div>
                                    <!-- playlist  -->
                                    <div class="col-md-12">
                                        <label for="playlist_url"> <a href="https://www.youtube.com/channel/UCILG5aLKUAYBygQNbt6W23g/playlists?disable_polymer=1" target="_NEW"> YOUTUBE</a> PLAYLIST</label>
                                        <input type="text" name="playlist_url" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <!-- thumbnail  -->
                                <div id="albumCrud" class='list-group gallery col-md-2'>
                                    <label for="thumbnail"> לשינוי תמונת השער של האלבום</label>
                                    <input type="file" name="thumbnail" class="fileinput-button">
                                    <br><br>
                                    <label for="thumbnail">הפלייליסט הקיים לאלבום זה</label>                                   
                                    @if($playlist_url)
                                    <div class="thumbnail fancybox" style="width:90%;position:relative;height:0;padding-bottom:56.25%">
                                        <iframe src="{{'https://www.youtube.com/embed/?list=' . $playlist_url->url . '&showinfo=1'}}"  frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
                                        <a id='albumCrud' class="close-icon btn btn-danger" href="{{ url('cms/deleteplaylist',$playlist_url->url) }}">X</a>                                   
                                    </div>
                                    @else
                                    <div class="thumbnail fancybox" style="width:90%;position:relative;height:0;padding-bottom:56.25%">
                                        <img src="{{asset('images/designElements/noPlaylist2.png')}}" style="margin-top:-20px">
                                     </div>
                                    @endif
                                </div>
                                <div class="col-md-4 thumbnail fancybox">
                                    <label for="thumbnail">תמונת השער של האלבום</label>
                                    <img src="{{$path . $album->thumbnail}}" class="">
                                </div>
                            </div>
                            <!-- images  -->
                            <div class="row">
                                <div class="col-md-12 padding-30">
                                    <label for="images[]">להוספת תמונות לאלבום</label>
                                    <input type="file" name="images[]" class="fileinput-button" multiple>
                                </div>
                            </div>
                            <div class="row">
                                <div id="albumCrud" class='list-group gallery'>
                                    @if($pictures)
                                        @foreach($pictures as $picture)
                                        <div class='col-sm-4 col-xs-6 col-md-2 col-lg-2'>
                                            <a class="thumbnail fancybox" rel="ligthbox" href="{{$appUrl .'storage/privateAlbums/' . $picture['name']}}" target="_NEW">
                                                <img src="{{$appUrl .'storage/privateAlbums/' . $picture['name']}}" alt="{{$picture['alt']}}">
                                                <div class='text-center'>
                                                    <small class='text-muted'></small>
                                                </div> 
                                            </a>
                                            <a id='albumCrud' class="close-icon btn btn-danger" href="{{ url('cms/deleteImage',$picture['id']) }}">X</a>
                                        </div> 
                                        @endforeach
                                    @endif

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
