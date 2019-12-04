@extends('layouts.client.default')
@section('url-form', '/')
@section('params-form')
    <div>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABRnd0UL2yz8Nwhuj9eAYk9JxSmaAS04ClqMGm0TNSe71PY6NPEhGxyqUfbrtU5fmn2Ea1JmMp/omb6DBYyqB8t4aJWaBGhcdI015b/mBhG3Gx7EMk7ShbbqtY6TGZoa9ziTJ6S6DYjhZubzEtbOrs4EqRjlsWi91vMr8+iawXpLpulctB5UNZMCEqnVpCZUOhsJbzoBqJlLSqTOV+ByHgA8fCUMftueCVzFLlj7PVAFccWHLKmKn1d9PSHqKgkLpF6HjsBalzX8GRHC3hP00WRujLfdiHdgjx59E5EVWfsewFL1TWIyRwEAx82L0V5V3dLr5cUzuLeFE8JcO/xGFc9Xki7u87Rh3NAa0R0R7xsQcJRbMjWeiBsYX78aMpRgLxDyDNJGUOxSowwhsySzxlSpkr18Jgt91XABMyxg49or3K6KLvKC7ptFLM58gKJFjVofgNiU" />
    </div>
@endsection
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
                    <div class='tieude'>
                        <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program.htm' title='{{ __('client.title-banner') }}' class='name'>{{ __('client.title-banner') }}</a>
                    </div>
                    <div class='cont dotdotdot'>>{{ __('client.des-banner') }}</div>
                    <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-i-love-clean-water-program.htm' title='{{ __('client.title-banner') }}' class='xct'>{{ __('client.details') }}</a>
                    <div class='cb'></div>
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
                            <a href='https://mizuiku-emyeunuocsach.vn/program-news.htm' title='{{ $item['title'] }}' class='namex'>{{ $item['title'] }}</a>
                        </div>

                        {{-- Article --}}
                        <div class='khungAnh'>
                            <a class='khungAnhCrop' href='{{ url(end($item['articles'])['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released'>
                                <img alt="Comic series Mizu – A Talking Water Drop released" class="" src="{{ asset('client/pic/News/PN1_637070152760942277.jpg') }}" />
                            </a>
                            <div class='date'>{{ date('d/m/Y', strtotime(end($item['articles'])['created_at'])) }}</div>
                            <a href='{{ url(end($item['articles'])['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='over'></a>
                        </div>
                        <a href='{{ url(end($item['articles'])['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='name'>{{ end($item['articles'])['title'] }}</a>
                        <div class='cont dotdotdot'>{{ end($item['articles'])['description'] }}</div>
                    </div>
                    @endforeach
                    
                </div>

                <div class="right">

                    <div class='tieude'>
                        <a href='https://mizuiku-emyeunuocsach.vn/tin-tuc.htm' title='{{ __('client.news') }}' class='namex'>{{ __('client.news') }}</a>
                    </div>
                    @foreach ($articles as $item)
                        <div class='item'>
                            <div class='date'>{{ date('d/m/Y', strtotime($item['created_at'])) }}</div>
                            <a href='{{ url($item['slug']) }}' title='Comic series "Mizu – A Talking Water Drop" released' class='name'>{{ $item['title'] }}</a>
                            <div class='cb'></div>
                        </div>
                    @endforeach
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

    <div id="lichtrinh">
        <div class="top bot">
            <div class="wrp">

                <div class='tieude'>
                    <a href='https://mizuiku-emyeunuocsach.vn/lich-trinh.htm' title='{{ __('client.program-timeline') }}' class='name'>{{ __('client.program-timeline') }}</a>
                </div>
                <div class='cont'></div>
                <div class='group'>
                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/nationwide-mizuiku-i-love-clean-water-program-kick-off-ceremony.htm' title='Nationwide "Mizuiku-I love clean water" program kick-off ceremony'>
                            <div class='text'>
                                <span class='fs12'>March</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/nationwide-mizuiku-i-love-clean-water-program-kick-off-ceremony.htm' title='Nationwide "Mizuiku-I love clean water" program kick-off ceremony' class='name'>Nationwide "Mizuiku-I love clean water" program kick-off ceremony</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/trainings-for-elementary-school-teachers.htm' title='Trainings for Elementary School Teachers'>
                            <div class='text'>
                                <span class='fs12'>April</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/trainings-for-elementary-school-teachers.htm' title='Trainings for Elementary School Teachers' class='name'>Trainings for Elementary School Teachers</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/mizuiku-classes-about-water-resource-and-environment-education-for-elementary-school-students.htm' title='Mizuiku classes about  water resource and environment education for elementary school students'>
                            <div class='text'>
                                <span class='fs12'>May</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-classes-about-water-resource-and-environment-education-for-elementary-school-students.htm' title='Mizuiku classes about  water resource and environment education for elementary school students' class='name'>Mizuiku classes about  water resource and environment education for elementary school students</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/constructing-and-upgrading-clean-water-facilities-at-beneficiary-elementary-schools-and-community-sites.htm' title='Constructing and upgrading clean water facilities at beneficiary elementary schools and community sites'>
                            <div class='text'>
                                <span class='fs12'>June</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/constructing-and-upgrading-clean-water-facilities-at-beneficiary-elementary-schools-and-community-sites.htm' title='Constructing and upgrading clean water facilities at beneficiary elementary schools and community sites' class='name'>Constructing and upgrading clean water facilities at beneficiary elementary schools and community sites</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/mizuiku-ambassador-program.htm' title='Mizuiku Ambassador Program'>
                            <div class='text'>
                                <span class='fs12'>July</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-ambassador-program.htm' title='Mizuiku Ambassador Program' class='name'>Mizuiku Ambassador Program</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/mizuiku-extra-curriculum-conducted-by-mizuiku-ambassadors-about-water-resource-and-environment-education-for-children.htm' title='Mizuiku extra curriculum conducted by Mizuiku Ambassadors about  water resource and environment education for children'>
                            <div class='text'>
                                <span class='fs12'>August</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/mizuiku-extra-curriculum-conducted-by-mizuiku-ambassadors-about-water-resource-and-environment-education-for-children.htm' title='Mizuiku extra curriculum conducted by Mizuiku Ambassadors about  water resource and environment education for children' class='name'>Mizuiku extra curriculum conducted by Mizuiku Ambassadors about  water resource and environment education for children</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/clean-water-knight-festival.htm' title='Clean Water Knight festival'>
                            <div class='text'>
                                <span class='fs12'>September</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/clean-water-knight-festival.htm' title='Clean Water Knight festival' class='name'>Clean Water Knight festival</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-vietnam-plant-tour.htm' title='Suntory PepsiCo Vietnam Plant tour'>
                            <div class='text'>
                                <span class='fs12'>October - November</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/suntory-pepsico-vietnam-plant-tour.htm' title='Suntory PepsiCo Vietnam Plant tour' class='name'>Suntory PepsiCo Vietnam Plant tour</a>
                    </div>

                    <div class='item'>
                        <a class='date' href='https://mizuiku-emyeunuocsach.vn/closing-ceremony-of-the-mizuiku-i-love-clean-water-program.htm' title='Closing ceremony of the "Mizuiku - I love clean water" program'>
                            <div class='text'>
                                <span class='fs12'>December</span>
                            </div>
                        </a>

                        <a href='https://mizuiku-emyeunuocsach.vn/closing-ceremony-of-the-mizuiku-i-love-clean-water-program.htm' title='Closing ceremony of the "Mizuiku - I love clean water" program' class='name'>Closing ceremony of the "Mizuiku - I love clean water" program</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="HeadFt"></div>
@endsection