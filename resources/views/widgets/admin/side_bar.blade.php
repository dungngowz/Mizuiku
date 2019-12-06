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
                        <span class="hide-menu">{{trans('admin.about_us')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ url('admin/about-us/?keyword='. config('const.keywords.program_introduction')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.program_introduction')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('admin/about-us/?keyword=' . config('const.keywords.co_organizingboard')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.co_organizing_board')}}</span>
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
                            <a href="{{ url('admin/news/?keyword=news') }}" class="sidebar-link">
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

                {{-- Library --}}
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.library', ['type' => 'image']) }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.library')}}</span>
                    </a>
                </li>

                {{-- Program Timeline --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/program-timeline') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.program_timeline')}}</span>
                    </a>
                </li>

                {{-- Contact Us --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/contact-us') }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.contact_us')}}</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>