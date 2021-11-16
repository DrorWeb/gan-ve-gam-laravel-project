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
    <div class="col-md-12">
        @if($keywords)
        <div class="row  text-center">
            <div class="col-md-12">
                <div class="table-responsive ">
                    <br><br>
                    <table class="table">
                        <tr> 
                    <?php     $td=1;      ?>
                    @foreach($page as $row)
                    <td> 
                        <table class="table table-bordered table-striped" style="margin-left: 10px;">
                            <th colspan="2" class="text-center bg-color-1" style="font-size: 1.5em">עמוד {{$row['page']}}</th>
                            <th class="text-center bg-color-1" style="font-size: 1.5em"></th>
                            <tr>
                            <form class="nomargin" method="post" action="{{url('cms/keywords/')}}" enctype="multipart/form-data" files="true" autocomplete="on">
                                <input type="hidden" name="page" value="{{$row['page']}}">
                                <input type="hidden" name="url" value="{{$row['url']}}">
                                <td>

                                    <div class="row clearfix">
                                        {{csrf_field()}}
                                        <!-- Name -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="keyword">הוספת מילת מפתח</label>
                                                <input value="{{Input::old('keyword')}}" type="text" name="keyword" class="form-control" placeholder="">

                                            </div>                     
                                        </div>
                                    </div>

                                </td>
                                <td> 
                                    <label for="">   </label>
                                    <input type="submit" name="submit" class="btn btn-success" style="margin-top:10px;" value="הוסף לרשימה">  
                                </td>
                                <td></td>
                            </form>
                            </tr>
                            @foreach($keywords as $keyword)
                            @if($keyword->url == $row['url'] && $keyword->keyword)
                            <tr style="font-size: 1.1em;">
                                <td>
                                    {{$keyword->keyword}}
                                </td>
                                <td> 
                                    <a id='albumCrud' href="{{ url('cms/deleteKeyword',$keyword->id) }}"><i class="fa fa-close" style="font-weight: bold; color:red;"></i></a>
                                </td>
                                <td></td>
                            </tr>
                            @endif
                            @endforeach

                        </table>
                    </td>
                     <?php   $td++;  ?>
                      @if($td == 5)
                        </tr><tr>
                      <?php   $td=1;  ?>
                      @endif
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


