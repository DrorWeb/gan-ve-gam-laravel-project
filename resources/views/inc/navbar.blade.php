<header id="topNav">
    <div class="container-fluid">
        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Logo -->
        <a class="logo pull-right" href="{{url('')}}">
            <img src="{{asset('images/kidsImages/ganLogo.png')}}" alt="Company Logo" />
        </a>
        <div class="navbar-collapse pull-left nav-main-collapse collapse">
            <nav class="nav-main">
                <ul id="topMain" class="nav nav-pills nav-main">
                    
                    @if($menus) 
                    @foreach($menus as $parent)
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{ url($parent['url']) }}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="{{$parent['icon']}} bg-color-{{$parent['iconColor']}} hidden-xs hidden-sm"></i>
                                <span class='menuItem'>{{$parent['link']}}</span>
                            </span>
                        </a>
                        <!-- First Tier Drop Down -->
                        @if($parent['children'])
                        <ul class="dropdown-menu bg-color-{{$parent['iconColor']}}" style="margin-top:0px;">
                            @foreach($parent['children'] as $child)
                            <li class="dropdown">
                                <a class="dropdown-toggle size-16" href="{{ url($child['url']) }}">{{$child['link']}}</a>
                                <!-- Second Tier Drop Down -->
                                @if($child['children'])
                                <ul class="dropdown-menu bg-color-{{$parent['iconColor']}}" >
                                    @foreach($child['children'] as $grandchild)
                                    <li class="dropdown">
                                        <a class="dropdown-toggle size-16" href="{{ url($grandchild['url']) }}">{{$grandchild['link']}}</a></li>
                                    @endforeach
                                </ul>
                                @endif  
                            </li>  
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    @endif
                    @if(Session::has('user_id'))
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{url('media')}}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="userNav fa fa-music hidden-xs hidden-sm" style="background-color: #f0c24b"></i>
                                <span class='menuItem'>בידור</span>
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{url('user/edit/' . Session::get('user_id'))}}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="userNav fa fa-user hidden-xs hidden-sm" style="background-color: #007bb6"></i>
                                <span class='menuItem'> ברוך הבא  {{Session::get('user_name')}}</span>
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{url('user/logout')}}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="fa fa-sign-out hidden-xs hidden-sm" style="background-color: #C8232C"></i>
                                <span class='menuItem'>  יציאה</span>
                            </span>
                        </a>
                    </li>
                    @if(Session::has('is_admin'))
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{url('cms/dashboard')}}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="fa fa-edit hidden-xs hidden-sm" style="background-color: #007bb6"></i>
                                <span class='menuItem'>  ניהול תוכן</span>
                            </span>
                        </a>
                    </li>
                   @endif
                    @else 
                    <li class="dropdown"><!-- About -->
                        <a class="dropdown-toggle " href="{{url('user/login')}}">
                            <span class="topMain-icon">
                                <i id="navIcons" class="fa fa-sign-in hidden-xs hidden-sm" style="background-color: #007bb6"></i>
                                <span class='menuItem'> כניסת הורים</span>
                            </span>
                        </a>
                    </li>    
                    @endif
                </ul>
            </nav> 
        </div>
    </div>
</header>