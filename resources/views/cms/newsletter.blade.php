@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>כתובות המייל הרשומות <span>לניוזלטר</span></h3>
            </div>
        </div>
    </section>
</div>
@if($allRecipients)
<div class="row">
    <div class="col-md-3 margin-top-50">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletterRecipients">
            להעתקת כל כתובות המייל
        </button>
        <br><br><br>
        <a href="{{url('send')}}" class="btn btn-primary btn-lg">שליחה לכל הנמענים</a>
    </div>
    <div id="newsletterRecipients" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="direction: ltr;">{{$list}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6"><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size: 1.5em">כתובות אימייל</th>
                        <th class="" style="font-size: 1.5em">פעולה</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allRecipients as $row)
                    <tr>
                        <td class="text-center">
                            <a href="mailto:{{$row->email}}">{{$row->email}} </a>
                        </td>
                        <td>
                             
                            <a href="{{url('cms/newsletter/'.$row->id)}}" title="Delete"  style="color:red"><i class="fa fa-trash" style="font-size:1.5em;"> </i></a> 
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


