@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת <span>חוות דעת</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                         <form class="nomargin" method="post" action="{{url('cms/testamonial/store')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                               
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name">שם </label>                               
                                    <input value="{{Input::old('name')}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details"> חוות דעת </label>
                                    <div class="fancy-form">
                                            <textarea  name="details" rows="10" class="form-control word-count text-right" data-maxlength="30" data-info="textarea-words-info">{{Input::old('details')}}</textarea>
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
                                        <option value="1">הצג חוות דעת בדף הבית</option>
                                        <option value="0">הסתר מדף הבית</option>                                        
                                    </select>
                                    <i class="fancy-arrow-double"></i>
                                </div>
                                 </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/testamonials')}}">בטל</a> 
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="צור חוות דעת">                         
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
