@extends('master')

@section ('slider')
<section id="slider" class="height-200" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/login.jpg')}}')">
        <div class="overlay dark-2"></div>
    </div>
</section>
@endsection

@section('content')
<section style="margin-top:-40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <div class="box-static box-border-top padding-30" style='border-color: #31B0D5'>
                    <div class="box-title margin-bottom-30 text-center">
                        <h2 class="size-20 color-4">כניסה לאזור הורים</h2>
                    </div>
                    <form class="nomargin" method="post" action="#" autocomplete="off">
                        <div class="clearfix">
                            {{csrf_field()}}
                            <input type="hidden" name="dest" value="<?= $dest; ?>">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">כתובת אימייל</label>
                                <input value="{{ Input::old('email') }}" type="text" name="email" class="form-control" placeholder="Email" dir="ltr" autofocus>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">סיסמה</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <input type="submit" name="submit" class="btn btn-info" value="התחבר">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection

