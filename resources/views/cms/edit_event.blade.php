@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת <span>אירוע</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/events/' . $event['id'])}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="album_id" value="{{$event['id']}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- title -->
                                        <div class="form-group">
                                            <label for="title">כותרת</label>
                                            <input value="{{$event['title']}}" type="text" name="title" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <!-- location -->
                                        <div class="form-group">
                                            <label for="location">מיקום</label>
                                            <input value="{{$event['location']}}" type="text" name="location" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Image -->
                                        <div class="form-group">
                                            <label for="image">תמונה</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Alt -->
                                        <div class="form-group">
                                            <label for="alt">טקסט חלופי לתמונה</label>                               
                                            <input value="{{$event['image_alt']}}" type="text" name="alt" class="form-control" placeholder="">
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Price -->
                                        <div class="form-group">
                                            <label for="price">מחיר</label>                               
                                            <input value="{{$event['price']}}" type="text" name="price" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <!-- day -->
                                        <div class="form-group">
                                            <label for="day">יום&nbsp;&nbsp;<span>  (חובה)</span></label>
                                            <select id="selectorDror" name="day" class="form-control select2">
                                                <option name='day' value='{{$event['day']}}'>{{$event['day']}}</option>
                                                <?php
                                                for ($dxd123 = 1; $dxd123 <= 31; $dxd123++) {
                                                    if ($dxd123 != $event['day']) {
                                                        echo "<option name='day' value='$dxd123'>$dxd123</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="month">חודש &nbsp;&nbsp;(חובה)</label>
                                            <select name="month" class="form-control select2" required="">
                                                <option name='month' value='{{$event['month']}}'>{{$event['month']}}</option>
                                                <option name='month' value=''> </option>
                                                @foreach($months as $month)
                                                @if($month->name != $event['month'])
                                                <option name='month' value='{{$month->name}}'>{{$month->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- hour -->
                                        <div class="form-group">
                                            <label for="hour">שעות הפעילות</label>                               
                                            <input value="{{$event['hour']}}" type="text" name="hour" class="form-control" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- age  -->
                                        <div class="form-group">
                                            <label for="age">גילאים</label>
                                            <input value="{{$event['age']}}" type="text" name="age" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                </div>
                                <!-- short -->
                                <div class="form-group">
                                    <label for="short">תקציר - ממליץ לא לעבור 110 תווים</label>
                                    <textarea name="short" placeholder="" class="form-control" rows="5" required="">{{$event['short']}}</textarea>
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details">פרטים בהרחבה</label>
                                    <textarea name="details" placeholder="" class="form-control" rows="5" required="">{{$event['details']}}</textarea>
                                </div>
                                
                                
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                    <div class="col-md-12">
                                        <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/events')}}">בטל</a>  
                                        <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="שמור">                         
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
