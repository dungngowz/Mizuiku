@php
    $seg2 = Request::segment(2);
    $seg3 = Request::segment(3);
@endphp

{{-- <aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> 
                    <a class="{{($seg2 == 'contact-us') ? 'active' : ''}} sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/contact-us')}}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">{{__('Contact Us')}}</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside> --}}

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">{{ trans('dashboard.dashboard_sidebar') }}</span></a></li>
                
                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{ trans('introduction.introduction_sidebar') }} </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('intro.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('introduction.all') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('intro.program') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('introduction.program_sidebar') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('intro.partner') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> {{ trans('introduction.partner_sidebar') }} </span></a></li>
                    </ul>
                </li> --}}

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{ trans('news.news_sidebar') }} </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('news.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('news.all') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('news.program') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('news.program_sidebar') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('news.environment') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> {{ trans('news.environment_sidebar') }} </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{ trans('library.library_sidebar') }} </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('library.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('library.all') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('library.image') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> {{ trans('library.image_sidebar') }} </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('library.video') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> {{ trans('library.video_sidebar') }} </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/schedule') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">{{ trans('schedule.schedule_sidebar') }}</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/e-learning') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">{{ trans('eLearning.eLearning_sidebar') }}</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('admin/contact-us') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">{{ trans('contact.contact_sidebar') }}</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

@push('scripts')

@endpush
