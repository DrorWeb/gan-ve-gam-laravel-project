@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>Edit</span>  User</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($user)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/users/'.$user['id'])}}" autocomplete="on">
                            <div class="clearfix">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="user_id" value="{{$user['id']}}">
                                {{csrf_field()}}
                               
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="firstName">שם</label>
                                    <input value="{{$user['firstName']}}" type="text" name="firstName" class="form-control" placeholder="">
                                </div>
                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">E-Mail</label>                               
                                    <input value="{{$user['email']}}" type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <!-- password -->
                                <div class="form-group">
                                    <label for="password">סיסמה<span style="color:red;"> (לא לגעת אם לא רוצים לשנות !!!)</span></label>
                                    <input value="{{$user['password']}}" type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="getNewsletters">ניוזלטר</label>
                                    <select name="getNewsletters" id="userRole" class="form-control select2">
                                        @if($user['getNewsletters'])
                                        <option value="1">מקבל ניוזלטר</option>
                                        <option value="0">לא מקבל ניוזלטר</option>
                                        @else
                                        <option value="0">לא מקבל ניוזלטר</option>
                                        <option value="1">מקבל ניוזלטר</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/users')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן משתמש">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <p>User Does Not Exist???</p>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
