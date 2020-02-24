@extends('layouts.client.default')
@section('title', trans('client.about-us'))

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ url('') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
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
                        @foreach ($partners0 as $item)
                            <div class='item'>
                                <a href='{{$item->url}}' target='_blank' title='{{$item->title}}'>
                                    <img alt='{{$item->title}}' src='{{$item->thumbnail_display}}' />
                                </a>
                                <p class='title fs11'>{{$item->title}}</p>
                            </div>    
                        @endforeach
                    </div>
                </div>
                <div class='content'>
                    <div class='vgName'>{{ __('client.edu-partner')}}</div>
                    <div class='groupItem'>
                        @foreach ($partners1 as $item)
                            <div class='item'>
                                <a href='{{$item->url}}' target='_blank' title='{{$item->title}}'>
                                    <img alt='{{$item->title}}' src='{{$item->thumbnail_display}}' />
                                </a>
                                <p class='title fs11'>{{$item->title}}</p>
                            </div>    
                        @endforeach
                    </div>
                </div>
                <div class="cb"></div>
            </div>
        </div>

    </div>

        
@endsection