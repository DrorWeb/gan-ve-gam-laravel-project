@extends('master')
@section ('css')
<link rel='stylesheet' href="{{ asset('lib/bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('css/style.css')}}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/essentials.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/header-1.css') }}" type="text/css">

<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-jqgrid.css') }}" type="text/css">    
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout-shop.css') }}" type="text/css">
<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/layout.css') }}" type="text/css">

<link rel='stylesheet' href="{{ asset('lib/Theme/assets/css/color_scheme/green.css') }}" type="text/css" id="color_scheme" />
@endsection

@section('content')
<div class="container">
@if($sortFilter)
<section>
        <div class="container text-center  padding-top-20">
            <ul id="portfolio_filter" class="nav nav-pills margin-bottom-10 margin-top30">
                <li class="filter  margin-right-10"><a data-filter="*" href="#">All</a></li>
                @foreach($sortFilter as $sort)           
                <li class="filter "><a data-filter=".{{$sort->filterName}}" href="#">{{$sort->filterName}}</a></li>
                @endforeach              
            </ul>
       
  <div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-3">          
      @foreach($categories as $row)
      <div class="portfolio-item {{$row['filter']}} ">           
          <div class="item-box">
              <figure>
                  <span class="item-hover">
                      <span class="overlay dark-5"></span>
                      <span class="inner">
                          <!-- details -->
                          <a class="ico-rounded" href="{{url('shop/' . $row['url'])}}">
                              <span class="glyphicon glyphicon-eye-open size-20"></span>
                          </a>
                      </span>
                      <!-- overlay title -->
                      <div class="item-box-overlay-title">
                          <h3>{{$row['title']}}</h3>
                          <ul class="list-inline categories nomargin">
                              <li><a href="{{url('shop/' . $row['url'])}}">OUR {{$row['title']}}</a></li>
                          </ul>
                      </div>
                      <!-- /overlay title -->
                  </span>
                  <img class="img-responsive" src="{{ asset('images/categoiesPics') .'/'. $row['image']}}" width="600" height="399" alt="{{$row['title']}} - category image">
              </figure>
          </div>

      </div>
      @endforeach
    </div>
   </div>
@else
<div class="col-md-12"><p><i>No Categories To display</i></p></div>
@endif

</section>
</div>
@endsection

@section ('scripts')
<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="{{ asset('lib/Theme/assets/js/scripts.js')}}"></script>
@endsection