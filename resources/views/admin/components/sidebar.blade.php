@php
    $seg2 = Request::segment(2);
    $seg3 = Request::segment(3);
@endphp

<aside class="left-sidebar" data-sidebarbg="skin5">
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
</aside>