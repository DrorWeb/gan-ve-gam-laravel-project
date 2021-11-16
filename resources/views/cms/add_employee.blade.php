@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת <span>צוות</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/employees')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <!-- color -->
                                <div class="form-group">
                                    <label for="color">צבע הכרטיס   - <span style="font-size: 1.5em;">{{Input::old('color')}}</span></label>
                                    <select name="color" class="form-control select2">
                                        <option name="color" value="NULL">ללא צבע</option>
                                        <option name="color" value="danger">אדום</option>
                                        <option name="color" value="warning">כתום</option>
                                        <option name="color" value="info">תכלת</option>
                                        <option name="color" value="success">ירוק</option>
                                    </select>
                                </div><br><br><br><br>
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">שם</label>
                                    <input value="{{Input::old('name')}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- job  -->
                                <div class="form-group">
                                    <label for="job">תפקיד</label>
                                    <select class="form-control select2" name="job">
                                        <option class="form-control" name="job" value="סייעת">סייעת</option>
                                        <option class="form-control" name="job" value="גננת מוסמכת">גננת מוסמכת</option>
                                    </select>
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details">פרטים</label>                               
                                    <input value="{{Input::old('details')}}" type="text" name="details" class="form-control" placeholder="">
                                </div>
                                <!-- fullDetails -->
                                <div class="form-group">
                                    <label for="fullDetails">הרחבה - לא חובה</label>
                                    <textarea name="fullDetails" placeholder="" class="form-control" rows="5">{{Input::old('fullDetails')}}</textarea>
                                </div>
                                <!-- Image -->
                                <div class="form-group">
                                    <label for="image">תמונה</label>
                                    <input type="file" name="image">
                                </div>
                                <!-- Alt -->
                                <div class="form-group">
                                    <label for="alt">תיאור תמונה</label>                               
                                    <input value="{{Input::old('alt')}}" type="text" name="alt" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/employees')}}">בטל</a>  
                                    <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="צור פרופיל עובדת">                         
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
