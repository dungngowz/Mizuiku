@extends('layouts.client.default')
@section('url-form', '{{ route(detail-introduction) }}')
@section('params-form')
    <div>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABRnd0UL2yz8Nwhuj9eAYk9JxSmaAS04ClqMGm0TNSe71PY6NPEhGxyqUfbrtU5fmn2Ea1JmMp/omb6DBYyqB8t4aJWaBGhcdI015b/mBhG3Gx7EMk7ShbbqtY6TGZoa9ziTJ6S6DYjhZubzEtbOrs4EqRjlsWi91vMr8+iawXpLpulctB5UNZMCEqnVpCZUOhsJbzoBqJlLSqTOV+ByHgA8fCUMftueCVzFLlj7PVAFccWHLKmKn1d9PSHqKgkLpF6HjsBalzX8GRHC3hP00WRujLfdiHdgjx59E5EVWfsewFL1TWIyRwEAx82L0V5V3dLr5cUzuLeFE8JcO/xGFc9Xki7u87Rh3NAa0R0R7xsQcJRbMjWeiBsYX78aMpRgLxDyDNJGUOxSowwhsySzxlSpkr18Jgt91XABMyxg49or3K6KLvKC7ptFLM58gKJFjVofgNiU" />
    </div>
@endsection
@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ config('app.url') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{ route('introduction') }}' title='{{ __('client.introduction') }}'>{{ __('client.introduction') }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

        <div id="container">
            <div id="about" class="detail">
                @if (!empty($introDetail))
                    <div class="wrp">
                        <div class="fs30 c109ce3 fiCielCadena pb10">
                            <h1>{{ $introDetail[0]['title'] }}</h1>
                        </div>
                        <div class="baiviet">

                            <div class="thongke">

                            <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($introDetail[0]['created_at'])) }}</a>
                                <a class='thongke_luotxem'>{{ __('client.views') }}: add view table</a>

                                <div class="cochu">
                                    <a class="NormalSize" href="javascript:ResetTextSize()">{{ __('client.size') }}</a>
                                    <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                    <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                                </div>
                            </div>

                            <div class="noidung TextSize">
                                {{-- Add content here --}}
                                @if ($introDetail)
                                    {!! $introDetail[0]['content'] !!}
                                @endif
                            </div>
                        </div>
                            <div id="CommonCuoiChiTietTin">
                                <div class="fl apd">
                                    <a class="prevDBT" href="javascript:history.go(-1)">{{ __('client.prev') }}</a>
                                    <div class="fr pl20 apd">
                                        <a href="javascript:void(0)" class="email addthis_button_email">{{ __('client.send-email') }}</a>
                                        <a href="javascript:window.print()" class="print">{{ __('client.print') }}</a>
                                    </div>
                                </div>
                                <div class="fr">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                                        <div id="fb-root"></div>
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, "script", "facebook-jssdk"));
                                        </script>
                                        <div class="fb-like" data-href="{{ route('detail-introduction') }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

                                        <!-- Place this tag where you want the share button to render. -->
                                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                                        <!-- Place this tag after the last share tag. -->
                                        <script type="text/javascript">
                                            (function() {
                                                var po = document.createElement("script");
                                                po.type = "text/javascript";
                                                po.async = true;
                                                po.src = "https://apis.google.com/js/platform.js";
                                                var s = document.getElementsByTagName("script")[0];
                                                s.parentNode.insertBefore(po, s);
                                            })();
                                        </script>

                                        <div class="shareItem">
                                            <a class="addthis_button_facebook"></a>
                                        </div>
                                        <div class="shareItem">
                                            <a class="addthis_button_twitter"></a>
                                        </div>
                                        <div class="shareItem">
                                            <a class="addthis_button_zingme"></a>
                                        </div>
                                        <div class="shareItem">
                                            <a class="addthis_button_compact"></a>
                                        </div>
                                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5299e3fd219dc19f"></script>
                                        <!-- AddThis Button END -->
                                    </div>

                                </div>
                                <div class="cb"></div>
                            </div>

                        </div>

                    </div>
                @endif
            </div>
        </div>

@endsection