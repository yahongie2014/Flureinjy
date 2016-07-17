
    <!-- -------------- Header  -------------- -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-logo-wrapper">
            <a class="navbar-logo-text" href="{{url('dashboard')}}">
                <img src="{{STYLE}}/assets/img/logo.png" />
            </a>
             <a class="icon-logo" href="{{url('dashboard')}}">
                <img src="{{STYLE}}/assets/img/icon.png" />
            </a>
        </div>
         <span id="sidebar_left_toggle" class="ad ad-lines"></span>

        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <div class="navbar-btn btn-group">
                    <a href="#" class="topbar-dropmenu-toggle btn" data-toggle="button">
                        <span class="fa fa-magic fs20 text-info"></span>
                    </a>
                </div>
            </li>


            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name>{{auth()->user()->name}}</name> </span>
                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="{{STYLE}}/assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w250" role="menu">
                    <li class="dropdown-footer text-center">
                        <a href="{{url('logout')}}" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span>{{trans('admin.logout')}} </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- -------------- /Header  -------------- -->