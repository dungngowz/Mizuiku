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
                {{-- HomePage --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ url('/') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">{{trans('admin.dashboard')}}</span>
                    </a>
                </li>

                {{-- Banners --}}
                <li class="sidebar-item {{$segments[1] == 'banners' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/banners?keyword=home') }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i><span class="hide-menu">Banners</span>
                    </a>
                </li>

                {{-- About Us --}}
                <li class="sidebar-item {{in_array(request()->keyword, ['program-introduction', 'co-organizingboard']) ? 'selected' : ''}}"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.about_us')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{in_array(request()->keyword, ['program-introduction', 'co-organizingboard']) ? 'in' : ''}}">
                        <li class="sidebar-item {{request()->keyword == 'program-introduction' ? 'active' : ''}}">
                            <a href="{{ url('admin/post/?keyword='. config('const.keywords.program_introduction')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.program_introduction')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{request()->keyword == 'co-organizingboard' ? 'active' : ''}}">
                            <a href="{{ url('admin/post/?keyword=' . config('const.keywords.co_organizingboard')) }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.co_organizing_board')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- News --}}
                <li class="sidebar-item {{in_array($segments[1], ['news', 'categories']) ? 'selected' : ''}}"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.news_management')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{in_array($segments[1], ['news', 'categories']) ? 'in' : ''}}">
                        <li class="sidebar-item {{$segments[1] == 'news' ? 'active' : ''}}">
                            <a href="{{ url('admin/news/?keyword=news') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.list_of_news')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{$segments[1] == 'categories' ? 'active' : ''}}">
                            <a href="{{ url('admin/categories?type=news') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.news_categories')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Library --}}
                <li class="sidebar-item {{$segments[1] == 'library' ? 'selected' : ''}}"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.library')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{$segments[1] == 'library' ? 'in' : ''}}">
                        <li class="sidebar-item {{request()->keyword == 'photo' ? 'active' : ''}}">
                            <a href="{{ url('admin/library?keyword=photo') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.photo_library')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{request()->keyword == 'video' ? 'active' : ''}}">
                            <a href="{{ url('admin/library?keyword=video') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.video_library')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Program Timeline --}}
                <li class="sidebar-item {{$segments[1] == 'program-timeline' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/program-timeline') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.program_timeline')}}</span>
                    </a>
                </li>

                {{-- E-Learning --}}
                <li class="sidebar-item {{request()->keyword == 'e-learning' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/post?keyword=e-learning') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">E-Learning</span>
                    </a>
                </li>

                {{-- Contact Us --}}
                <li class="sidebar-item {{$segments[1] == 'contact-us' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/contact-us') }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.contact_us')}}</span>
                    </a>
                </li>

                {{-- Tearm Of Use --}}
                <li class="sidebar-item {{request()->keyword == 'tearm-of-use' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/post?keyword=tearm-of-use') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.tearm_of_use')}}</span>
                    </a>
                </li>

                {{-- Private Policy --}}
                <li class="sidebar-item {{request()->keyword == 'private-policy' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/post?keyword=private-policy') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.private_policy')}}</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>