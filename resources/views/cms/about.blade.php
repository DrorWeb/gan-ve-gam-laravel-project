@extends('cms.cms_master')

@section ('cms_content')
    <div class="row">
        <section class="heading-title heading-arrow-bottom">
            <div class="container-fluid">
                <div class="text-center">
                    <h3><span>תוכן דף אודות</span></h3>
                </div>
            </div>
        </section>
    </div>

<br>
<div class="col-md-12">
    <div class="col-md-10 col-md-offset-1">
        @if($about)<br>
        <h1 class="text-center" style="color:#000;">טקסט אודות</h1><br>
        <div class="row">
            <div class="table-responsive" style="margin-top:-10px;"> 
                <table class="table table-bordered ">
                    <th>אלמנט בדף</th>
                    <th>כותרת</th>
                    <th>פרטים</th>
                    <th>לעריכה</th>
                    <th></th>
                    @foreach($about as $aboutData)
                    <tr>
                        <td>{{$aboutData->location}}</td>
                        <td>{{$aboutData->title}}</td>
                        <td>{{$aboutData->article}}</td>

                        <td class="text-center">
                            <a href="{{url('cms/about/'.$aboutData->id.'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @else
        <p>oopps something went wrong - about</p>
        @endif
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-6">
                @if($capabilities)
                <h1 class="text-center" style="color:#000;">{{$capabilitiesHeadline->title}}
                    <span style="font-size: 15px;"><a href="{{url('cms/about/capabilityHeadline/edit')}}" title="Edit" style="color:green">לחץ כאן לעריכת הכותרת</a></span>
                </h1>
                <br>
                <div class="row">
                    <div class="table-responsive" style="margin-top:-10px;"> 
                        <table class="table table-bordered ">
                            <th>אלמנט בדף</th>
                            <th>כותרת</th>
                            <th>פרטים</th>
                            <th class="text-center">פעולה</th>
                            <th></th>
                            @foreach($capabilities as $capability)
                            <tr>
                                <td>{{$capability->location}}</td>
                                <td>{{$capability->title}}</td>
                                <td>{{$capability->article}}</td>
                                <td class="text-center">
                                    <a href="{{url('cms/about/'.$capability->id.'/edit')}}" title="Edit" style="color:green"><i class="fa fa-pencil" style="font-size:1.5em;"></i></a>
                                </td>
                                <td></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endif  
            </div>
            <div class="col-md-6">
                <h1 class="text-center" style="color:#000;">תמונה</h1><br>
                <div class="col-md-4  col-md-offset-2">
                    <img src="{{asset('images/'.$aboutPic->image)}}" style="max-width: 200px;">
                </div>
                <div class="col-md-4 text-center">
                    <a class="btn btn-success" href="{{url('cms/aboutPic/edit')}}" title="Edit" >לשינוי התמונה</a>
                </div>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</div>
@endsection