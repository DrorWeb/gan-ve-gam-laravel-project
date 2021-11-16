@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>יצירת&nbsp;<span>משתמש</span>&nbsp;חדש</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/users')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="role">תפקיד</label>
                                    <select name="role" id="userRole" class="form-control select2">
                                        <option value="4">משתמש רגיל</option>
                                        <option value="3">מנהל מערכת</option>
                                    </select>
                                </div>
                                <div id="adminWarning" class="form-group" style="display:none;">
                                    <label style="color:red; font-size: 1.3em;">שימי לב המשתמש שאת יוצרת מקבל תפקיד מנהל מערכת!!!</label>
                                </div>
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="firstName">שם משתמש</label>
                                    <input value="{{Input::old('firstName')}}" type="text" name="firstName" class="form-control" placeholder="">
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">כתובת אימייל</label>                               
                                    <input value="{{Input::old('email')}}" type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <!-- password -->
                                <div class="form-group">
                                    <label for="password">סיסמה</label>
                                    <input value="{{Input::old('password')}}" type="password" name="password" class="form-control" placeholder="">
                                </div>

                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/users')}}">בטל</a>  
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="צור משתמש">                         
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
