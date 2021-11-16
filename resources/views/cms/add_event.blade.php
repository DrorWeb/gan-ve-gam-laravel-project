@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת <span>אירוע</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/events')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- title -->
                                        <div class="form-group">
                                            <label for="title">כותרת</label>
                                            <input value="{{Input::old('title')}}" type="text" name="title" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <!-- location -->
                                        <div class="form-group">
                                            <label for="location">מיקום</label>
                                            <input value="{{Input::old('location')}}" type="text" name="location" class="form-control" placeholder="" required="">
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
                                            <input value="{{Input::old('alt')}}" type="text" name="alt" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Price -->
                                        <div class="form-group">
                                            <label for="price">מחיר</label>                               
                                            <input value="{{Input::old('price')}}" type="text" name="price" class="form-control" placeholder="">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- day -->
                                        <div class="form-group">
                                            <label for="day">יום <span style="font-size: 1.5em;">{{Input::old('day')}}</span></label>
                                            <select name="day" class="form-control select2" required="">
                                                <?php
                                                for ($d = 1; $d <= 31; $d++) {
                                                    echo "<option name='day' value='$d'>$d</option>";  }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="month">חודש <span style="font-size: 1.5em;">{{Input::old('month')}}</span></label>
                                            <select name="month" class="form-control select2" required="">
                                                <option name='month' value='ינואר'>ינואר</option>
                                                <option name='month' value='פברואר'>פברואר</option> 
                                                <option name='month' value='מרץ'>מרץ</option> 
                                                <option name='month' value='אפריל'>אפריל</option> 
                                                <option name='month' value='מאי'>מאי</option> 
                                                <option name='month' value='יוני'>יוני</option> 
                                                <option name='month' value='יולי'>יולי</option> 
                                                <option name='month' value='אוגוסט'>אוגוסט</option> 
                                                <option name='month' value='ספטמבר'>ספטמבר</option> 
                                                <option name='month' value='אוקטובר'>אוקטובר</option> 
                                                <option name='month' value='נובמבר'>נובמבר</option> 
                                                <option name='month' value='דצמבר'>דצמבר</option> 
                                            </select>
                                        </div> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- hour -->
                                        <div class="form-group">
                                            <label for="hour">שעות הפעילות</label>                               
                                            <input value="{{Input::old('hour')}}" type="text" name="hour" class="form-control" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- age  -->
                                        <div class="form-group">
                                            <label for="age">גילאים</label>
                                            <input value="{{Input::old('age')}}" type="text" name="age" class="form-control" placeholder="" required="">
                                        </div> 
                                    </div>
                                </div>
                                <!-- short -->
                                <div class="form-group">
                                    <label for="short">תקציר - ממליץ לא לעבור 110 תווים</label>
                                    <textarea name="short" placeholder="" class="form-control" rows="5" required="">{{Input::old('short')}}</textarea>
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details">פרטים בהרחבה</label>
                                    <textarea name="details" placeholder="" class="form-control" rows="5" required="">{{Input::old('details')}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                    <div class="col-md-12">
                                        <a class="btn btn-danger pull-left" style="width:30%;" href="{{url('cms/events')}}">בטל</a>  
                                        <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="צור  אירוע">                         
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
