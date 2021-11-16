@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>{{$title}}</span></h3>
            </div>
        </div>
    </section>
</div>
@if($allServices)
<div class="row">    
    <div class="col-md-12"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size: 1.2em">צד</th>
                        <th class="text-center" style="font-size: 1.2em">אייקון</th>
                        <th class="" style="font-size: 1.2em">כותרת</th>
                        <th class="" style="font-size: 1.2em">פרטים</th>
                        <th class="text-center" style="font-size: 1.2em">פעולות</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allServices as $row)
                    <tr>
                        <td class="text-center">{{$row->צד}}</td>
                        <td class="text-center"><i style="font-size:1.5em;" class="{{$row->icon}}"></i></td>
                        <td>{{$row->כותרת}}</td>
                        <td>{{$row->תקציר}}</td>
                        <td class="text-center">
                            <a href="{{url('cms/ourServices/' . $row->id . '/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil"></i></a>                
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


