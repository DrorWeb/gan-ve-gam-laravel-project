@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>בטוחות שאתן רוצות למחוק את<br> 
                    <image style="width:150px" src="{{asset('images/employees/' . $employee['image'])}}">
                    <span>{{$employee['name']}}</span>
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
                    <form class="nomargin" method="post" action=" {{url('cms/employees/' . $employee['id'])}}" autocomplete="on">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="clearfix">
                            {{csrf_field()}}                      
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a style="width:30%; font-size: 1.2em; margin-top:5px;" class="btn btn-danger pull-left" href="{{url('cms/employees')}}">בטל</a>
                                <input style="width:30%; font-size: 1.2em;" type="submit" name="submit" class="btn btn-success pull-right" value="מחק">                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


