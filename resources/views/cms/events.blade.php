@extends('cms.cms_master')

@section('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>אירועי החודש</span></h3>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <br><br>
    
    <br>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 60px; margin-top:50px;"> 
            <a href="{{url('cms/events/create')}}" class="btn btn-success" style="font-size:1.2em;">
               להוספת אירוע
            </a>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        @if($events)
        <div class="table-responsive margin-bottom-60">
        <table class="table table-bordered table-striped">
            <th style="width: 10%">תמונה</th>
            <th style="width: 10%">תאריך</th>
            <th style="width: 20%">כותרת</th>
            <th style="width: 20%">מיקום</th>
             <th style="width: 30%">פרטים</th>
              <th style="width: 10%">עריכה / מחיקה</th>
               <th></th>
            @foreach($events as $event)
            <tr>
                <td><img class="thumbnail fancybox" src="{{asset('images/events/240X240/' . $event['image'])}}" style="max-width: 150px;"></td>
                <td>{{$event['day']}}- ב{{$event['month']}}</td>
                <td>{{$event['title']}}
                    <br><br><br>
                    <table class="table ">
                        <th>גילאים</th>
                        <th>שעה</th>
                         <th>מחיר</th>
                        <tr>
                            <td>{{$event['age']}}</td>
                            <td>{{$event['hour']}}</td>
                            <td>{{$event['price']}}</td>
                        </tr>
                    </table>
                </td>
                <td>{{$event['location']}}</td>
                <td>{{$event['details']}}</td>
                <td class="text-center">
                    <a href="{{url('cms/events/' .$event['id'].'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a> | 
                    <a href="{{url('cms/events/' . $event['id'])}}" title="Delete" style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"></i></a> 
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


