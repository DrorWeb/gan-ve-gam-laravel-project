@extends('cms.cms_master')

@section('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span>&nbsp;סליידר שיקופיות&nbsp;</span>בדף הבית</h3>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="box-static box-border-top">
                <p class="text-center" style="font-size: 2em; margin-bottom: -10px;">
                    <strong>הוראות לעריכת סליידר שיקופיות</strong>
                </p> <br>
                <p><strong>תמונה - </strong>המימדים של התמונה צריכים להיות 1920X720 פיקסלים</p>
                <p><strong>כותרת - </strong> קצרה וקולעת!!! </p>
                <p><strong>תת-כותרת - </strong>יש מקום להרבה טקסט אז אפשר לפרט... אך שימו לב !!! הטקסט הזה נעלם בפלאפון מפאת חוסר מקום!!!</p>
            </div>    
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 60px; margin-top:50px;"> 
            <a href="{{url('cms/homeSlider/create')}}" class="btn btn-success" style="font-size:1.2em;">
                יצירת שקופית חדשה
            </a>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        @if($slides)
        <div class="table-responsive margin-bottom-60">
        <table class="table table-bordered table-striped">
            <th style="max-width:250px;">תמונה</th>
            <th>כותרת</th>
            <th>תת-כותרת</th>
            <th class="text-center">פעולה</th>
            <th></th>
            @foreach($slides as $slide)
            <tr>
                <td><img src="{{asset('images/sliders/' . $slide['image'])}}" style="max-width:250px;"></td>
                <td>{{$slide['title']}}</td>
                <td>{{$slide['Description']}}</td>
                <td class="text-center">
                    <a href="{{url('cms/homeSlider/' .$slide['id'].'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a> | 
                    <a href="{{url('cms/homeSlider/' . $slide['id'])}}" title="Delete" style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"></i></a> 
                </td>
                <td></td>
            </tr>
            @endforeach
        </table>
        </div>
        @endif
    </div>    
</div>    
</div>
@endsection


