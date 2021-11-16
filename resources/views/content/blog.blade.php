@extends('master')

@section ('slider')
<section id="slider" class="height-250" >
    <div class="swiper-slide" style="background-image: url('{{asset('images/headers/blog.jpg')}}');"></div>
</section>
@endsection

@section ('content')
<section>
    <div class="container">
        @if($posts)
        @foreach($posts as $post) 
        <!-- TIMELINE -->
        <div class="timeline"><!-- .timeline-inverse = right position [left on RTL] -->
            <div class="timeline-hline"><!-- horizontal line --></div>
        
          <!-- POST ITEM -->
            <div class="blog-post-item">

                <!-- timeline entry -->
                <div class="timeline-entry rounded"><!-- .rounded = entry -->
                   {{$post['dayDate']}}<span>{{$post['month']}}</span>
                    <div class="timeline-vline"><!-- vertical line --></div>
                </div>
                <!-- /timeline entry -->
                <!-- IMAGE -->
                @if($post['youtube'])
                <div class="margin-bottom-20">
                    <div class="embed-responsive embed-responsive-16by9">
                        {!!$post['youtube']!!}
                    </div>
                </div>
                @elseif($post['vimeo'])
                <div class="margin-bottom-20">
                    <div class="embed-responsive embed-responsive-16by9">
                        {!!$post['vimeo']!!}
                    </div>
                </div>
                @elseif($post['image'])
                
                <figure class="margin-bottom-20">
                    <img class="img-responsive" style="width:100%;" src="{{asset('images/blogPosts/' . $post['image'])}}" alt="{{$post['alt']}}">
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
                <p>{!!$post['short']!!}...</p>
                <a href="{{url('blog/' . $post['id'])}}" class="btn btn-reveal btn-default">
								<i class="fa fa-plus"></i>
								<span>קרא עוד</span>
							</a>
            </div>
            <!-- /POST ITEM -->
        </div>
        <!-- /TIMELINE -->
        @endforeach
        @else
        <div class="col-md-12">
            <p><i>No Posts Available</i></p>
        </div>
        @endif
    </div>
</section>
 
        
@endsection

