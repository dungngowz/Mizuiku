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

                {{-- Course --}}
                @php
                    $activeTreeCourse = false;
                    if($segments[1] == 'course-video' || $segments[1] == 'comment' || $segments[1] == 'user' || $segments[1] == 'quiz' || $segments[1] == 'result-evaluation-course'){
                        $activeTreeCourse = true;
                    }else if($segments[1] == 'categories'){
                        $activeTreeCourse = (request()->type == 'course' || request()->keyword == 'course');
                    }
                @endphp
                <li class="sidebar-item {{$activeTreeCourse ? 'selected' : ''}}"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.courses_management')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{$activeTreeCourse ? 'in' : ''}}">
                        <li class="sidebar-item {{($segments[1] == 'categories' && request()->type == 'course') ? 'active' : ''}}">
                            <a href="{{ url('admin/categories?type=course') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.course_categories')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{$segments[1] == 'course-video' ? 'active' : ''}}">
                            <a href="{{ url('admin/course-video') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.course_video')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{($segments[1] == 'user') ? 'active' : ''}}">
                            <a href="{{ url('admin/user') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.user')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{($segments[1] == 'quiz') ? 'active' : ''}}">
                            <a href="{{ url('admin/quiz') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.evaluation-course')}}</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item {{($segments[1] == 'result-evaluation-course') ? 'active' : ''}}">
                            <a href="{{ url('admin/result-evaluation-course') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.result-evaluation-course')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{($segments[1] == 'comment') ? 'active' : ''}}">
                            <a href="{{ url('admin/comment') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.comment')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Banners --}}
                <li class="sidebar-item {{$segments[1] == 'banners' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/banners?keyword=home') }}" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i><span class="hide-menu">Banners</span>
                    </a>
                </li>

                {{-- About Us --}}
                <li class="sidebar-item {{$segments[1] == 'about-us' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/about-us') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">{{trans('admin.about_us')}}</span>
                    </a>
                </li>

                {{-- News --}}
                @php
                    $activeTreeNews = false;
                    if($segments[1] == 'news'){
                        $activeTreeNews = true;
                    }else if($segments[1] == 'categories'){
                        $activeTreeNews = (request()->type == 'news' || request()->keyword == 'news');
                    }
                @endphp
                <li class="sidebar-item {{$activeTreeNews ? 'selected' : ''}}"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">{{trans('admin.news_management')}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level {{$activeTreeNews ? 'in' : ''}}">
                        <li class="sidebar-item {{$segments[1] == 'news' ? 'active' : ''}}">
                            <a href="{{ url('admin/news/?keyword=news') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu">{{trans('admin.list_of_news')}}</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{($segments[1] == 'categories' && request()->type == 'news') ? 'active' : ''}}">
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

                {{-- Website Link --}}
                <li class="sidebar-item {{$segments[1] == 'website-link' ? 'selected' : ''}}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/website-link') }}" aria-expanded="false">
                    <i class="mdi mdi-receipt"></i><span class="hide-menu">Website Link</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>