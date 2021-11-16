@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>בטוחות שאתן רוצות למחוק את השקופית עם הכותרת &nbsp<span>{{$slide['title']}} ???</span></h3>
               
            </div>
        </div>
    </section>
</div>

<section>
    <div class="container">

        <div class="row" style="margin-top:-40px;">

            <div class="col-md-6 col-md-offset-3">

                <div class=" padding-30">

                    <form class="nomargin" method="post" action="{{url('cms/homeSlider/' . $slide['id'])}}" autocomplete="on">

                        <input type="hidden" name="_method" value="DELETE">

                        <div class="clearfix">
                            {{csrf_field()}}                      
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-danger pull-left" style="width:30%; font-size: 1.2em; margin-top: 5px;"  href="{{url('cms/homeSlider')}}">בטל</a>  
                                <input type="submit" name="submit" class="btn btn-success pull-right" style="width:30%; font-size: 1.2em;" value="מחק שקופית">                         
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection


