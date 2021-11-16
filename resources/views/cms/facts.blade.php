
@extends('cms.cms_master')


@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת<span>&nbsp;עובדות&nbsp;</span>דף הבית ודף אודות</h3>
            </div>
        </div>
    </section>
</div>
<br>

<div class="container-fluid">
    
    @if($facts)<br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="table-responsive" style="margin-top:-10px;"> 
            <table class="table table-bordered size-20">
                <th class="text-center">מספר/כמות</th>
                <th style="padding-right: 15px;">כותרת עובדה</th>
                <th class="text-center">לעריכה</th>
                <th></th>
                @foreach($facts as $fact)
                <tr>
                    <td class="text-center">{{$fact->number}}</td>
                    <td style="padding-right: 15px;">{{$fact->title}}</td>
                    
                    <td class="text-center">
                        <a href="{{url('cms/facts/' . $fact->id . '/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil"></i></a>                
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
     