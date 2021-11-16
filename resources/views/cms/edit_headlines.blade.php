@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> כותרת</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($headline)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/headlines/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="headline_id" value="{{$headline->id}}">
                                <!-- section -->
                                <div class="form-group">
                                    <label for="section">סעיף</label>                               
                                    <input disabled="" value="{{$headline->section}}" type="text" name="section" class="form-control" placeholder="">
                                </div>
                                <!-- healine -->
                                <div class="form-group">
                                    <label for="headline">כותרת </label>
                                    <input value="{{$headline->headline}}" type="text" name="headline" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/headlines')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן כותרת">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 @else
                 <h1 class="text-center color-3">לא נמצאה השקופית - כנראה יש בעיה נא לעשות צילום מסך ולדבר עם דרור</h1>
                 @endif
            </div>
        </div>
    </section>
</div>
@endsection
