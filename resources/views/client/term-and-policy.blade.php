@extends('layouts.client.default')
@section('title', $data->title)
@section('content')
<div id="pageroad">
    <div class="wrp">
        <ul>
            <li><a href="{{ url('') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
            <li><a href='' title='{{ $data->title }}'>{{ $data->title }}</a></li>
        </ul>
        <div class="cb"></div>
        </div>
    </div>

        <div id="container">
            <div id="about" class="detail">
                @if (!empty($data))
                    <div class="wrp">
                        <div class="fs30 c109ce3 fiCielCadena pb10">
                            <h1>{{ $data->title }}</h1>
                        </div>
                        <div class="baiviet">

                            <div class="thongke">

                                <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($data->created_at)) }}</a>
                                <a class='thongke_luotxem'>{{ __('client.views') }}: {{ $data->views }}</a>

                                <div class="cochu">
                                    <a class="NormalSize" href="javascript:ResetTextSize()">Size</a>
                                    <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                    <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                                </div>
                            </div>

                            <div class="noidung TextSize">
                                {{-- Add content here --}}
                                @if ($data)
                                    {!! $data->content !!}
                                @endif
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
                                        <div class="fb-like" data-href="{{  $data->url_detail_about_us }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

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
                        <div class='other'>
                            @if ($otherArticles)
                                <p class='fs24 c0e9ee6 fiCielGotham pb10'>{{ trans('client.other_articles') }}</p>
                                <ul>
                                    @foreach ($otherArticles as $item)
                                        <li><a href='{{ $item->url_detail_news }}' title='{{ $item->title }}'><h2>{{ $item->title }}</h2> (<span class='c999'>{{ $item->views }} Views</span>)</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>

@endsection