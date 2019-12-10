@extends('layouts.client.default')

@section('title', $title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{url('thu-vien/photo')}}' title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a></li>
                <li><a href='{{url('thu-vien/') . request()->keyword}}' title='{{ $title }}'>{{ $title }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div class="wrp">
            <div id="pta" class="hp cate list">
                @if (count($articles) > 0)
                    <div class="parent">
                        <div class="tieude">
                            <a href="javascript:;" title="{{$title}}" class="name">{{$title}}</a> 
                            <div class="cb"></div>
                        </div>

                        <div class="group">
                            @foreach ($articles as $item)
                                <div class="item">
                                    <div class="khungAnh {{request()->keyword == 'video' ? 'khungVideo' : ''}}">
                                        <a class="khungAnhCrop" href="{{$item->url_detail_library}}" title="{{$item->title}}">
                                            <img src="{{$item->thumbnail_display}}" class="tall" style="opacity: 1;">
                                        </a>

                                        @if (request()->keyword == 'video')
                                            <span class="ico"><img src="{{asset('client/css/PhotoAlbum/icovideo.png')}}"></span>    
                                        @endif
                                        
                                        <a href="{{$item->url_detail_library}}" title="{{$item->title}}" class="overimg"></a>
                                    </div>

                                    <a href="{{$item->url_detail_library}}" title="{{$item->title}}" class="name">{{$item->title}}</a>

                                    <div class="sharebt">
                                        <span>{{trans('client.share')}}</span>
                                        <a class="button_facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$item->url_detail_library}}&amp;display=popup&amp;ref=plugin&amp;src=like&amp;kid_directed_site=0&amp;app_id=538395969892507"></a>
                                        <a class="button_twitter" target="_blank" href="https://twitter.com/intent/tweet?text={{$item->title}}&amp;url={{$item->url_detail_library}}"></a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="cb"></div>
                        </div>
                    </div>

                    <div class='wrap-pagination'>
                        {{ $articles->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection