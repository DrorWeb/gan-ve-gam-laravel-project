@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>מילות מפתח</span></h3>
            </div>
        </div>
    </section>
</div>

<div class="row text-center"><br><br>
    
    <div class="col-md-10 col-md-offset-1">
        @if($keywords)
        <div class="row  text-center">
            <div class="col-md-12">
                <div class="table-responsive ">
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <th class="text-center" style="font-size: 1.5em">עמוד באתר</th>
                        <th class="text-center" style="font-size: 1.5em;" >מילות מפתח</th>
                         <th class="text-center" style="font-size: 1.5em">פעולה</th>
                         <th></th>
                        @foreach($page as $row)
                        <tr style="font-size: 1.1em;">
                            <td>{{$row['page']}}</td>
                            <td>
                                @foreach($keywords as $keyword)
                                    @if($keyword->url == $row['url'])
                                    {{$keyword->keyword}},
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a style="color:green;" href="{{url('cms/keywords/'.$row['page'].'/edit')}}" title="Edit"><i class="fa fa-pencil"></i>&nbsp;עריכה</a>
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
                <h2 class="color-3">לא קיימות מילות מפתח</h2>
            </div>
        </div>    
        @endif  
    </div>
</div>




@endsection


