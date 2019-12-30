@extends('layouts.client.default')

@section('title', $record->title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{$categoriesNews[0]->url_detail_news}}' title='{{ __('client.news') }}'>{{ __('client.news') }}</a></li>
                <li><a href='{{$record->category->url_detail_news}}' title='{{ $record->category->url_detail_news }}'>{{ $record->category->title }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div id="about" class="detail">
            <div class="wrp">
                <div class="colleft">
                    <div class="fs30 c109ce3 fiCielCadena pb10">
                        <h1>{{$record->title}}</h1>
                    </div>
                    <div class="baiviet">
                        <div class="thongke">
                            <a class="thongke_ngay">{{trans('client.date-submitted')}}: {{$record->created_at->format('H:i d-m-Y')}}</a>
                            <a class="thongke_luotxem">{{trans('client.views')}}: {{number_format($record->views)}}</a>
                            <div class="cochu">
                                <a class="NormalSize" href="javascript:ResetTextSize()">{{trans('client.size')}}</a>
                                <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                            </div>
                        </div>
                        
                        <div class="noidung TextSize">{!! $record->content !!}</div>

                        @component('client/components/social', ['record' => $record])@endcomponent
                    </div>
                </div>

                <div class="colright" style="height: 393px;">
                    <div class="NewsOther stick1" style="top: 0px;">
                        <div class="fs24 c109ce3 fiCielCadena pb10 pt7">
                            <p>{{trans('client.orther-post')}}</p>
                        </div>

                        @if ($ortherArticles)
                            <ul>
                                @foreach ($ortherArticles as $item)
                                    <li>
                                        <div class="khungAnh">
                                            <a href="{{$item->url_detail_news}}" title="{{$item->title}}" class="khungAnhCrop">
                                            <img alt="{{$item->title}}" class="tall" src="{{$item->thumbnail_display}}" style="opacity: 1;">
                                            </a>
                                        </div>
                                        <a class="titleItem" href="{{$item->url_detail_news}}" title="{{$item->title}}">
                                            <h2>{{$item->title}}</h2>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>    
                        @endif
                        
                    </div>
                </div>
                <div class="cb"></div>
            </div>
        </div>
    </div>
@endsection