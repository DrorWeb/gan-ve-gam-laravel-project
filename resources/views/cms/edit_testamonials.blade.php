@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span> חוות דעת</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                 @if($testamonial)
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/testamonials/update')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               <input type="hidden" name="id" value="{{$testamonial->id}}">
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name">שם </label>                               
                                    <input value="{{$testamonial->name}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details"> חוות דעת </label>
                                    <div class="fancy-form">
                                        <textarea  name="details" rows="10" class="form-control word-count text-right" data-maxlength="30" data-info="textarea-words-info">{{$testamonial->details}}</textarea>
                                            <span class="fancy-hint size-11 text-muted">
                                            <strong>עד 30 מילים</strong>
                                            <span class="pull-right">
                                                <span id="textarea-words-info">0/30</span> מילים
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- display -->
                                <div class="form-group">
                                    <label for="homeDisplay"> מצב תצוגה </label>
                                <div class="fancy-form fancy-form-select">
                                    
                                    <select class="form-control select2" name="homeDisplay">  
                                        @if($testamonial->homeDisplay)
                                        <option value="1">הצג באתר</option>
                                        <option value="0">הסתר</option>        
                                        @else 
                                        <option value="0">הסתר</option>     
                                        <option value="1">הצג באתר</option>
                                        @endif
                                    </select>
                                    <i class="fancy-arrow-double"></i>
                                </div>
                                 </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/testamonials')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן עובדה">                         
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
