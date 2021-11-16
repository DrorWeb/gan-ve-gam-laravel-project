<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = "";</script>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="Author" content="Dror Ashkenazi" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Alef:400,700%7CAmatica+SC:400,700%7CVarela+Round&amp;subset=hebrew" rel="stylesheet">

        <!-- CORE CSS -->
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

      

        <!-- THEME CSS -->
        <link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- PAGE LEVEL SCRIPTS -->
        <link href="{{ asset('css/header-5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/color_scheme/yellow.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
        <link href="{{ asset('css/myStyles.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/_deploy/css/jquery.jscrollpane.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/_deploy/css/videoGallery_buttons.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/_deploy/css/jquery.selectbox.css')}}" />
        
        <!--[if lte IE 8 ]><link rel="stylesheet" type="text/css" href="{{ asset('plugins/_deploy/css/ie_below_9.css')}}" /><![endif]-->
        <!--[if lte IE 8 ]><link rel="stylesheet" type="text/css" href="{{ asset('plugins/_deploy/css/ie_below_9_2.css')}}" /><![endif]-->
        
        
        
        
        
        
        
<script type="text/javascript">var plugin_path = '../plugins/' ;</script>
<script type="text/javascript" src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<script type="text/javascript" src="{{ asset('plugins/_deploy/js/swfobject.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.dotdotdot-1.5.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.address.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.jscrollpane.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="http://www.youtube.com/player_api"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.apPlaylistManager.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.apYoutubePlayer.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.vg.settings_buttons.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.func.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.vg.func.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/_deploy/js/jquery.videoGallery.js')}}"></script>





    </head>

    <body class="smoothscroll enable-animation">

        <div id="wrapper">   
            <div id="header" class="sticky clearfix transparent">

             
<!-- ============================= Color Bars  =================================
=============================================================================-->
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
             
            </div>

