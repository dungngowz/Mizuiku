@extends('layouts.client.default')

@section('title', $detailCategory->title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{$categoriesNews[0]->url_detail_news}}' title='{{ __('client.news') }}'>{{ __('client.news') }}</a></li>
                <li><a href='{{$detailCategory->url_detail_news}}' title='{{ $detailCategory->url_detail_news }}'>{{ $detailCategory->title }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div id='new' class='hp cate'>
            <div class='wrp'>
                <div class='tieude'>
                    <a href='{{$categoriesNews[0]->url_detail_news}}' title='{{ __('client.news') }}' class='name'>{{ __('client.news') }}</a>
                </div>

                <ul class='tab'>
                    @foreach ($categoriesNews as $item)
                        <li class="{{$item->id == $detailCategory->id ? 'active' : ''}}">
                            <a href='{{$item->url_detail_news}}' title='{{$item->title}}'>{{$item->title}}</a>
                        </li>    
                    @endforeach
                </ul>

                @if (count($articles) > 0)
                    <div class='parent'>
                        <div class='left'>
                            @foreach ($articles as $item)
                                <div class='item'>
                                    <div class='khungAnh'>
                                        <a class='khungAnhCrop' href='{{$item->url_detail_news}}' title='{{$item->title}}'>
                                        <img alt="{{$item->title}}" class="" src="{{$item->thumbnail_display}}" />
                                        </a>
                                        <div class='date'>{{$item->updated_at->format('d-m-Y')}}</div>
                                        <a href='{{$item->url_detail_news}}' title='{{$item->title}}' class='over'></a>
                                    </div>
                                    <a href='{{$item->url_detail_news}}' title='{{$item->title}}' class='name'>{{$item->title}}</a>
                                    <div class='cont dotdotdot'>{{$item->description}}</div>
                                </div>
                            @endforeach
                            <div class='cb'></div>
                        </div>
                        <div class='cb'></div>
                    </div>

                    <div class='phantrang'>
                        {{ $articles->appends(['ref_id' => request()->ref_id])->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection