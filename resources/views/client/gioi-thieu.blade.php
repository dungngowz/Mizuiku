@extends('layouts.client.default')
@section('title', trans('client.about-us'))

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ config('app.url') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{ route('introduction') }}' title='{{ __('client.introduction') }}'>{{ __('client.introduction') }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="headAbout"></div>
    <div id="about" class="cate list">

        <div class='main'>
            <div class='wrp'>
                <div class='item'>
                    @if ($intro)
                        <div class='tieude'>
                            <a href='{{ $intro->url_detail_about_us }}' title='{{ $intro->title }}' class='name'>{{ $intro->title }}</a>
                        </div>
                        <div class='cont dotdotdot'>{{ $intro->description }}</div>
                        <a href='{{ $intro->url_detail_about_us }}' title='Details' class='xct'>{{ __('client.details') }}</a>
                        <div class='cb'></div>
                    @endif
                </div>
                <div class='cb'></div>
            </div>
        </div>

        <div class="parent">
            <div class="wrp">
                <div class="tieude"><a class="name">{{ __('client.partner')}}</a></div>
                <div class='content'>
                    <div class='vgName'>{{ __('client.co-partner')}}</div>
                    <div class='groupItem'>
                        <div class='item'>
                            <a href='http://hoisinhvien.com.vn/' target='_blank' title='Student Union of Vietnam'>
                                <img alt='Student Union of Vietnam' src='https://mizuiku-emyeunuocsach.vn/pic/banner/hs_636538_636560181771074555.png' />
                            </a>
                            <p class='title fs11'>{{ __('client.title-icon-student')}}</p>
                        </div>

                        <div class='item'>
                            <a href='http://www.thieunhivietnam.vn/' target='_blank' title='Young Pioneer Org'>
                                <img alt='Young Pioneer Org' src='https://mizuiku-emyeunuocsach.vn/pic/banner/hd_636538_636560181837288343.png' />
                            </a>
                            <p class='title fs11'>{{ __('client.title-icon-young')}}</p>
                        </div>

                        <div class='item'>
                            <a href='https://www.suntory.com/' target='_blank' title=''>
                                <img alt='' src='https://mizuiku-emyeunuocsach.vn/pic/banner/_-01-For-_636583457827342377.png' />
                            </a>
                            <p class='title fs11'></p>
                        </div>

                        <div class='item'>
                            <a href='https://suntorypepsico.vn/en' target='_blank' title=''>
                                <img alt='' src='https://mizuiku-emyeunuocsach.vn/pic/banner/logofinal_636590617481723524.png' />
                            </a>
                            <p class='title fs11'></p>
                        </div>
                    </div>
                </div>
                <div class='content'>
                    <div class='vgName'>{{ __('client.edu-partner')}}</div>
                    <div class='groupItem'>
                        <div class='item'>
                            <a href='javascript://' target='_blank' title=' '>
                                <img alt=' ' src='https://mizuiku-emyeunuocsach.vn/pic/banner/lg_636319_636332056275982495.png' />
                            </a>
                            <p class='title fs11'> </p>
                        </div>

                        <div class='item'>
                            <a href='http://www.livelearn.org/' target='_blank' title=' '>
                                <img alt=' ' src='https://mizuiku-emyeunuocsach.vn/pic/banner/lg_636319_636332056316264799.png' />
                            </a>
                            <p class='title fs11'> </p>
                        </div>
                    </div>
                </div>
                <div class="cb"></div>
            </div>
        </div>

    </div>

        
@endsection