@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>מחירון</span></h3>
            </div>
        </div>
    </section>
</div>
@if($prices)
<div class="row">    
    <div class="col-md-12"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size: 1.2em">סדר</th>
                        <th class="" style="font-size: 1.2em">כותרת</th>
                        <th class="" style="font-size: 1.2em">תמונה</th>
                        <th class="" style="font-size: 1.2em">אייקון1</th>
                        <th class="" style="font-size: 1.2em">פרטים1</th>
                        <th class="" style="font-size: 1.2em">אייקון2</th>
                        <th class="" style="font-size: 1.2em">פרטים2</th>
                        <th class="" style="font-size: 1.2em">אייקון3</th>
                        <th class="" style="font-size: 1.2em">פרטים3</th>
                        <th class="" style="font-size: 1.2em">אייקון4</th>
                        <th class="" style="font-size: 1.2em">פרטים4</th>
                        <th class="" style="font-size: 1.2em">מחיר</th>
                        <th class="" style="font-size: 1.2em">פעולה</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prices as $row)
                    <tr>
                        <td class="text-center">{{$row->myOrder}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->image}}</td>
                        <td class="text-center"><i style="font-size:1.5em" class="{{$row->icon1}}"></i></td>
                        <td>{{$row->detail1}}</td>
                        <td class="text-center"><i style="font-size:1.5em" class="{{$row->icon2}}"></i></td>
                        <td>{{$row->detail2}}</td>
                        <td class="text-center"><i style="font-size:1.5em" class="{{$row->icon3}}"></i></td>
                        <td>{{$row->detail3}}</td>
                        <td class="text-center"><i style="font-size:1.5em" class="{{$row->icon4}}"></i></td>
                        <td>{{$row->detail4}}</td>
                        <td>{{$row->price}}</td>
                        <td class="text-center">
                            <a href="{{url('cms/prices/' . $row->id . '/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil"></i></a>                
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endif
@endsection


