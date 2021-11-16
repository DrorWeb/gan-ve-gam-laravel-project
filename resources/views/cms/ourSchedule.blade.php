
@extends('cms.cms_master')


@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>לוח הזמנים של הגן</span></h3>
            </div>
        </div>
    </section>
</div>
<br>

<div class="container-fluid">
    @if($scheduleItems)<br>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="table-responsive" style="margin-top:-10px;"> 
                <table class="table table-bordered size-15">
                    <th style="width: 5%;">שעות</th>
                    <th style="width: 35%;">כותרת</th>
                    <th style="width: 45%;">פירוט</th>
                    <th class="text-center" style="width: 15%;">פעולה</th>
                    <th></th>
                    @foreach($scheduleItems as $schedule)
                    <tr>
                        <td>{{$schedule['time']}}</td>
                        <td>{{$schedule['title']}}</td>
                        <td>{{$schedule['description']}}</td>
                        <td class="text-center">
                            <a href="{{url('cms/schedule/' . $schedule['id'] . '/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil"></i>&nbsp; עריכה</a>    | 
                            <a href="{{url('cms/schedule/' . $schedule['id'])}}" title="Delete" style="color:red">מחיקה &nbsp;<i class="fa fa-trash" style="font-size:1.2em;"></i></a>              
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="row padding-30">
        
            <div class="col-md-6"><br><br>
                <a class="btn btn-success" href="{{url('cms/schedule/create')}}">לחץ להוספת שורה לטבלת לוח הזמנים</a><br><br><br><br>
            </div>
        
    </div>
@else
<p>oopps something went wrong - schedule</p>
@endif
</div>
@endsection


@section ('scripts')

<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = "lib/Theme/assets/plugins/"</script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/view/demo.shop.js')}}"></script>
@endsection
     