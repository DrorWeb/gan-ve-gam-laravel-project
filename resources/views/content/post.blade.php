@extends('master')
@section ('222slider')
<section id="slider" class="height-200" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/backgrounds/default.jpg')}}'); background-repeat: repeat;" ></div>
</section>
@endsection

<!--============================================================================
=================================== About-1 =================================-->
@section ('content')

<section style="background-image: url('{{asset('images/backgrounds/default.jpg')}}'); background-repeat: repeat; padding-top: 150px;">
    @if($post)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                <div class="blog-post-item" style="background-color: #FFF; padding: 24px; border-radius: 8px;">
                    @if($post['youtube'])
                    <div class="margin-bottom-20">
                        <div class="embed-responsive embed-responsive-16by9" style="border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            {!!$post['youtube']!!}
                        </div>
                    </div>
                    @elseif($post['vimeo'])
                    <div class="margin-bottom-20">
                        <div class="embed-responsive embed-responsive-16by9" style="border-top-left-radius: 8px; border-top-right-radius: 8px;">{!!$post['vimeo']!!}</div>
                    </div>
                    @elseif($post['image'])

                    <figure class="margin-bottom-20">
                        <img class="img-responsive" style="width:100%; border-top-left-radius: 8px; border-top-right-radius: 8px;" src="{{asset('images/blogPosts/' . $post['image'])}}" alt="{{$post['alt']}}">
                    </figure>
                    @endif
                    <h2 class="color-4">{{$post['title']}}</h2>
                    <ul class="blog-post-info list-inline">
                        <li class="color-4">
                            <i class="fa fa-clock-o color-4"></i> 
                            <span class="color-4">{{$post['dayDate']}}&nbsp;{{$post['month']}}, 2017</span>
                        </li>
                        <li>
                            <i class="fa fa-user"></i> 
                            <span class="color-4">{{$post['author']}}</span>
                        </li>
                    </ul>
                    <p style="padding-left: 110px;">{!!$post['article']!!}</p>
                </div>
                <!-- /POST -->
            </div>
        </div>
    </div>
    @endif
</section>


@include('inc.footer')
@endsection


