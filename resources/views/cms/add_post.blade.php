@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת<span> פוסט חדש</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{ url('cms/posts') }}" enctype="multipart/form-data" files="true"  autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <div class="row">
                                    <!-- DayOfTheMonth -->
                                    <div class="form-group col-md-2">                               
                                        <label for="dayDate">תאריך (יום)</label>
                                        <select  name="dayDate">
                                            <option value="" class="form-control"></option>
                                            @for($day=1; $day<=31; $day++)
                                            <option value="{{$day}}" class="form-control"> {{$day}} </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <!-- Month -->
                                    <div class="form-group col-md-2">                               
                                        <label for="month">חודש</label>
                                        <select  name="month">
                                            <option value="" class="form-control"></option>
                                            @foreach($months as $month)
                                            <option value="{{$month}}" class="form-control"> {{$month}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Year -->
                                    <div class="form-group col-md-4">                               
                                        <label for="year">שנה</label>
                                        <select name="year">
                                            <option value="" class="form-control"></option>
                                            @for($year=2017; $year<=2099; $year++)
                                            <option value="{{$year}}" class="form-control"> {{$year}} </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title">כותרת</label>
                                    <input value="{{Input::old('title')}}" type="text" name="title" class="form-control" placeholder="כותרת" >
                                </div>
                                 <!-- keywords -->
                                <div class="form-group">
                                    <label for="keywords">מילות מפתח לגוגל</label>
                                    <input value="{{Input::old('keywords')}}" type="text" name="keywords" class="form-control" placeholder="צריך להפריד בין המילים או הביטויים בפסיק. לדוגמה - שעון, שעון יד, שעון קיר וכו'" >
                                </div>
                                <!-- תקציר -->
                                <div class="form-group">
                                    <label for="short">תקציר</label>
                                    <textarea type="text" name="short" class="form-control" placeholder="תקציר" rows="5" >{{Input::old('short')}}</textarea>
                                </div>
                                <!-- article -->
                                <div class="form-group">
                                    <label for="article">פוסט מלא</label>     
                                    <textarea name="article" placeholder="פוסט מלא" class="summernote form-control" data-height="300" >{{Input::old('article')}}</textarea>
                                </div>
                                <br><br>
                                <!-- image -->
                                <div class="form-group">
                                     <label class="text-center" style="font-size:1.5em">אפשר לצרף לפוסט תמונה  <span style="color:red;">או </span> וידאו !!! <br> 
                                        <span style="color:red; ">אי אפשר את שניהם יחד</span>
                                    </label>
                                    <label for="image">Image</label>
                                    <input value="" type="file" name="image" class="fileinput-button" placeholder="">
                                </div>

                                <!-- vimeo -->
                                <div class="form-group">
                                    <label for="vimeo">וידאו מאתר  &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:100px;;" src="{{asset('images/designElements/vimeo-881495.svg')}}"></label>
                                    <input value="{{Input::old('vimeo')}}" type="link" name="vimeo" class="form-control" placeholder="להעתיק לפה את הלינק של ה Embed (שתף -> הטמע)">
                                </div>
                                <!-- youtube -->
                                <div class="form-group">
                                    <label for="youtube">וידאו מאתר  &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:120px;" src="{{asset('images/designElements/youtube.png')}}"></label>
                                    <input value="{{Input::old('youtube')}}" type="link" name="youtube" class="form-control" placeholder="להעתיק לפה את הלינק של ה Embed (שתף -> הטמע)">
                                </div>
                                <!-- alt -->
                                <div class="form-group">
                                    <label for="alt">טקסט חלופי לתמונה או לוידאו</label>
                                    <input value="{{Input::old('alt')}}" type="text" name="alt" class="form-control"  placeholder="בבקשה למלא תיאור קצר זה עוזר מאד עם גוגל">
                                </div>
                                <!-- author -->
                                <div class="form-group">
                                    <label for="author">כותב הפוסט</label>
                                    <input value="{{Input::old('author')}}" type="text" name="author" class="form-control"  placeholder="חובה למלא">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <a class="btn btn-danger" style="width: 50%;" href="{{url('cms/posts')}}">בטל</a>  
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                    <input type="submit" name="submit" class="btn btn-success" style="width: 50%;" value="צור פוסט">                         
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
