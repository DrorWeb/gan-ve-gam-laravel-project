@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>בטוחות שאתן רוצות למחוק את <span>חוות הדעת ?</span></h3>   
            </div>
        </div>
    </section>
</div>



<br><br>  
<div class="container-fluid">

    <div class="col-md-4 col-md-offset-4">

        <div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large box-icon-content">
            <div class="box-icon-title">
                
                <h2 style="color: darkslategray;">{{$testamonial->name}}</h2>
            </div>
            <p>{{$testamonial->details}}</p>
        </div>


        <a style="width:30%; font-size: 1.2em; margin-top:5px;" class="btn btn-danger pull-left" href="{{url('cms/testamonials')}}">בטל</a>
        <a style="width:30%; font-size: 1.2em; margin-top:5px;"  class="btn btn-success pull-right" href="{{url('cms/testamonials/' . $testamonial->id . '/delete')}}">מחק</a>
    </div>


</div>






<div class="row">
    <div class="col-md-12">

    </div>
</div>


</div>
@endsection


