@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>פוסטים לבלוג</span></h3>
            </div>
        </div>
    </section>
</div>

<div class="row text-center"><br><br>
    <div class="col-md-2"><br><br>
        <a href="{{url('cms/posts/create')}}" class="btn btn-success" style="font-size:1.2em;">להוספת פוסט חדש </a>
    </div>
    <div class="col-md-8">
        @if($post)
        <div class="row  text-center">
            <div class="col-md-12">
                <div class="table-responsive ">
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <th class="text-center" style="font-size: 1.5em">כותרת</th>
                        <th class="text-center" style="font-size: 1.5em;" >מתאריך</th>
                         <th class="text-center" style="font-size: 1.5em">פעולה</th>
                         <th></th>
                        @foreach($post as $row)
                        <tr style="font-size: 1.1em;">
                            <td>{{$row['title']}}</td>
                            <td>{{$row['dayDate']}}&nbsp;ב{{$row['month']}}&nbsp;{{$row['year']}}</td>
                            <td>
                                <a style="color:green;" href="{{url('cms/posts/'.$row['id'].'/edit')}}" title="Edit"><i class="fa fa-pencil"></i>&nbsp;עריכה</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <a style="color:red;" href="{{url('cms/posts/'.$row['id'])}}" title="Edit"> מחיקה &nbsp;<i class="fa fa-trash"> </i></a> 
                            </td>
                            <td></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @else 
        <div class="row  text-center">
            <div class="col-md-6 col-md-offset-3">
                <br><br><br><br><br><br>
                <h2 class="color-3">אופס....</h2>
                <h2 class="color-3">לא קיימים פוסטים</h2>
            </div>
        </div>    
        @endif  
    </div>
</div>




@endsection


