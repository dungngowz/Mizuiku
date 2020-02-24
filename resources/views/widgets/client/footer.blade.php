<div id="foot">
    <div class="wrp">
        <div class="left">
            <a class='slogan dnmobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/mizuiku_n_636687337648333192.png') }}" /></a>
            <a class='slogan dn dbMobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/logorespo_636332056462083140.png') }}" /></a>

            <ul id='CommonMenuFooter' class='main'>
                <li><a href='/' title='{{ __('client.home') }}'>{{ __('client.home') }}</a></li>

                @if (count($articlesAboutUs) > 0)
                    <li><a class="{{$segments[0] == 'gioi-thieu' ? 'active' : ''}}" href='{{ route('introduction', ['path' => 'program-introduction']) }}' title='{{ __('client.about-us') }}'>{{ __('client.about-us') }}</a></li>
                @endif

                @if (count($categoriesNews) > 0)
                    <li><a class="{{$segments[0] == 'tin-tuc' ? 'active' : ''}}" href='{{ $categoriesNews[0]->url_detail_news }}' title='{{ __('client.news') }}'>{{ __('client.news') }}</a></li>
                @endif

                <li><a class="{{$segments[0] == 'thu-vien' ? 'active' : ''}}" href='{{url('thu-vien/photo')}}' title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a></li>
                <li><a class="{{$segments[0] == 'lich-trinh' ? 'active' : ''}}" href='{{ url('lich-trinh') }}' title='{{ __('client.program-timeline') }}'>{{ __('client.program-timeline') }}</a></li>
                <li><a class="{{$segments[0] == 'khoa-hoc' ? 'active' : ''}}" href='{{ route('e-learning') }}' title='{{ __('client.e-learning-r') }}'>{{ __('client.e-learning-r') }}</a></li>
                <li><a class="{{$segments[0] == 'lien-he' ? 'active' : ''}}" href='{{ route('contact') }}' title='{{ __('client.contact-us') }}'>{{ __('client.contact-us') }}</a></li>
            </ul>
            
            {!! $leftFooter->content !!}

            <div class='tal cmNav_ft'>
            <a target='_blank' href='https://www.facebook.com/mizuikuemyeunuocsach/' title='fanpage facebook'><span>{{ __('client.follow-us') }}</span><img alt='fb' src='{{ asset('client/css/Common/fb.png') }}' /></a>
                <div class='cb'></div>
            </div>
        </div>
        <div class='right'>
            <div>
                <div class='lienket'><span class='c005286 fOfficinaSanITCMedium'>{{ __('client.web-link') }}</span>
                    <select onchange='navigation(this.value);'>
                        <option value=''>{{trans('client.choose_link')}}</option>

                        @foreach ($websiteLink as $item)
                            <option value='{{$item->url}}'>{{$item->title}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class='cb'></div>
            </div>
            
            {!! $rightFooter->content !!}

            <ul id='CommonMenuBottom' class='main'>
                <li><a class="{{(isset($segments[1]) && $segments[1] == 'tearm-of-use') ? 'active' : ''}}" href='{{ route('showTerm', ["keyword" => 'tearm-of-use']) }}' title='{{ __('client.term') }}'>{{ __('client.term') }}</a></li>
                <li><a class="{{(isset($segments[1]) && $segments[1] == 'private-policy') ? 'active' : ''}}" href='{{ route('showPolicy', ["keyword" => 'private-policy']) }}' title='{{ __('client.private-policy') }}'>{{ __('client.private-policy') }}</a></li>
            </ul>
            <div class='cb'></div>

        </div>
        <div class="cb"></div>
    </div>
</div>