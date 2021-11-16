@extends('cms.cms_master')

@section('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>יצירה/עריכה/מחיקת<span>&nbsp; משתמשים</span></h3>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <br><br>
    <div class="row">
            <div class="col-md-12">
                <div class="box-static box-border-top">
                    <p class="text-center" style="font-size: 2em; margin-bottom: -10px;">
                        <strong>
                        לנוחיותכן, בלחיצה על כתובת המייל יפתח מייל למשתמש החדש עם נושא <br>
<span class="color-1">ברוך הבא לאתר גן וגם</span>
                        </strong>
                    </p>
                </div>    
            </div>
        </div><br>
    <div class="col-md-12 margin-top-50">
        <div class="col-md-2 margin-bottom-30">  
            <a href="{{url('cms/users/create')}}" class="btn btn-success" style="font-size:1.2em;">יצירת משתמש חדש</a>
        </div>
        <div class="col-md-6 col-md-offset-1">
            @if($users)
                <table class="table table-bordered size-15">
                    <th>שם משתמש</th>
                    <th>אימייל</th>
                     <th class="text-center">הרשאות</th>
                     <th class="text-center">רשום לניוזלטר</th>
                    <th class="text-center">עריכה / מחיקה</th>
                    <th></th>
                    @foreach($users as $user)
                    @if($user->firstName)
                    <tr>
                        <td>{{$user->firstName}}</td>
                        <td><a href="mailto:{{$user->email}}?Subject=ברוך%20הבא%20לאתר%20גן%20וגם" target="">{{$user->email}}</a></td>
                        <td class="text-center">{{$user->permitions}}</td>
                        <td class="text-center">
                            @if($user->getNewsletters)
                            <i class="fa fa-check-square size-20" style="color:green;"></i>
                            @else
                            <i class="fa fa-close size-20" style="color:red;"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{url('cms/users/'.$user->id.'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a> | 
                            <a href="{{url('cms/users/'.$user->id)}}" title="Delete"  style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"> </i></a> 
                        </td>
                        <td></td>
                    </tr>
                     @endif
                    @endforeach
                </table>
            
        </div>    
    </div>    
   
@else
<p>אין משתמשים באתר עדיין</p>
@endif

</div>
@endsection


