@extends('layouts.client.default')
@section('title', $introDetail->title)
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
                        <h1>{{ $introDetail->title }}</h1>
                    </div>
                    <div class="baiviet">

                        <div class="thongke">

                        <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($introDetail->created_at)) }}</a>
                            <a class='thongke_luotxem'>{{ __('client.views') }}: {{ $introDetail->views }}</a>

                            <div class="cochu">
                                <a class="NormalSize" href="javascript:ResetTextSize()">{{ __('client.size') }}</a>
                                <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                            </div>
                        </div>

                        <div class="noidung TextSize">
                            {{-- Add content here --}}
                            @if ($introDetail)
                                {!! $introDetail->content !!}
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
                                    <div class="fb-like" data-href="{{  $introDetail->url_detail_about_us }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

                                    <!-- Place this tag where you want the share button to render. -->
                                    <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                                    <!-- Place this tag after the last share tag. -->
                                    <script type="text/javascript">
                                        (function() {
                                            var po = document.createElement("script");
                                            po.type = "text/javascript";
                                            po.async = true;
                                            // po.src = "https://apis.google.com/js/platform.js";
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