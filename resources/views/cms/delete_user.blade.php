@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>אתן בטוחות שאתן רוצות למחוק את המשתמש 
                    <br>  <span>{{$user['firstName']}}</span>
                </h3>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="container">
        <div class="row" style="margin-top:-40px;">
            <div class="col-md-6 col-md-offset-3">
                <div class=" padding-30">
                    <form class="nomargin" method="post" action=" {{url('cms/users/' . $user_id)}}" autocomplete="on">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="clearfix">
                            {{csrf_field()}}                      
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a style="width:30%; margin-top:5px;" class="btn btn-danger pull-left size-20" href="{{url('cms/users')}}">בטל וחזור</a>
                                <input style="width:30%;" type="submit" name="submit" class="btn btn-success size-20 pull-right" value="מחק משתמש">                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