<section id="events2"  style="min-height: 1000px;">
    
    <div class="container">

  
  		<div id="mainWrapper">
  
    	<div class="componentWrapper">
  	 
        	 <!-- player part -->
             <div class="playerHolder">
             	 <!-- local video holder -->
                 <div class="mediaHolder"></div>
                 
                 <!-- youtube main iframe holder -->
                 <div class="youtubeIframeMain"></div>
                 
                 <!-- flash local main --> 
                 <div id="flashMain">
                     <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                     </a>
                 </div>
                 
                 <!-- preview image --> 
                 <div class="mediaPreview"></div>
                 
                 <!-- preloader for local video --> 
                 <div class="preloader"></div>
                 
                 <!-- big play button -->
             	 <div class="big_play"><img src="{{ asset('plugins/_deploy/data/icons/big_play3.png')}}" width='76' height='76' alt='big_play'/></div>
                 
                 <div class="playerControls">
                 
                      <div class="player_playControl"><img src="{{ asset('plugins/_deploy/data/icons/play.png')}}" width='12' height='14' alt=''/></div>
                        
                      <div class="player_seekbar">
                          <div class="progress_bg"></div>
                          <div class="load_level"></div>
                          <div class="progress_level"></div>
                      </div>
                      
                      <div class="player_fullscreen"><img src="{{ asset('plugins/_deploy/data/icons/fullscreen_enter.png')}}" width='12' height='12' alt=''/></div>
                      
                      <div class="volume_seekbar">
                         <div class="volume_bg"></div>
                         <div class="volume_level"></div>
                      </div>
                      <div class="player_volume"><img src="{{ asset('plugins/_deploy/data/icons/volume.png')}}" width='13' height='14' alt=''/></div>
                      
                      <div class="player_mediaTime"><p>00:00 | 00:00</p></div>
                      
                      <div class="player_volume_tooltip"><p>0</p></div>
                      
                      <div class="player_progress_tooltip"><p>0:00 | 0:00</p></div>
                      
                 </div>
                 
                 <!-- player logo -->
    	 		 <div class="playerLogo"><a href='http://www.flashtuning.net/' target='_blank'><img src="{{ asset('plugins/_deploy/data/logo.png')}}" alt="player_logo" width="86" height="40"/></a></div>
                 
             	 <!-- media description --> 
             	 <div class="infoHolder"><div class="info_inner"></div></div>
             
                 <!-- description btn --> 
                 <div class="player_addon">
                     <div class="info_toggle"><img src="{{ asset('plugins/_deploy/data/icons/info.png')}}" width='40' height='40' alt='player_info'/></div>
                     <div class="playlist_toggle"><img src="{{ asset('plugins/_deploy/data/icons/playlist.png')}}" width='40' height='40' alt=''/></div>
                 </div>
                 
             </div>
             <!-- playlist part -->
             <div class="playlistHolder">
            
                 <div class="componentPlaylist">
                 
                 	 <!-- playlist items will be appended here! -->
                     <div class="playlist_inner"><div class="playlist_content"></div></div>
                     
                     <!-- flash mini preview -->
                     <div id="flashPreviewHolder">
                         <div id="flashPreview">
                             <a href="http://www.adobe.com/go/getflashplayer">
                                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                             </a>
                         </div>
                     </div>
                    
                     <!-- youtube iframe preview holder -->
                     <div class="youtubeIframePreview"></div>
                     
                 </div>
                 
                 <div class="thumbBackward"></div>	
            	 <div class="thumbForward"></div>
                 
             </div>
             
             <!-- this just holds the data, remains hidden! -->
             <div class="playlistData">
             
              <!--                            youtube playlist                    -->
                 <ul id='playlist1' data-address="playlist1">
                     <li data-address="youtube_playlist" class= "playlistNonSelected" data-type='youtube_playlist' data-mp4Path="PL_WKmB3mhSbKf1fYOtohBlLqkjBXxslOs"></li> 
                 </ul>
             </div> 
             </div>
        </div>
        </div>
        <!-- public api -->
    	<div id='publicFunctions'>
       		<p>PUBLIC METHODS</p><br/>
            <ul>
                <!-- play/stop active media -->
                <li><a href='#' onClick="api_togglePlayback(); return false;">toggle playback</a></li>
                
                <!-- play next media -->
                <li><a href='#' onClick="api_nextMedia(); return false;">Play next media</a></li>
                
                <!-- play previous media -->
                <li><a href='#' onClick="api_previousMedia(); return false;">Play previous media</a></li>
                
                <!-- set volume (0-1) -->
                <li><a href='#' onClick="api_setVolume(0.5); return false;">Set volume (0.5)</a></li>
                
                <!-- toggle playlist  -->
                <li><a href='#' onClick="api_togglePlaylist(); return false;">toggle playlist</a></li>
                
                <!-- toggle description -->
                <li><a href='#' onClick="api_toggleDescription(); return false;">toggle description</a></li>
                
                <!-- destroy media -->
                <li><a href='#' onClick="api_destroyMedia(); return false;">destroy media</a></li>
                
                
                <li><a href='#' onClick="api_loadMedia(1); return false;">load media 1</a></li>
                <li><a href='#' onClick="api_loadMedia(2); return false;">load media 2</a></li>
                <li><a href='#' onClick="api_loadMedia(3); return false;">load media 3</a></li>
                <li><a href='#' onClick="api_loadMedia(4); return false;">load media 4</a></li>
                <li><a href='#' onClick="api_loadMedia(5); return false;">load media 5</a></li>
                
                <li><a href='#' onClick="api_loadMedia('playlist1'); return false;">load playlist 1</a></li>
                <li><a href='#' onClick="api_loadMedia('playlist2'); return false;">load playlist 2</a></li>
                <li><a href='#' onClick="api_loadMedia('playlist3'); return false;">load playlist 3</a></li>
                
                <!-- if useLivePreview = true, call this to clean active preview item if needed -->
                <li><a href='#' onClick="api_cleanPreviewVideo(); return false;">clean preview video</a></li>
                
            </ul>
         
                </div>
</section>



<a href="#" id="toTop"></a>
     </div>


<!--============================================================================
=============================== SCRIPTS ===================================-->




</body> 
</html>

