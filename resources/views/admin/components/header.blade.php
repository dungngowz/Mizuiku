<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

            <a class="navbar-brand" href="{{url('admin/dashboard')}}">
                <b class="logo-icon p-l-10">
                    <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />   
                </b>
                
                <span class="logo-text">
                    <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage" class="light-logo" />
                </span>
            </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                {{-- Filter content by languages --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block">{{trans('admin.show_all_laguages')}} <i class="fa fa-angle-down"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{session('admin-locale') == '' ? 'active' : ''}}" href="{{url('set-locale/admin-locale/all')}}">{{trans('admin.show_all_laguages')}}</a>
                        <a class="dropdown-item {{session('admin-locale') == 'vi' ? 'active' : ''}}" href="{{url('set-locale/admin-locale/vi')}}">Tiếng Việt</a>
                        <a class="dropdown-item {{session('admin-locale') == 'en' ? 'active' : ''}}" href="{{url('set-locale/admin-locale/en')}}">English</a>
                    </div>
                </li>
            </ul>
            
            <ul class="navbar-nav float-right">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin/assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated" style="">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                        <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
 
