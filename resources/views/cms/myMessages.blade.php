@extends('cms.cms_master')
@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>הודעות</span></h3>
            </div>
        </div>
    </section>
</div>
@if($messages)
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive" style="width: 100%; max-height: 550px;">
            <br><br>
            <table class="table table-bordered table-striped">
                <th style="font-size: 1.2em; width:3%;">#</th>
                <th style="font-size: 1.2em; width:10%;">שם</th>
                <th style="font-size: 1.2em; width:10%;">אימייל</th>
                <th style="font-size: 1.2em; width:10%;">נושא</th>
                <th style="font-size: 1.2em; width:50%;">הודעה</th>
                <th style="font-size: 1.2em; width:10%; text-align:center;">תאריך</th>
                <th style="font-size: 1.2em; width:7%; text-align:center;">פעולה</th>
                <th></th>
                @foreach($messages as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td  style="font-size:0.9em;">{{$row->subject}}</td>
                    <td  style="font-size:0.9em;">{{$row->message}}</td>
                    <td class="text-center">{{ Carbon\Carbon::parse($row->created_at)->format('d/m/Y') }}</td>
                    <td class="text-center" style="font-size: 1.2em;"><a id='albumCrud' class="" href="{{ url('cms/deleteMessage',$row->id) }}" data-toggle="tooltip" data-placement="bottom" title="מחק הודעה"><i class="fa fa-close" style="color: red;"></i></a></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div> 
@endif
</div>
@endsection


