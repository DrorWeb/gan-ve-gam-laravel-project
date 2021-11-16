@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>בטוחה שאת רוצה למחוק את הפוסט</h3>
                <h4> <span>{{$postName['title']}}</span>  </h4>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="container">
        <div class="row" style="margin-top:-40px;">
            <div class="col-md-6 col-md-offset-3">
                <div class=" padding-30">
                    <form class="nomargin" method="post" action=" {{url('cms/posts/' . $post_id)}}" autocomplete="on">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="clearfix">
                            {{csrf_field()}}                      
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                <a class="btn btn-danger" style="width: 50%;" href="{{url('cms/posts')}}">בטל</a>  
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <input type="submit" name="submit" class="btn btn-success" style="width: 50%;"  value="מחק">                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


