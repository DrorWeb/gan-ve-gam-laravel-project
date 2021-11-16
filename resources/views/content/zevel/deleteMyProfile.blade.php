@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>Delete User Profile</h3>
                <h3> <span>{{$user['firstName']}}&nbsp;{{$user['lastName']}}</span></h3>
                <h3>ARE YOU SURE ???</h3>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="container">
        <div class="row" style="margin-top:-40px;">
            <div class="col-md-6 col-md-offset-3">
                <div class=" padding-30">
                    <form class="nomargin" method="post" action=" {{url('users/' . $user_id)}}" autocomplete="on">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="clearfix">
                            {{csrf_field()}}
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left pull-left">
                                <a class="btn btn-danger" href="{{url('users')}}">Cancel & Go Back</a>  
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right pull-right">
                                <input type="submit" name="submit" class="btn btn-primary" value="Delete My Profile">                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


