<div id="foot">
    <div class="wrp">
        <div class="left">
        <a class='slogan dnmobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/mizuiku_n_636687337648333192.png') }}" /></a>
            <a class='slogan dn dbMobile' title='' href='/'><img alt="" src="{{ asset('client/pic/banner/logorespo_636332056462083140.png') }}" /></a>

            <ul id='CommonMenuFooter' class='main'>
                <li><a href='/' title='{{ __('client.home') }}'>{{ __('client.home') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/gioi-thieu.htm' title='{{ __('client.about-us') }}'>{{ __('client.about-us') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/tin-tuc.htm' title='{{ __('client.news') }}'>{{ __('client.news') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/thu-vien.htm' title='{{ __('client.gallery') }}'>{{ __('client.gallery') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/lich-trinh.htm' title='{{ __('client.program-timeline') }}'>{{ __('client.program-timeline') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/khoa-hoc.htm' title='{{ __('client.e-learning-r') }}'>{{ __('client.e-learning-r') }}</a></li>
                <li><a href='https://mizuiku-emyeunuocsach.vn/lien-he.htm' title='{{ __('client.contact-us') }}'>{{ __('client.contact-us') }}</a></li>
            </ul>
            <div>
                <span style="background-image:initial;background-position:initial;background-size:initial;background-repeat:initial;background-attachment:initial;background-origin:initial;background-clip:initial;">{{ __('client.permit-no-1') }}</span>
                <br/>{{ __('client.permit-no-2') }}
                <br />{{ __('client.contact') }}</div>
            <div>{{ __('client.address') }}</div>
            <div>{{ __('client.tel') }} &nbsp;</div>
            <div>
                Website: {{ env('APP_URL', 'http://localhost') }}
                <br /> &nbsp;
            </div>

            <div class='tal cmNav_ft'>
            <a target='_blank' href='https://www.facebook.com/mizuikuemyeunuocsach/' title='fanpage facebook'><span>{{ __('client.follow-us') }}</span><img alt='fb' src='{{ asset('client/css/Common/fb.png') }}' /></a>
                <div class='cb'></div>
            </div>
        </div>
        <div class='right'>
            <div>
                <div class='lienket'><span class='c005286 fOfficinaSanITCMedium'>{{ __('client.web-link') }}</span>
                    <select onchange='navigation(this.value);'>
                        <option value=''>Link</option>
                        <option value='http://hoisinhvien.com.vn/'>Student Union of Vietnam</option>
                        <option value='http://www.thieunhivietnam.vn/'>Central Council for Ho Chi Minh Young Pioneer Organization</option>
                        <option value='http://www.suntory.com'>Suntory Holdings Limited </option>
                        <option value='http://www.suntory.com/csr/activity/environment/eco/education/'> Mizuiku Program in Japan</option>
                        <option value='http://www.suntorypepsico.vn/'>Suntory PepsiCo Vietnam Beverage</option>
                        <option value='http://www.livelearn.org/'>Center of Live & Learn for Environment and Community </option>
                        <option value='http://tuonglaicentre.org/'>Tuong Lai Centre for Health Education and Community Development </option>
                    </select>
                </div>
                <div class='cb'></div>
            </div>
            <p class='tar lh24 fs16'>{{ __('client.reserved-1') }}</p>
            <p class='tar lh24 fs16'>{{ __('client.company') }}</p>
            <p class='tar lh24 fs16'>{{ __('client.site-1') }}</p>
            <p class='tar lh24 fs16'>{{ __('client.site-2') }}</p>
            <p class='tar lh24 fs16'>{{ __('client.reserved-2') }}</p>
            <ul id='CommonMenuBottom' class='main'>
                <li><a href='http://mizuiku-emyeunuocsach.vn/dieu-khoan-su-dung.htm' title='{{ __('client.term') }}'>{{ __('client.term') }}</a></li>
                <li><a href='/chinh-sach-bao-mat.htm' title='{{ __('client.private-policy') }}'>{{ __('client.private-policy') }}</a></li>
            </ul>
            <div class='solieu'>
                <span class='online'>Online: 4</span>
                <span class='total'>Total access: 301</span>
            </div>
            <div class='cb'></div>

        </div>
        <div class="cb"></div>
    </div>
</div>