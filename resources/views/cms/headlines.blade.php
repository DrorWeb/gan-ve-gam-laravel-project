@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת <span>כותרות</span> בדף הבית</h3>
            </div>
        </div>
    </section>
</div>
@if($allHeadlines)
<div class="row">
    
    <div class="col-md-6 col-md-offset-3"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size: 1.5em">סעיף</th>
                        <th class="" style="font-size: 1.5em">כותרת</th>
                        <th class="text-center" style="font-size: 1.5em">עריכה</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allHeadlines as $row)
                    <tr>
                        <td class="text-center">{{$row->section}}</td>
                        <td>{{$row->headline}}</td>
                        <td class="text-center">
                            <a href="{{url('cms/headlines/' . $row->id . '/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil"></i></a>                
                        </td>
                        <td></td>
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


