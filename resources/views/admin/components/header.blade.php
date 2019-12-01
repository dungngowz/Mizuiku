<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                   
                </b>
                <!--End Logo icon -->
                 <!-- Logo text -->
                <span class="logo-text">
                     <!-- dark Logo text -->
                     <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage" class="light-logo" />
                    
                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                    
                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                     <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="create-news-btn" data-toggle="modal" data-target="#modal-create-news">News</a>
                        <a class="dropdown-item" href="#">Category</a>
                    </div>
                </li>
                
                {{-- Modal Create News --}}
                <div class="modal fade" id="modal-create-news" data-backdrop="static" role="dialog" aria-labelledby="modal-create-news" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New news</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="title-create" class="col-form-label">Title:</label>
                                        <input type="text" class="form-control" id="title-create">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug-create" class="col-form-label">Slug:</label>
                                        <input type="text" class="form-control" id="slug-create">
                                    </div>
                                    <div class="form-group">
                                        <label for="category-create" class="col-form-label">Category:</label>
                                        <select class="form-control" id="category-create">
                                            <option value="">Choose...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail-create" class="col-form-label">Thumbnail:</label>
                                        <input type="text" class="form-control" id="thumbnail-create">
                                    </div>
                                    <div class="form-group">
                                        <label for="description-create" class="col-form-label">Description:</label>
                                        <input type="text" class="form-control" id="description-create">
                                    </div>
                                    <div class="form-group">
                                        <label for="content-create" class="col-form-label">Content:</label>
                                        <textarea class="form-control" id="content-create"></textarea>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btn-create-news" data-dismiss="modal">Submit</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                    </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                        <ul class="list-style-none">
                            <li>
                                <div class="">
                                     <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Event today</h5> 
                                                <span class="mail-desc">Just a reminder that event</span> 
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Settings</h5> 
                                                <span class="mail-desc">You can customize this template</span> 
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Pavan kumar</h5> 
                                                <span class="mail-desc">Just see the my admin!</span> 
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Luanch Admin</h5> 
                                                <span class="mail-desc">Just see the my new admin!</span> 
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin/assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated" style="">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>

                        <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                        <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
 
