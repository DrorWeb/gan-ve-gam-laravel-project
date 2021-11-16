@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>הוספת <span>שיר</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/songs')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                
                                <div class="row">
                                    <div class="form-group col-md-12 text-center">
                                        <h4 class="color-3">
                                            בניגוד לאלבומי תמונות שאנו מוסיפים פלייליסטים,
                                            <br>
                                            פה אנחנו מוסיפים שירים בבודדים...
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                        <!-- title -->
                                        <div class="form-group col-md-12">
                                            <label for="title">שם השיר</label>
                                            <input value="{{Input::old('title')}}" type="text" name="title" class="form-control" placeholder="" required="">
                                        </div> 
                                </div>
                                <div class="row">
                                    <!-- youtube url -->
                                    <div class="form-group col-md-12">
                                        <label for="url">העתיקי והדביקי את הלינק של הטמעת השיר 
                                            <span style='color:red;'>&nbsp; (שתף&nbsp;->&nbsp;הטמע&nbsp;->&nbsp;העתק) </span>
                                        </label>
                                        <input value="{{Input::old('url')}}" type="text" name="url" class="form-control" placeholder="" required="">
                                    </div> 
                                </div>
                            
                            <div class="row">
                                <div class="row margin-top-50">
                                    <div class="form-group col-md-12">
                                        <a class="btn btn-danger pull-left" style="width:30%;" href="{{url('cms/songs')}}">בטל</a>  
                                        <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="הוסף שיר">                         
                                    </div>
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
