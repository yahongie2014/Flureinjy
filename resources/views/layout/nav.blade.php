<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-icon">
                <a href="dashboard1.htm">
                    <span class="fa fa-home"></span>
                </a>
            </li>
            <li class="breadcrumb-active">
                <a href="{{url('dashboard')}}">{{trans('admin.dashboard')}}</a>
            </li>
            <li class="breadcrumb-link">
                <a href="{{url('dashboard')}}">{{trans('admin.dashboard')}}</a>
            </li>
            @if(!empty($title))<li><a href="{{URL::current()}}">{{$title}}</a></li>@endif
        </ol>
    </div>
</header>
</section>