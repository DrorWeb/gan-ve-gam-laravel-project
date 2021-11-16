@extends('cms.cms_master')

@section('cmsCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת <span>כותרת מיומנות</span> דף אודות</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/about/capabilityHeadline/update')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="row clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="title">כותרת</label>                               
                                    <input value="{{$capabilityHeadline->title}}" type="text" name="title" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="row margin-top-50">
                                    <div class="col-md-12">
                                        <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/about')}}">בטל</a>  
                                        <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="שמור">                         
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
