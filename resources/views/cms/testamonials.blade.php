
@extends('cms.cms_master')


@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span>&nbsp;חוות דעת&nbsp;</span></h3>
            </div>
        </div>
    </section>
</div>
<br>

<div class="container-fluid">
    <br><br>
    
    <div class="row">
        <div class="col-md-2 col-md-offset-2" style="margin-bottom: 60px; margin-top:50px;"> 
            <a href="{{url('cms/testamonial/create')}}" class="btn btn-success" style="font-size:1.2em;">
                יצירת חוות דעת חדשה
            </a>
        </div>
    </div>
    @if($testamonials)<br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive" style="margin-top:-10px;"> 
            <table class="table table-bordered size-15">
                <th>שם</th>
                <th> חוות דעת</th>
                <th>מוצג באתר</th>
                <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;פעולה</th>
                <th></th>
                
                @foreach($testamonials as $testamonial)
                <tr>
                    <td>{{$testamonial->name}}</td>
                    <td>{{$testamonial->details}}</td>
                   <td class="text-center"> 
                       @if($testamonial->homeDisplay)
                       <i class="fa fa-check-circle" style="color:green; font-size: 1.5em" title="מופיע בדף הבית"></i></td>
                       @else
                       <i class="fa fa-close" style="color:red; font-size: 1.5em" title="מוסתר מדף הבית"></i></td>
                       @endif
                    <td class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('cms/testamonials/' . $testamonial->id . '/edit')}}" title="עריכה" style="color:green"><i class="fa fa-pencil"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{url('cms/testamonials/' . $testamonial->id . '/delete')}}" title="מחיקה" style="color:red"><i class="fa fa-close"></i></a>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
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
     