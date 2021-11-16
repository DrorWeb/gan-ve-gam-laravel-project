<!--============================================================================
============================== Footer Section ===============================-->
<section id="footer" style="margin-bottom:-60px; padding:0; background-color:#333;">
    <div id="footer">
        <div class="container-fluid color-bar top-fixed clearfix">
            <div class="row">
                <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
                <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
                <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
                <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="footer-logo" src="{{asset('images/kidsImages/ganLogo.png')}}" alt="logo" style="width:150px;" />
                    <!--Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                <i class="fa fa-home" style="font-size: 2em;"></i>
                                <a target="_blank" href="https://www.google.co.il/maps/place/%D7%96'%D7%91%D7%95%D7%98%D7%99%D7%A0%D7%A1%D7%A7%D7%99,+%D7%94%D7%95%D7%93+%D7%94%D7%A9%D7%A8%D7%95%D7%9F%E2%80%AD/@32.1433437,34.8841339,17z/data=!3m1!4b1!4m5!3m4!1s0x151d37eb0547622b:0xea4b160099560fd6!8m2!3d32.1433437!4d34.8819452?hl=iw">
                                    ז׳בוטינסקי 40 הוד השרון
                                </a>

                            </li>
                            <li class="footer-sprite phone">
                                <i class="fa fa-phone" style="font-size: 2em;"></i>
                                <a href="tel:052-549-7617">
                                    052-549-7617
                                </a>
                            </li>
                            <li class="footer-sprite email">
                                <i class="fa fa-envelope" style="font-size: 1.6em;"></i>
                                <a href="mailto:{{$ourEmailAddress}}">{{$ourEmailAddress}}</a>
                            </li>
                        </ul>
                    </address>
                </div> 
                <!-- last posts -->
                <div class="col-md-3">
                    @if($lastPosts)
                    <h4 class="letter-spacing-1" style="font-size: 1.5em">פוסטים אחרונים</h4>                    
                    <ul class="footer-posts list-unstyled">
                        @foreach($lastPosts as $lastPost)
                        <li>
                            <a href="{{url('blog/' . $lastPost->id)}}">{{$lastPost->title}}</a>
                            <small>{{$lastPost->dayDate .'&nbsp;ב'. $lastPost->month .'&nbsp;'. $lastPost->year}}</small>
                        </li>
                        @endforeach
                    </ul>                    
                    @endif
                    <!-- /Latest Blog Post -->
                </div> 


                <div class="col-md-2 pull-left text-center">
                    <h4 style="font-size: 1.5em">עקבו אחרינו</h4>
                    <div class="">
                        <a href="https://www.facebook.com/%D7%92%D7%9F-%D7%95%D7%92%D7%9D-%D7%9C%D7%94%D7%95%D7%A8%D7%99%D7%9D-%D7%A9%D7%A8%D7%95%D7%A6%D7%99%D7%9D-%D7%9C%D7%AA%D7%AA-%D7%99%D7%95%D7%AA%D7%A8-252405854811396/" class="social-icon social-icon-border social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="copyright col-md-12 margin-top-30">
                <div class="row">
                    <div class="pull-left">  
                        <a class="hidden-lg hidden-md hidden-sm" href="https://www.drorashkenazi.com"><br>האתר נבנה ע״י DA CODECUTS </a>
                    </div>
                    <a class="hidden-xs  nomargin" href="https://www.drorashkenazi.com">האתר נבנה ע״י DA CODECUTS </a>
                </div>
            </div>

        </div>

    </div>

</section>


<!--                <div class="col-md-4">
                    <h4 style="margin-right:35px; font-size: 1.5em">גלריה</h4>
                    <div class="footer-gallery lightbox" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/10-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/10-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/19-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/19-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/12-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/12-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/13-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/13-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/18-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/18-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                        <a href="assets/images/kidsImages/demoDelete/1200x800/15-min.jpg">
                            <img src="{{asset('images/kidsImages/demoDelete/150x99/15-min.jpg')}}" width="106" height="70" alt="" />
                        </a>
                    </div>
                </div>    							-->