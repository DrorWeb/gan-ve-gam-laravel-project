@extends('cms.cms_master')

@section('cmsCss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
@endsection

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
@if($offers)
<div class="row">    
    <div class="col-md-12"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="" style="font-size: 1.2em; width:5%;">כותרת</th>
                        <th class="text-center" style="font-size: 1.2em; width:15%;">תמונה</th>
                        <th class="" style="font-size: 1.2em; width:70%;">פרטים מלאים</th>
                        <th class="text-center" style="font-size: 1.2em; width:10%;">עריכה</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offers as $row)
                    <tr>
                        <td>{{$row->headline}}</td>
                        <td class="text-center" style="width:15%;">
                            <img width="100%" border="0" src="{{asset('images/' . $row->image)}}">
                        </td>
                        <td>{{$row->description}}</td>
                        <td class="text-center">
                            <br><br><br><br><br>
                            <a href="{{url('cms/offer/' . $row->id . '/edit')}}" class="btn btn-warning btn-3d" title="Edit"><i class="fa fa-pencil"style="font-size: 1.5em;"></i></a>                
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


 