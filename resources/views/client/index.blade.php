@extends('layouts.client.default')
@section('title', config('app.name'))

@section('content')
    <div id='slider' class='nivoSlider'>
        <a href='javascript://'><img alt="" src="{{ asset('client/pic/banner/Banne_636905880545478378.jpg') }}" /></a>
        <a href='javascript://'><img alt="" src="{{ asset('client/pic/banner/1_637025133340565189.jpg') }}" /></a>
        <a href='javascript://'><img alt="" src="{{ asset('client/pic/banner/slide_636573346101899731.jpg') }}" /></a>
    </div>

    <div id='about' class='hp cate'>
        <div class='main'>
            <div class='wrp'>
                <div class='item'>
                    @if ($intro)
                        <div class='tieude'>
                            <a href='{{ $intro->url_detail_about_us_display }}' title='{{ $intro->title }}' class='name'>{{ $intro->title }}</a>
                        </div>
                        <div class='cont dotdotdot'>{{ $intro->description }}</div>
                        <a href='{{  $intro->url_detail_about_us_display }}' title='{{ __('client.details') }}' class='xct'>{{ __('client.details') }}</a>
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
                            <a class='khungAnhCrop' href='{{ url($item['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released'>
                                <img alt="Comic series Mizu – A Talking Water Drop released" class="" src="{{ asset('client/pic/News/PN1_637070152760942277.jpg') }}" />
                            </a>
                            <div class='date'>{{ date('d/m/Y', strtotime($item['created_at'])) }}</div>
                            <a href='{{ url($item['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='over'></a>
                        </div>
                        <a href='{{ url($item['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='name'>{{ $item['title'] }}</a>
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
                                <div class='date'>{{ date('d/m/Y', strtotime($item['created_at'])) }}</div>
                                <a href='{{ url($item['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='name'>{{ $item['title'] }}</a>
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
                    <a href='https://mizuiku-emyeunuocsach.vn/photo-library.htm' title='{{ __('client.photo-library') }}' class='name'>{{ __('client.photo-library') }}</a>
                    <a href='https://mizuiku-emyeunuocsach.vn/photo-library.htm' title='{{ __('client.photo-library') }}' class='xtc'>
                        <p>{{ __('client.all') }}</p>
                    </a>
                    <div class='cb'></div>
                </div>
                <div class='group'>
                    <div class='left'>
                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/training-course-for-teachers-in-bac-ninh-province-and-hanoi.htm' title='Training course for teachers in Bac Ninh province and Hanoi. '>
                                <img alt="Training course for teachers in Bac Ninh province and Hanoi. " class="" src="{{ asset('client/pic/PhotoAlbum/IMG_380_636572446370408034.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/training-course-for-teachers-in-bac-ninh-province-and-hanoi.htm' title='Training course for teachers in Bac Ninh province and Hanoi. ' class='over'></a>
                        </div>

                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-booth-in-the-10th-annual-recycling-day-hcmc.htm' title='"Mizuiku - I love clean water" booth in the 10th Annual Recycling Day (HCMC)'>
                                <img alt="Mizuiku - I love clean water booth in the 10th Annual Recycling Day (HCMC)" class="" src="{{ asset('client/pic/PhotoAlbum/Nhan-vien_636572468981841334.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-booth-in-the-10th-annual-recycling-day-hcmc.htm' title='"Mizuiku - I love clean water" booth in the 10th Annual Recycling Day (HCMC)' class='over'></a>
                        </div>

                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-can-tho-plant-tour-of-my-an-elementary-school-thanh-phu-district-ben-tre-province.htm' title='Suntory PepsiCo Can Tho plant tour of My An Elementary School (Thanh Phu district, Ben Tre province)'>
                                <img alt="Suntory PepsiCo Can Tho plant tour of My An Elementary School (Thanh Phu district, Ben Tre province)" class="" src="{{ asset('client/pic/PhotoAlbum/DSCN9180-_636589681830384771.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-can-tho-plant-tour-of-my-an-elementary-school-thanh-phu-district-ben-tre-province.htm' title='Suntory PepsiCo Can Tho plant tour of My An Elementary School (Thanh Phu district, Ben Tre province)' class='over'></a>
                        </div>
                    </div>
                    <div class='mid'>
                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-can-tho-plant-tour-of-tan-thieng-b-elementary-school-cho-lach-district-ben-tre-province.htm' title='Suntory PepsiCo Can Tho plant tour of Tan Thieng B Elementary School (Cho Lach district, Ben Tre province)'>
                                <img alt="Suntory PepsiCo Can Tho plant tour of Tan Thieng B Elementary School (Cho Lach district, Ben Tre province)" class="" src="{{ asset('client/pic/PhotoAlbum/TH_TanThi_636589684630760792.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-can-tho-plant-tour-of-tan-thieng-b-elementary-school-cho-lach-district-ben-tre-province.htm' title='Suntory PepsiCo Can Tho plant tour of Tan Thieng B Elementary School (Cho Lach district, Ben Tre province)' class='over'></a>
                        </div>
                    </div>
                    <div class='right'>
                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/outstanding-results-of-mizuiku-i-love-clean-water-drawing-contest-2017.htm' title='Outstanding results of “Mizuiku – I love clean water” drawing contest 2017'>
                                <img alt="Outstanding results of “Mizuiku – I love clean water” drawing contest 2017" class="" src="{{ asset('client/pic/PhotoAlbum/VetranhMi_636590297963769140.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/outstanding-results-of-mizuiku-i-love-clean-water-drawing-contest-2017.htm' title='Outstanding results of “Mizuiku – I love clean water” drawing contest 2017' class='over'></a>
                        </div>

                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program-2017-kick-off-ceremony.htm' title='"Mizuiku - I love clean water" program 2017 Kick-off ceremony '>
                                <img alt="Mizuiku - I love clean water program 2017 Kick-off ceremony " class="" src="{{ asset('client/pic/PhotoAlbum/Hoc-sinh-_636351200895821409.jpg') }}" />
                            </a>
                            <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program-2017-kick-off-ceremony.htm' title='"Mizuiku - I love clean water" program 2017 Kick-off ceremony ' class='over'></a>
                        </div>
                    </div>
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