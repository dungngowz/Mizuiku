@php
    // $seg2 = Request::segment(2);
    // $seg3 = Request::segment(3);
@endphp

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                {{-- Dashboard --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">{{trans('admin.dashboard')}}</span>
                    </a>
                </li>

                {{-- About Us --}}
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">About Us</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ url('admin/about-us/?keyword='. config('const.keywords.program_introduction')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">Program introduction</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('admin/about-us/?keyword=' . config('const.keywords.co_organizingboard')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">Co-organizing Board</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- News --}}
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.news_management')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ url('admin/articles?type=news') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.list_of_news')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('admin/categories?type=news') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.news_categories')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Contact Us --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/contact-us') }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i><span class="hide-menu">Contact Us</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>