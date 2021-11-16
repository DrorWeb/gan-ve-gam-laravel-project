@extends('cms.cms_master')


@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span>&nbsp;הצוות</span></h3>
            </div>
        </div>
    </section>
</div>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center margin-top-20 margin-bottom-20"><br>
                <a class="btn btn-success" style="font-size:1.2em;" href="{{url('cms/employees/create')}}"><b>הוספת עובדת חדשה</b></a>
            </div>
        </div>
    </div>
    @if($employees)<br>
    <div class="row">
        <div class="table-responsive" style="margin-top:-10px;"> 
            <table class="table table-bordered ">
                <th>צבע</th>
                <th>שם</th>
                <th>תפקיד</th>
                <th>פרטים</th>
                <th>הרחבה</th>
                <th>תמונה</th>
                <th>תיאור תמונה</th>
                <th style=" border:1px solid grey">פעולה</th>
                @foreach($employees as $employee)
                <tr>
                    <td class="bg-{{$employee['color']}}"></td>
                    <td>{{$employee['name']}}</td>
                    <td>{{$employee['job']}}</td>
                    <td style="width:20%">{{$employee['details']}}</td>
                    <td style="width:20%">{{$employee['fullDetails']}}</td>
                    <td style="width:15%">
                        <img width="100%" border="0" src="{{asset('images/employees/' . $employee['image'])}}">
                    </td>
                    <td style="width:10%">{{$employee['alt']}}</td>
                    <td style="background-color: #ccffff; border:1px solid grey" class="text-center">
                        <br><br><a href="{{url('cms/employees/'.$employee['id'].'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a><br>
                        <br><br><a href="{{url('cms/employees/'.$employee['id'])}}" title="Delete" style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"></i></a> <br><br>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>



@else
<p>oopps something went wrong - employees</p>
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
     