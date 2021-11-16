@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>האלבומים שלנו</h3>
            </div>
        </div>
    </section>
</div>
@if($albums)
<div class="row">
    <div class="col-md-3 text-center"><br><br>
        <a class="btn btn-success" href="{{url('cms/albums/create')}}">צור אלבום חדש</a>
    </div>
    <div class="col-md-6"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size: 1.5em">שם</th>
                        <th class="text-center" style="font-size: 1.5em">תאריך צילום</th>
                        <th class="text-center" style="font-size: 1.5em">פעולה</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($albums as $row)
                    <tr>
                        <td class="text-center" style="font-size: 1.2em">{{$row->name}}</td>
                        <td class="text-center" style="font-size: 1.2em">{{ Carbon\Carbon::parse($row->picturesTaken)->format('d/m/Y') }}</td>
                        <td class="text-center" style="font-size: 1.2em">
                            <a href="{{url('cms/albums/' . $row->id . '/edit')}}" title="עריכה" style="color:green;"><i class="fa fa-pencil"></i></a>                
                            <a href="{{url('cms/albums/'. $row->id)}}" title="מחיקה" style="color:red;"><i class="fa fa-trash"> </i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endif
</div>
@endsection


