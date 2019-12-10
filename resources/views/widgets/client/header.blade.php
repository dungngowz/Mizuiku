<div id="headerTop">
    <div class="wrp">
        <a class='slogan dnmobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/mizuiku_n_636687337648333192.png') }}" /></a>
        <a class='slogan dn dbMobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/logorespo_636332056462083140.png') }}" /></a>

        <div class="LogoPartner">

            <div class='item'>
                <a href='http://hoisinhvien.com.vn/' target='_blank' title='Student Union of Vietnam'>
                    <img alt='Student Union of Vietnam' src='{{ asset('client/pic/banner/hs_636538_636560181771074555.png') }}' />
                </a>
                <p class='title fs11'>{{ __('client.title-icon-student')}}</p>
            </div>

            <div class='item'>
                <a href='http://www.thieunhivietnam.vn/' target='_blank' title='Young Pioneer Org'>
                    <img alt='Young Pioneer Org' src='{{ asset('client/pic/banner/hd_636538_636560181837288343.png') }}' />
                </a>
                <p class='title fs11'>{{ __('client.title-icon-young')}}</p>
            </div>

            <div class='item'>
                <a href='https://www.suntory.com/' target='_blank' title=''>
                    <img alt='' src='{{ asset('client/pic/banner/_-01-For-_636583457827342377.png') }}' />
                </a>
                <p class='title fs11'></p>
            </div>

            <div class='item'>
                <a href='https://suntorypepsico.vn/en' target='_blank' title=''>
                    <img alt='' src='{{ asset('client/pic/banner/logofinal_636590617481723524.png') }}' />
                </a>
                <p class='title fs11'></p>
            </div>

        </div>

        <div class="cb"></div>
    </div>
</div>
<div id="header">
    <div class="wrp">
        <div class="buton">
            <div class='hocngay'><a href='https://mizuiku-emyeunuocsach.vn/e-learning.htm' class='btnhocngay' title='>{{ __('client.learn-now') }}'>{{ __('client.learn-now') }}</a>
                <ul class='subloginx sublogin2'>
                    <li><a href='https://mizuiku-emyeunuocsach.vn/e-learning.htm' title={{ __('client.e-learning') }}'>{{ __('client.e-learning') }}</a></li>
                    <li><a href='/thong-ke.htm' title='{{ __('client.statistical') }}'>{{ __('client.statistical') }}</a></li>
                </ul>
            </div>
            <div class="regis">
                <div class="regis1">

                    <a href='javascript://' title='{{ __('client.register') }}' class='btndk slide_open fs12'>{{ __('client.register') }}</a>
                    <span class='border'></span>
                    <a href='javascript://' title='{{ __('client.login') }}' class='btndk loginForm_open fs12'>{{ __('client.login') }}</a>

                </div>
            </div>
            <ul class='CommonLanguage'>
                @php
                    $keyLocale = config('const.key_locale_client');
                    $locale = isset($_COOKIE[$keyLocale]) ? $_COOKIE[$keyLocale] : '';
                @endphp
                <li class="{{($locale == 'vi') ? 'active' : ''}}"><a href='{{ url('set-locale/client-locale/vi') }}' class='langchi''>Tiếng Việt</a></li>
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
            <li data='1' class='litop '><a href='/' title='{{ __('client.home') }}'>{{ __('client.home') }}</a></li>
            
            {{-- About Us --}}
            @if (count($articlesAboutUs) > 0)
                <li data='2' class="litop hassub {{$segments && $segments[0] == 'gioi-thieu' ? 'active' : ''}}"><a href='{{ route('introduction', ['path' => 'program-introduction']) }}' title='{{ __('client.about-us') }}'>{{ __('client.about-us') }}</a>
                    <ul>
                        @foreach ($articlesAboutUs as $item)
                            <li>
                                <a title='{{$item->title}}' href='{{ route('introduction', ['path' => $item->keyword]) }}'>{{$item->title}}</a>
                            </li>    
                        @endforeach
                    </ul>
                </li>
            @endif

            {{-- News --}}
            @if ($categoriesNews)
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

            <li data='4' class='litop hassub'><a href='{{ route('library',['path' => 'image-library']) }}' title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a>
                <ul>
                    <li>
                        <a title='{{ __('client.album') }}' href='{{ route('library',['path' => 'image-library']) }}'>{{ __('client.album') }}</a>
                    </li>
                    <li>
                        <a title='{{ __('client.video') }}' href='{{ route('library',['path' => 'video-library']) }}'>{{ __('client.video') }}</a>
                    </li>
                </ul>
            </li>

            <li data='5' class='litop hassub {{$segments && $segments[0] == 'lich-trinh' ? 'active' : ''}}'><a href='{{ url('lich-trinh') }}' title='Program timeline'>{{ __('client.program-timeline') }}</a></li>
            
            <li data='6' class='litop hassub'><a href='{{ route('e-learning') }}' title='{{ __('client.e-learning') }}'>{{ __('client.e-learning') }}</a>
                <ul>
                    <li>
                        <a title='{{ __('client.e-learning-sub') }}' href='/'>{{ __('client.e-learning-sub') }}</a>
                    </li>
                </ul>
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