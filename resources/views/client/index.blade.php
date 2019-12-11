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
                <div class='group' id="list-photo">
                    @if ($photo)
                        {{-- left, mid, right --}}
                        <div class="left"> 
                            @foreach ($photo as $key => $item)
                                <div class='khungAnh'>
                                    <a class='khungAnhCrop' href='{{ url('thu-vien/photo/'. $item->slug) }}' title='{{ $item->title }}'>
                                        <img alt="{{ $item->title }}" src="{{ asset('storage/'.$item->gallery[0]->file_path) }}" />
                                    </a>
                                    <a href='{{ url('thu-vien/photo/'. $item->slug) }}' title='{{ $item->title }}' class='over'></a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class='cb'></div>
                </div>
            </div>

            <div id='video' class='hp'>
                <div class='tieude'>
                    <a href='{{ url('thu-vien/video') }}' title='{{ __('client.video-gallery') }}' class='name'>{{ __('client.video-gallery') }}</a>
                    <a href='{{ url('thu-vien/video') }}' title='{{ __('client.video-gallery') }}' class='xtc'>
                        <p>All</p>
                    </a>
                    <div class='cb'></div>
                </div>
                <div class='groups_items'>
                    @if ($video)
                        @foreach ($video as $item)
                            <div class='item'>
                                <div class='img'>
                                    <div class='khungAnh'>
                                        <a class='khungAnhCrop' href='{{ url('thu-vien/video/'. $item->slug) }}' title='{{ $item->title }}'>
                                            <img src="{{ $item->url }}"/>
                                        </a>
                                    </div>
                                    <a title='{{ $item->title }}' class='over'></a>
                                    <a title='{{ $item->title }}' class='play'></a>
                                    {{-- <iframe src='https://www.youtube.com/embed/VwMzBW0V8m8' frameborder='0' allowfullscreen></iframe> --}}
                                </div>
                                <div class='bgname'>
                                    <a href='{{ url('thu-vien/video/'. $item->slug) }}' title='{{ $item->title }}' class='name'>{{ $item->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
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