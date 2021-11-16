@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span>&nbsp; @if($about2edit){{$about2edit->title}}@endif </span> דף אודות</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($about2edit)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/about/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="about_id" value="{{$about2edit->id}}">
                               
                                <div class="form-group">
                                    <label for="title">כותרת (חובה) </label>                               
                                    <input value="{{$about2edit->title}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                               <div class="form-group">
                                    <label for="article">תוכן (מה שבא לך, הכל כשר...) </label>                               
                                    <textarea rows="10" type="text" name="article" class="form-control" placeholder="">{{$about2edit->article}}</textarea>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/about')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן ">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <h1 class="text-center color-3"> כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
