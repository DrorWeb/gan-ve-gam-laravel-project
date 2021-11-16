<div id="mainMenu" class="sidebar-vertical sidebar-dark hidden-sm hidden-xs">
    <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
            <a href="{{url('')}}" class="logo text-center" style="margin-top:0px; margin-bottom:0px;">
                <img src="{{asset('images/kidsImages/ganLogo.png')}}" alt="company Logo" style="width: 65%; margin-top:-20px;"></a>

            <aside id="aside">
                <nav id="sideNav"><!-- MAIN MENU -->
                    <ul class="nav nav-list">
                        <li class="active">
                            <a class="dashboard" href="{{url('cms/dashboard')}}">
                                <i class="main-icon fa fa-dashboard"></i>&nbsp;&nbsp;<span>ראשי</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/menu')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-bars"></i>&nbsp;&nbsp;<span>תפריטים (לא לגעת)</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/keywords')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-google"></i>&nbsp;&nbsp;<span>מילות מפתח לגוגל</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/homeSlider')}}">
                                <i class="fa fa-menu-image pull-right"></i>
                                <i class="main-icon fa fa-image"></i>&nbsp;&nbsp;<span>סליידר דף הבית</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/newsletter')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-newspaper-o"></i>&nbsp;&nbsp;<span>ניוזלטר</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/headlines')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-newspaper-o"></i>&nbsp;&nbsp;<span>כותרות</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/ourService')}}">
                                <i class="fa fa-menu-bookmark-o pull-right"></i>
                                <i class="main-icon fa fa-trophy"></i>&nbsp;&nbsp;<span>השירות שלנו</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/employees')}}">
                                <i class="fa fa-menu-users pull-right"></i>
                                <i class="main-icon fa fa-users"></i>&nbsp;&nbsp;<span>צוות</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/facts')}}">
                                <i class="fa fa-menu-bolt pull-right"></i>
                                <i class="main-icon fa fa-bolt"></i>&nbsp;&nbsp;<span>עובדות</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/testamonials')}}">
                                <i class="fa fa-menu-comments-o pull-right"></i>
                                <i class="main-icon fa fa-comments-o"></i>&nbsp;&nbsp;<span>חוות דעת</span>
                            </a>
                        </li>
                        
                        
                        <li>
                            <a href="{{url('cms/events')}}">
                                <i class="fa fa-menu-birthday-cake pull-right"></i>
                                <i class="main-icon fa fa-birthday-cake"></i>&nbsp;&nbsp;<span>ארועים</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/schedule')}}">
                                <i class="fa fa-menu-calendar pull-right"></i>
                                <i class="main-icon fa fa-calendar"></i>&nbsp;&nbsp;<span>לו״ז</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/prices')}}">
                                <i class="fa fa-menu-calendar pull-right"></i>
                                <i class="main-icon fa fa-dollar"></i>&nbsp;&nbsp;<span>מחירון</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/about')}}">
                                <i class="fa fa-menu-info pull-right"></i>
                             &nbsp<i class="main-icon fa fa-info"></i>&nbsp;&nbsp;<span>דף אודות</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/offers')}}">
                                <i class="fa fa-menu-bookmark-o pull-right"></i>
                                <i class="main-icon fa fa-heart"></i>&nbsp;&nbsp;<span>פעוטון גנון וצהרון</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/albums')}}">
                                <i class="fa fa-menu-camera-retro pull-right"></i>
                                <i class="main-icon fa fa-camera-retro"></i><span> אלבומים ותמונות</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/posts')}}">
                                <i class="fa fa-menu-book pull-right"></i>
                                <i class="main-icon fa fa-book"></i>&nbsp;&nbsp;<span>פוסטים</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/songs')}}">
                                <i class="fa fa-menu-music pull-right"></i>
                                <i class="main-icon fa fa-music"></i>&nbsp;&nbsp;<span>שירים</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/stories')}}">
                                <i class="fa fa-menu-music pull-right"></i>
                                <i class="main-icon fa fa-music"></i>&nbsp;&nbsp;<span>סיפורים</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/messages')}}">
                                <i class="fa fa-menu-envelope pull-right"></i>
                                <i class="main-icon fa fa-envelope"></i>&nbsp;&nbsp;<span>הודעות מהאתר</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cms/users')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-users"></i>&nbsp;&nbsp;<span>משתמשים</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-level-up"></i>&nbsp;&nbsp;<span>חזרה לאתר</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('user/logout')}}">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-power-off"></i>&nbsp;&nbsp;<span>יציאה</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <span id="asidebg"><!-- aside fixed background --></span>
            </aside>
        </div>
    </div>
</div>