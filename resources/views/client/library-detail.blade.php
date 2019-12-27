@extends('layouts.client.default')

@section('title', $record->title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{url('thu-vien/photo')}}' title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a></li>
                <li><a href='{{url('thu-vien') . '/' . request()->keyword}}' title='{{ $title }}'>{{ $title }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div id="pta" class="hp cate list detail">
            <div class="wrp">
                <div class="fs30 c109ce3 fiCielCadena pb10">
                    <h1>{{$record->title}}</h1>
                </div>
                    
                <div class="baiviet">
                    <div class="thongke">
                        <a class="thongke_ngay">{{trans('client.date-submitted')}}: {{$record->updated_at->format('H:i d-m-Y')}}</a>
                        <a class="thongke_luotxem">{{trans('client.views')}}: {{number_format($record->views)}}</a>
                        <div class="cochu">
                            <a class="NormalSize" href="javascript:ResetTextSize()">{{trans('client.size')}}</a>
                            <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                            <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                        </div>
                    </div>

                    @if (request()->keyword == 'video')
                        <div class="noidung TextSize">
                            @php
                                echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$record->url);
                            @endphp
                        </div>    
                    @else
                        <div class="noidung TextSize">{!! $record->content !!}</div>
                        <div class='bst'>
                            @foreach ($record->gallery as $item)
                                <div class='item'>
                                    <div class='khungAnh'>
                                        <a class='khungAnhCrop' href='javascript://' title='IMG_2654'>
                                            <img alt="{{$record->title}}" class="" src="{{$item->thumbnail_display}}" />
                                        </a>
                                        <a href='{{$item->thumbnail_display}}' title='IMG_2654' class='over example-image-link' data-lightbox='example-set'></a>
                                    </div>
                                </div>
                            @endforeach
                            
                            <div class='cb'></div>
                        </div>
                    @endif

                    @component('client/components/social', ['record' => $record])@endcomponent
                </div>

                @if (count($ortherArticles) > 0)
                    <div class='other'>
                        <p class='fs24 c0e9ee6 fiCielGotham pb10'>{{request()->keyword == 'video' ? trans('client.other_videos') : trans('client.other_photo')}}</p>
                        <div class='group'>
                            @foreach ($ortherArticles as $item)
                                <div class="item">
                                    <div class="khungAnh {{request()->keyword == 'video' ? 'khungVideo' : ''}}">
                                        <a class="khungAnhCrop" href="{{$item->url_detail_library}}" title="{{$item->title}}">
                                            <img src="{{asset($item->thumbnail_display)}}" class="tall" style="opacity: 1;">
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
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection