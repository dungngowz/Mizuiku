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
                    <a href='https://mizuiku-emyeunuocsach.vn/video-gallery.htm' title='{{ __('client.video-gallery') }}' class='name'>{{ __('client.video-gallery') }}</a>
                    <a href='https://mizuiku-emyeunuocsach.vn/video-gallery.htm' title='{{ __('client.video-gallery') }}' class='xtc'>
                        <p>All</p>
                    </a>
                    <div class='cb'></div>
                </div>
                <div class='groups_items'>
                    <div class='item'>
                        <div class='img'>
                            <div class='khungAnh'>
                                <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/lauching-ceremony-of-mizuiku-i-love-clean-water-in-2016.htm' title='Lauching ceremony of "Mizuiku - I love clean water" in 2016'>
                                    {{-- <img src="https://i.ytimg.com/vi/VwMzBW0V8m8/0.jpg" class="" /> --}}
                                </a>
                            </div>
                            <a title='Lauching ceremony of "Mizuiku - I love clean water" in 2016' class='over'></a>
                            <a title='Lauching ceremony of "Mizuiku - I love clean water" in 2016' class='play'></a>
                            {{-- <iframe src='https://www.youtube.com/embed/VwMzBW0V8m8' frameborder='0' allowfullscreen></iframe> --}}
                        </div>
                        <div class='bgname'>
                            <a href='https://mizuiku-emyeunuocsach.vn/lauching-ceremony-of-mizuiku-i-love-clean-water-in-2016.htm' title='Lauching ceremony of "Mizuiku - I love clean water" in 2016' class='name'>Lauching ceremony of "Mizuiku - I love clean water" in 2016</a>
                        </div>
                    </div>

                    <div class='item'>
                        <div class='img'>
                            <div class='khungAnh'>
                                <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program-kick-off-ceremony-in-2017.htm' title='"Mizuiku - I love clean water" program kick-off ceremony in 2017'>
                                    {{-- <img src="https://i.ytimg.com/vi/ulZZVbvGTsU/0.jpg" class="" /> --}}
                                </a>
                            </div>
                            <a title='"Mizuiku - I love clean water" program kick-off ceremony in 2017' class='over'></a>
                            <a title='"Mizuiku - I love clean water" program kick-off ceremony in 2017' class='play'></a>
                            {{-- <iframe src='https://www.youtube.com/embed/ulZZVbvGTsU' frameborder='0' allowfullscreen></iframe> --}}
                        </div>
                        <div class='bgname'>
                            <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program-kick-off-ceremony-in-2017.htm' title='"Mizuiku - I love clean water" program kick-off ceremony in 2017' class='name'>"Mizuiku - I love clean water" program kick-off ceremony in 2017</a>
                        </div>
                    </div>

                    <div class='item'>
                        <div class='img'>
                            <div class='khungAnh'>
                                <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/introducing-the-mizuiku-program-in-japan.htm' title='Introducing the Mizuiku program in Japan'>
                                    {{-- <img src="https://i.ytimg.com/vi/Fx_8UHU6Ysw/0.jpg" class="" /> --}}
                                </a>
                            </div>
                            <a title='Introducing the Mizuiku program in Japan' class='over'></a>
                            <a title='Introducing the Mizuiku program in Japan' class='play'></a>
                            {{-- <iframe src='https://www.youtube.com/embed/Fx_8UHU6Ysw' frameborder='0' allowfullscreen></iframe> --}}
                        </div>
                        <div class='bgname'>
                            <a href='https://mizuiku-emyeunuocsach.vn/introducing-the-mizuiku-program-in-japan.htm' title='Introducing the Mizuiku program in Japan' class='name'>Introducing the Mizuiku program in Japan</a>
                        </div>
                    </div>
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