@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>עריכת הפוסט</span></h3>
                <span style="font-size:2.2em"><i>{{ $post['title'] }}</i></span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px" >
                <div class=" col-md-6 col-md-offset-3 ">
                    <div class="box-static box-border-top padding-30"> 
                        <form class="nomargin" method="post" action="{{ url('cms/posts/' . $post['id']) }}" enctype="multipart/form-data" files="true"  autocomplete="on">
                            <div class="clearfix">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="post_id" value="{{ $post['id'] }}">
                                {{csrf_field()}}
                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title">כותרת</label>
                                    <input value="{{$post['title']}}" type="text" name="title" class="form-control" placeholder="title">
                                </div>
                                 <!-- keywords -->
                                <div class="form-group">
                                    <label for="keywords">מילות מפתח לגוגל</label>
                                    <input value="{{$post['keywords']}}" type="text" name="keywords" class="form-control" placeholder="צריך להפריד בין המילים או הביטויים בפסיק. לדוגמה - שעון, שעון יד, שעון קיר וכו'" >
                                </div>
                                <div class="row">
                                    <!-- DayOfTheMonth -->
                                    <div class="form-group col-md-2">                                 
                                        <label for="dayDate">תאריך (יום)</label>
                                            <!--<input value="{{Input::old('dayDate')}}" type="number" min="1" max="31" name="dayDate" class="form-control" placeholder="1-31">-->
                                        <select  name="dayDate">
                                            <option value="{{$post['dayDate']}}" class="form-control">{{$post['dayDate']}}</option>
                                            @for($day=1; $day<=31; $day++)
                                            @if($day != $post['dayDate'])
                                            <option value="{{$day}}" class="form-control"> {{$day}} </option>
                                            @endif
                                            @endfor
                                        </select>
                                    </div>
                                    <!-- Month -->
                                    <div class="form-group col-md-2">                               
                                        <label for="month">חודש</label>
                                        <select  name="month">
                                            <option value="{{$post['month']}}" class="form-control">{{$post['month']}}</option>
                                            @foreach($months as $month)
                                            @if($month != $post['month'])
                                            <option value="{{$month}}" class="form-control"> {{$month}} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Year -->
                                    <div class="form-group col-md-2"> 
                                        <?php $currentYear = date('Y'); $years = $currentYear+30;?>
                                        <label for="year">שנה</label>
                                        <select  name="year">
                                            <option value="{{$post['year']}}" class="form-control">{{$post['year']}}</option>
                                            @for($year=$currentYear; $year<=$years; $year++)
                                             @if($year != $post['year'])
                                            <option value="{{$year}}" class="form-control"> {{$year}} </option>
                                             @endif
                                            @endfor
                                        </select>
                                    </div>
                                    
                                </div>
                                <!-- תקציר -->
                                <div class="form-group">
                                    <label for="short">תקציר</label>
                                    <textarea type="text" name="short" class="form-control" placeholder="תקציר" rows="10">{!!$post['short']!!}</textarea>
                                </div>
                                <!-- article -->
                                <div class="form-group">
                                    <label for="article">פוסט מלא</label>                               
                                     <textarea name="article" placeholder="פוסט מלא" class="summernote form-control" data-height="400">{!!$post['article']!!}</textarea>
                                </div><br>
                                <!-- image -->
                                <div class="form-group">
                                    <label class="text-center" style="font-size:1.5em">אפשר לצרף לפוסט תמונה  <span style="color:red;">או </span> וידאו !!! <br> 
                                        <span style="color:red; ">אי אפשר את שניהם יחד</span>
                                    </label>
                            <br>    <label for="image">תמונה</label>
                                    <img width="150px" border="0" src="{{asset('images/blogPosts/' . $post['image'])}}"><br><br>
                                    <input value="" type="file" name="image" class="fileinput-button" placeholder="">
                                </div>
                                <!-- vimeo -->
                                <div class="form-group">
                                    <label for="vimeo">וידאו מאתר  &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:100px;;" src="{{asset('images/designElements/vimeo-881495.svg')}}"></label>
                                    <input value="{{$post['vimeo']}}" type="link" name="vimeo" class="form-control" placeholder="להעתיק לפה את הלינק של ה Embed (שתף -> הטמע)">
                                </div>
                                <!-- youtube -->
                                <div class="form-group">
                                    <label for="youtube">וידאו מאתר  &nbsp;&nbsp;<img class="img-responsive margin-bottom-10" style="width:120px;" src="{{asset('images/designElements/youtube.png')}}"></label>
                                    <input value="{{$post['youtube']}}" type="link" name="youtube" class="form-control" placeholder="להעתיק לפה את הלינק של ה Embed (שתף -> הטמע)">
                                </div>
                                <!-- alt -->
                                <div class="form-group">
                                    <label for="alt">טקסט חלופי לתמונה או לוידאו</label>
                                    <input value="{{$post['alt']}}" type="text" name="alt" class="form-control" placeholder="בבקשה למלא תיאור קצר זה עוזר מאד עם גוגל">
                                </div>
                                
                                <!-- author -->
                                <div class="form-group">
                                    <label for="author">כותב הפוסט</label>
                                    <input value="{{$post['author']}}" type="text" name="author" class="form-control" placeholder="חובה למלא">
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <a class="btn btn-danger" style="width: 50%;" href="{{url('cms/posts')}}">בטל</a>  
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                    <input type="submit" name="submit" class="btn btn-success" style="width: 50%;" value="עדכן פוסט">                         
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
