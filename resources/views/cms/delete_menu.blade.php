@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>בקשתן למחוק את &nbsp<span>{{$menuName['link']}}</span>&nbsp    מהתפריט</h3>
                <h3>האם אתן בטוחות???</h3>
            </div>
        </div>
    </section>
</div>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="nomargin" method="post" action="{{url('cms/menu/' . $menu_id)}}" autocomplete="on">
                    <input type="hidden" name="_method" value="DELETE">
                    <div class="clearfix">
                        {{csrf_field()}} 
                    </div>
                    <div class="col-md-12 text-center">
                        <a style="width:30%; margin-top: 5px;" class="btn btn-danger pull-left" href="{{url('cms/menu')}}">בטל וחזור לדף תפריטים</a>
                        <input style="width:30%;" type="submit" name="submit" class="btn btn-success pull-right" value="מחק תפריט">                         
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


