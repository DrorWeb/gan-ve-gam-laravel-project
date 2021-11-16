@extends('cms.cms_master')

@section('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>שירים</span></h3>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <br><br>
    
    <div class="col-md-12 margin-top-50">
        <div class="col-md-2 margin-bottom-30">  
            <a href="{{url('cms/songs/create')}}" class="btn btn-success" style="font-size:1.2em;">הוספת שיר חדש</a>
        </div>
        <div class="col-md-6">
            @if($list)
            <table class="table table-bordered size-15 text-center">
                <th class="text-center">שם השיר</th>
                <th class="text-center">עריכה / מחיקה</th>
                <th></th>
                @foreach($list as $song)
                <tr>
                    <td>{{$song->title}}</td>
                    <td class="text-center">
                        <a href="{{url('cms/songs/'.$song->id.'/edit')}}" title="עריכה" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a> | 
                        <a href="{{url('cms/songs/'.$song->id)}}" title="מחק"  style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"> </i></a> 
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </table>

        </div>    
    </div>    

    @else
    <p>אין שירים באתר עדיין</p>
    @endif

</div>
@endsection
