@extends('master')
@section ('1slider')
<section id="slider" class="height-150" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/editMyUser.jpg')}}');"></div>
</section>
@endsection
@section ('content')
<div class="row">
    <section class="heading-title heading-arrow-bottom" style="padding-top: 150px;">
        <div class="container-fluid">
            <div class="text-center">
                <h3> <span>עריכת פרופיל משתמש</span>  </h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container hidden-sm hidden-xs">
            <div class="row" style="margin-top:-40px;">
                 @if($userDetails)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('user/update')}}" autocomplete="on">
                            <div class="clearfix">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="user_id" value="{{$userDetails['id']}}">
                                {{csrf_field()}}
                               
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="firstName">שם</label>
                                    <input value="{{$userDetails['firstName']}}" type="text" name="firstName" class="form-control" placeholder="">
                                </div>
                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">E-Mail</label>                               
                                    <input value="{{$userDetails['email']}}" type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>שינוי סיסמה</label>   
                                    <select name="passwordChange" id="passChangeLG" class="form-control select2">
                                        <option value="0">לא</option>
                                        <option value="1">כן</option>
                                    </select>

                                </div>

                                <div id="hideOrShowLG"  style="display:none;">
                                    <!-- oldPassword -->
                                    <div class="form-group">
                                        <label for="oldPassword">הזן סיסמה ישנה</label>
                                        <input value="" type="oldPassword" name="oldPassword" class="form-control">
                                    </div>
                                    <!-- newPassword -->
                                    <div class="form-group">
                                        <label for="newPassword">הזן סיסמה חדשה</label>
                                        <input value="" type="newPassword" name="newPassword" class="form-control">
                                    </div>
                                    <!-- Verify newPassword -->
                                    <div class="form-group">
                                        <label for="reNewPassword">הזן סיסמה חדשה שוב</label>
                                        <input value="" type="reNewPassword" name="reNewPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="getNewsletters">ניוזלטר</label>
                                    <select name="getNewsletters" id="userRole" class="form-control select2">
                                        @if($userDetails['getNewsletters'])
                                        <option value="1">מעוניין לקבל ניוזלטר</option>
                                        <option value="0">לא מעוניין לקבל ניוזלטר</option>
                                        @else 
                                        <option value="0">לא מעוניין לקבל ניוזלטר</option>
                                        <option value="1">מעוניין לקבל ניוזלטר</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('/')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן משתמש">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @endif
            </div>
        </div>
        <div class="container hidden-md hidden-lg">
            <div class="row" style="margin-top:-40px;">
                 @if($userDetails)
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('updateMyUser/'.$userDetails['id'])}}" autocomplete="on">
                            <div class="clearfix">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="user_id" value="{{$userDetails['id']}}">
                                {{csrf_field()}}
                               
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="firstName">שם</label>
                                    <input value="{{$userDetails['firstName']}}" type="text" name="firstName" class="form-control" placeholder="">
                                </div>
                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">E-Mail</label>                               
                                    <input value="{{$userDetails['email']}}" type="text" name="email" class="form-control" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                    <label>שינוי סיסמה</label>   
                                    <select name="passwordChange" id="passChange" class="form-control select2">
                                        <option value="0">לא</option>
                                        <option value="1">כן</option>
                                    </select>

                                </div>

                                <div id="hideOrShow"  style="display:none;">
                                    <!-- oldPassword -->
                                    <div class="form-group">
                                        <label for="oldPassword">הזן סיסמה ישנה</label>
                                        <input value="" type="oldPassword" name="oldPassword" class="form-control">
                                    </div>


                                    <!-- newPassword -->
                                    <div class="form-group">
                                        <label for="newPassword">הזן סיסמה חדשה</label>
                                        <input value="" type="text" name="newPassword" class="form-control">
                                    </div>
                                    <!-- Verify newPassword -->
                                    <div class="form-group">
                                        <label for="reNewPassword">הזן סיסמה חדשה שוב</label>
                                        <input value="" type="reNewPassword" name="reNewPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="getNewsletters">ניוזלטר</label>
                                    <select name="getNewsletters" id="userRole" class="form-control select2">
                                        <option value="1">מקבל ניוזלטר</option>
                                        <option value="0">לא מקבל ניוזלטר</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <a class="btn btn-danger" style="width:49%" href="{{url('/')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success" style="width:49%" value="עדכן">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @endif
            </div>
        </div>
    </section>
</div>
@include('inc.footer')
@endsection

@section ('scripts')
<script type="text/javascript" src="{{asset('js/myScripts.js')}}"></script>
@endsection
