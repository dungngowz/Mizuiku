@extends('layouts.client.default')
@section('title', trans('client.home'))

@section('content')
    @if ($banners)
        <div id='slider' class='nivoSlider'>
            @foreach ($banners as $item)
                <a href='javascript://'>
                    <img alt="{{$item->title}}" src="{{$item->thumbnail_display}}" />
                </a>    
            @endforeach
        </div>
    @endif

    <div id='about' class='hp cate'>
        <div class='main'>
            <div class='wrp'>
                <div class='item'>
                    @if ($intro)
                        <div class='tieude'>
                            <a href='{{ $intro->url_detail_about_us }}' title='{{ $intro->title }}' class='name'>{{ $intro->title }}</a>
                        </div>
                        <div class='cont dotdotdot'>{{ $intro->description }}</div>
                        <a href='{{  $intro->url_detail_about_us }}' title='{{ __('client.details') }}' class='xct'>{{ __('client.details') }}</a>
                        <div class='cb'></div>
                    @endif
                </div>
                <div class='cb'></div>
            </div>
        </div>
    </div>

    <div id="new" class="hp">
        <div class="wrp">
            <div class="parent">

                <div class="left">
                    @foreach ($categories as $item)
                    <div class='item'>
                        <div class='tieude'>
                            <a href='https://mizuiku-emyeunuocsach.vn/program-news.htm' title='{{ $item['category_title'] }}' class='namex'>{{ $item['category_title'] }}</a>
                        </div>

                        {{-- Article --}}
                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='{{ url('gioi-thieu/'.$item['slug']) }}' title=''>
                                <img alt="" class="" src="{{ asset('client/pic/News/PN1_637070152760942277.jpg') }}" />
                            </a>
                            <div class='date'>{{ date('d/m/Y', strtotime($item['created_at'])) }}</div>
                            <a href='{{  url('gioi-thieu/'.$item['slug']) }}' title='' class='over'></a>
                        </div>
                        <a href='{{ url('gioi-thieu/'.$item['slug']) }}' title='' class='name'>{{ $item['title'] }}</a>
                        <div class='cont dotdotdot'>{{ $item['description'] }}</div>
                    </div>
                    @endforeach
                    
                </div>

                <div class="right">

                    <div class='tieude'>
                        <a href='https://mizuiku-emyeunuocsach.vn/tin-tuc.htm' title='{{ __('client.news') }}' class='namex'>{{ __('client.news') }}</a>
                    </div>
                    @if ($articles)
                        @foreach ($articles as $item)
                            <div class='item'>
                                <div class='date'>{{ date('d/m/Y', strtotime($item->created_at)) }}</div>
                                <a href='{{ url($item->slug) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='name'>{{ $item->title }}</a>
                                <div class='cb'></div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="cb"></div>
            </div>
        </div>
    </div>

    <div class="ptavideo">
        <div class="wrp">
            <div id='pta' class='hp'>
                <div class='tieude'>
                    <a href='{{ url('thu-vien/photo') }}' title='{{ __('client.photo-library') }}' class='name'>{{ __('client.photo-library') }}</a>
                    <a href='{{ url('thu-vien/photo') }}' title='{{ __('client.photo-library') }}' class='xtc'>
                        <p>{{ __('client.all') }}</p>
                    </a>
                    <div class='cb'></div>
                </div>
                
                @if (($countPhotos = count($photos)) > 0)
                    <div class="group">
                        <div class="left">
                            @for ($i = 0; $i < min(3, $countPhotos); $i++)
                                <div class="khungAnh">
                                    <a class="khungAnhCrop" href="{{$photos[$i]->url_detail_gallery}}" title="{{$photos[$i]->title}}">
                                        <img alt="{{$photos[$i]->title}}" class="tall" src="{{$photos[$i]->thumbnail_display}}" style="opacity: 1;">
                                    </a>
                                    <a href="{{$photos[$i]->url_detail_gallery}}" title="{{$photos[$i]->title}}" class="over"></a>
                                </div>    
                            @endfor
                        </div>

                        <div class="mid">
                            @if ($countPhotos > 3)
                                <div class="khungAnh">
                                    <a class="khungAnhCrop" href="{{$photos[3]->url_detail_gallery}}" title="{{$photos[3]->title}}">
                                        <img alt="{{$photos[3]->title}}" class="tall" src="{{$photos[3]->thumbnail_display}}" style="opacity: 1;">
                                    </a>
                                    <a href="{{$photos[3]->url_detail_gallery}}" title="{{$photos[3]->title}}" class="over"></a>
                                </div>
                            @endif
                        </div>

                        <div class="right">
                            @if ($countPhotos > 4)
                                @for ($i = 4; $i < $countPhotos; $i++)
                                    <div class="khungAnh">
                                        <a class="khungAnhCrop" href="{{$photos[$i]->url_detail_gallery}}" title="{{$photos[$i]->title}}">
                                            <img alt="{{$photos[$i]->title}}" class="tall" src="{{$photos[$i]->thumbnail_display}}" style="opacity: 1;">
                                        </a>
                                        <a href="{{$photos[$i]->url_detail_gallery}}" title="{{$photos[$i]->title}}" class="over"></a>
                                    </div>    
                                @endfor
                            @endif
                        </div>
                        <div class="cb"></div>
                    </div>
                @endif

            </div>

            <div id='video' class='hp'>
                <div class='tieude'>
                    <a href='{{ url('thu-vien/video') }}' title='{{ __('client.video-gallery') }}' class='name'>{{ __('client.video-gallery') }}</a>
                    <a href='{{ url('thu-vien/video') }}' title='{{ __('client.video-gallery') }}' class='xtc'>
                        <p>{{ __('client.all') }}</p>
                    </a>
                    <div class='cb'></div>
                </div>

                @if ($videos)
                    <div class='groups_items'>
                        @foreach ($videos as $item)
                            <div class='item'>
                                <div class='img'>
                                    <div class='khungAnh'>
                                        <a class='khungAnhCrop' href='{{$item->url_detail_library}}' title='{{$item->title}}'>
                                            <img src="{{$item->thumbnail_display}}" class="" />
                                        </a>
                                    </div>
                                    <a title='{{$item->title}}' class='over'></a>
                                    <a title='{{$item->title}}' class='play'></a>
                                </div>
                                <div class='bgname'>
                                    <a href='{{$item->url_detail_library}}' title='{{$item->title}}' class='name'>{{$item->title}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="cb"></div>
        </div>
    </div>

    @widget('client.timeline')

    <div id="HeadFt"></div>
@endsection

@section('custom-js')
    <script>
        if({{ session()->has('verified') ? session()->get('verified') : 0 }}) {
            alert('Kích hoạt thành công! Vui lòng đăng nhập để bắt đầu khóa học')
            $('#loginForm').popup('show');
        }
    </script>
@endsection