@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>עריכת תפריט</span></h3>
            </div>
        </div>
    </section>
    <section>
    <div class="container">

        <div class="row" style="margin-top:-40px;">

            <div class="col-md-6 col-md-offset-3">

                <div class="box-static box-border-top padding-30">
                    

                    <form class="nomargin" method="post" action="{{url('cms/menu/' . $menu['id'])}}" autocomplete="on">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="menu_id" value="{{$menu['id']}}">
                        <div class="clearfix">
                            {{csrf_field()}}
                            <!-- Parent_id -->
                            <div class="form-group">
                                <label for="parent_id">תפריט אב</label>
                                <select name="parent_id" class="form-control select2">
                                    @if($menu['parent_id'])
                                    @foreach($menus as $row)  
                                    <option value="{{$row->id}}">{{$row->link}}</option>
                                    @endforeach
                                    <option value="0">עשה אותי תפריט אב</option>
                                    @else
                                    <option value="0">אני תפריט אב</option>
                                    @foreach($menus as $row)  
                                    <option value="{{$row['id']}}">{{$row['link']}}</option>
                                    @endforeach
                                    @endif
                                    
                                </select>
                            </div>
                            <!-- Link -->
                            <div class="form-group">
                                <label for="link">שם תפריט</label>
                                <input value="{{$menu['link']}}" type="text" name="link" class="form-control" placeholder="Link">
                            </div>

                             <!-- URL -->
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input value="{{$menu['url']}}" type="text" name="url" class="form-control" placeholder="url">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                 <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/menu')}}">בטל</a>  
                                <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="עדכן תפריט">                         
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </div>
</section>
</div>





@endsection


