@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>יצירה/עריכה/מחיקת <span>תפריטים</span></h3>
            </div>
        </div>
    </section>
</div>
@if($menus)
<div class="row  text-center">
    <div class="col-md-3"> <br><br>
        <a href="{{url('cms/menu/create')}}" class="btn btn-success">הוסף תפריט חדש</a>
    </div>
    <div class="col-md-6">
        <div class="table-responsive ">
            <br><br>
            <table class="table table-bordered table-striped">
                <th class="text-center" style="font-size: 1.5em">תפריט</th>
                <th class="text-center" style="font-size: 1.5em">תפריט אב</th>
                <th class="text-center" style="font-size: 1.5em">פעולה</th>
                @foreach($menus as $row)
                <tr>
                    <td style="font-size: 1.2em">{{$row['link']}}</td>
                    <td style="font-size: 1.2em"></td>
                    <td>
                        <a href="{{url('cms/menu/'.$row['id'].'/edit')}}" title="עריכה" style="font-size: 1.2em; color:green"><i class="fa fa-pencil"></i>  </a> | 
                        <a href="{{url('cms/menu/'.$row['id'])}}" title="מחיקה" style="font-size: 1.2em; color:red">  <i class="fa fa-trash"> </i></a> 
                    </td>
                    @if($row['children'])
                    @foreach($row['children'] as $child)
                <tr>
                    <td style="font-size: 1.2em">{{$child['link']}}</td>
                    <td style="font-size: 1.2em">{{$row['link']}}</td>
                    <td>
                        <a href="{{url('cms/menu/'.$child['id'].'/edit')}}" title="עריכה" style="font-size: 1.2em; color:green"><i class="fa fa-pencil"></i>  </a> | 
                        <a href="{{url('cms/menu/'.$child['id'])}}" title="מחיקה" style="font-size: 1.2em; color:red">  <i class="fa fa-trash"> </i></a> 
                    </td>
                </tr>
                    @if($child['children'])
                    @foreach($child['children'] as $grandchild)
                    <tr>
                    <td style="font-size: 1.2em">{{$grandchild['link']}}</td>
                    <td style="font-size: 1.2em">{{$child['link']}}</td>
                    <td>
                        <a href="{{url('cms/menu/'.$grandchild['id'].'/edit')}}" title="עריכה" style="font-size: 1.2em; color:green"><i class="fa fa-pencil"></i>  </a> | 
                        <a href="{{url('cms/menu/'.$grandchild['id'])}}" title="מחיקה" style="font-size: 1.2em; color:red">  <i class="fa fa-trash"> </i></a> 
                    </td>
                </tr>
                    @endforeach
                    @endif
                @endforeach
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div> 
@endif
</div>
@endsection


