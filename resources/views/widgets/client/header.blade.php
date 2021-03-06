
<div id="headerTop">
    <div class="wrp">
        <a class='slogan dnmobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/mizuiku_n_636687337648333192.png') }}" /></a>
        <a class='slogan dn dbMobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/logorespo_636332056462083140.png') }}" /></a>

        <div class="LogoPartner">

            @foreach ($partners0 as $item)
                <div class='item'>
                    <a href='{{$item->url}}' target='_blank' title='{{$item->title}}'>
                        <img alt='{{$item->title}}' src='{{$item->thumbnail_display}}' />
                    </a>
                    <p class='title fs11'>{{$item->title}}</p>
                </div>    
            @endforeach

        </div>

        <div class="cb"></div>
    </div>
</div>
<div id="header">
    <div class="wrp">
        <div class="buton">
            <div class='hocngay'>
                <a href='#' class='btnhocngay' title='>{{ __('client.learn-now') }}'>{{ __('client.learn-now') }}</a>
                @if ( \Auth::check() )
                <ul class='subloginx sublogin2'>
                    @foreach ($courseListHeader as $item)
                        @if (count($item->articles) > 0)
                            <li><a href='{{ url("khoa-hoc/$item->slug") }}' title='{{ $item->title }}'>{{ $item->title }}</a></li>    
                        @endif
                    @endforeach
                    
                    <li><a href='{{ route('statistical') }}' title='{{ __('client.statistical') }}'>{{ __('client.statistical') }}</a></li>
                </ul>
                @else
                    <script>
                        $('.btnhocngay').on('click', function() {
                            $('#loginForm').popup('show');
                        });
                    </script>
                @endif
            </div>
            <div class="regis">
                <div class="regis1">
                    @if ( \Auth::check() )
                        <a href='javascript://' title="{{ \Auth::user()->name }}" class='btndk ac fs12'>{{ __('client.hi') }}, {{ \Auth::user()->name }}</a>
                        <span class='border'></span>
                        <ul class="subloginx sublogin">
                            <li><a href="{{ route('showManageAccount') }}" title="{{ trans('client.info_acc') }}">{{ trans('client.info_acc') }}</a></li> 
                            <li><a href="{{ route('showChangePassword') }}" title="{{ trans('client.change_pass') }}">{{ trans('client.change_pass') }}</a></li> 
                            <li><a href="{{ route('showMyCourse') }}" title="{{ trans('client.my_course') }}">{{ trans('client.my_course') }}</a></li> 
                            <li><a href="javascript:;" title="" class="logout_open" data-popup-ordinal="0" id="open_29030588">{{ trans('client.log_out') }}</a></li> 
                        </ul>
                    @else
                        <a href='javascript://' title='{{ __('client.register') }}' class='btndk slide_open fs12'>{{ __('client.register') }}</a>
                        <span class='border'></span>
                        <a href='javascript://' title='{{ __('client.login') }}' class='btndk loginForm_open fs12'>{{ __('client.login') }}</a>
                    @endif

                </div>
            </div>
            <ul class='CommonLanguage'>
                @php
                    $keyLocale = config('const.key_locale_client');
                    $locale = isset($_COOKIE[$keyLocale]) ? $_COOKIE[$keyLocale] : '';
                @endphp
                <li class="{{($locale == 'vi') ? 'active' : ''}}"><a href='{{ url('set-locale/client-locale/vi') }}' class='langchi'>Tiếng Việt</a></li>
                <li class="{{($locale == 'en') ? 'active' : ''}}"><a href='{{ url('set-locale/client-locale/en') }}' class='langchi'>English</a></li>
            </ul>

            <div class="cb"></div>
        </div>
        <div class="cb"></div>
    </div>
</div>

<div id="menu">
    <div class="wrp">
        <div id="btnmenu" class="dn dbmobile-l"></div>
        <i class="icoac">
        <img src="{{ asset('client/css/Common/menuactive.png') }}" /></i>
        <ul id='CommonMenuMain' class='main'>
            <li data='1' class='litop {{$segments[0] == '' ? 'active' : ''}}'>
                <a href="/" title='{{ __('client.home') }}'>{{ __('client.home') }}</a>
            </li>
            
            {{-- About Us --}}
            @if (count($aboutUs) > 0)
                <li data='2' class="litop hassub {{$segments && $segments[0] == 'gioi-thieu' ? 'active' : ''}}"><a href='{{ route('introduction', ['path' => $aboutUs[0]->slug_menu ]) }}' title='{{ __('client.about-us') }}'>{{ __('client.about-us') }}</a>
                    <ul>
                        @foreach ($aboutUs as $item)
                            <li>
                                <a href="{{ route('introduction', ['ref_id' => $item->ref_id]) }}">{{ $item->title_menu }}</a>
                            </li>    
                        @endforeach
                    </ul>
                </li>
            @endif

            {{-- News --}}

            @if (count($categoriesNews) > 0)
                <li data='3' class='litop hassub {{$segments && $segments[0] == 'tin-tuc' ? 'active' : ''}}'>
                    <a href='{{ $categoriesNews[0]->url_detail_news }}' title='{{ $categoriesNews[0]->title }}'>{{ __('client.news') }}</a>
                    <ul>
                        @foreach ($categoriesNews as $item)
                            <li>
                                <a title='{{ $item->title }}' href='{{ $item->url_detail_news }}'>{{$item->title}}</a>
                            </li>    
                        @endforeach
                    </ul>
                </li>
            @endif

            <li data='4' class='litop hassub {{$segments[0] == 'thu-vien' ? 'active' : ''}}'><a href="{{url('thu-vien/photo')}}" title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a>
                <ul>
                    <li>
                        <a title='{{ __('client.album') }}' href="{{url('thu-vien/photo')}}">{{ __('client.album') }}</a>
                    </li>
                    <li>
                        <a title='{{ __('client.video') }}' href="{{url('thu-vien/video')}}">{{ __('client.video') }}</a>
                    </li>
                </ul>
            </li>

            <li data='5' class='litop hassub {{$segments && $segments[0] == 'lich-trinh' ? 'active' : ''}}'><a href='{{ url('lich-trinh') }}' title='Program timeline'>{{ __('client.program-timeline') }}</a></li>
            
            <li data='6' class='litop hassub {{$segments[0] == 'khoa-hoc' ? 'active' : ''}}'><a href='{{ route('e-learning') }}' title='{{ __('client.e-learning') }}'>{{ __('client.e-learning') }}</a>
            </li>
            <li data='7' class='litop {{$segments && $segments[0] == 'lien-he' ? 'active' : ''}}'><a href='{{ route('contact') }}' title='{{ __('client.contact-us') }}'>{{ __('client.contact-us') }}</a></li>
        </ul>
        <div class="cmNav">
            <a target='_blank' href='https://www.facebook.com/mizuikuemyeunuocsach/' title='fanpage facebook'><span>{{ __('client.follow-us') }}</span><img alt='fb' src='{{ asset('client/css/Common/fb.png') }}'/></a>
            <div class="cb"></div>
        </div>
    </div>
</div>

<a href="javascript://" title="" id="bttop">
    <span class="ico"><img src="{{ asset('client/css/Common/icobttop.png') }}" alt="go top" /></span>
</a>