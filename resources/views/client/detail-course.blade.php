@extends('layouts.client.default')
@section('title', $title)

@section('content')
    <div id="baihoc">
        <div class="top">
            <div class="left">
                <ul class="tabs" data-persist="true">
                    <li>
                        <a href="#view1">
                            <span class="ico" style="background: url(../client/css/KhoaHoc/icotab1.png) top center no-repeat"></span>
                            <span class="text">{{ trans('client.lesson') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#view3">
                            <span class="ico" style="background: url(../client/css/KhoaHoc/icotab3.png) top center no-repeat"></span>
                            <span class="text">{{ trans('client.discuss') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#view2">
                            <span class="ico" style="background: url(../client/css/KhoaHoc/icotab2.png) top center no-repeat"></span>
                            <span class="text">{{ trans('client.document') }}</span>
                        </a>
                    </li>
                </ul>
                <div class="tabcontents">
                    <div id="view1" class="tabcont">
                    <div class='parent'>
                        <div class='catename'>{{ $course->title }}</div>
                        <ul class="list-video">
                            @foreach ($listArticle as $key => $item)
                                <li class='item {{ $key == 0 ? "first ac" : "other" }}' iid='{{ $item->id }}' seen='true'>
                                    <div class='ico'></div>
                                    <div class='info'>
                                        <a datavideo='{{ $item->url }}' title='' class='name first'>{{ $item->title }}</a>
                                        <span class='time'>{{ $item->video_duration }}</span>
                                        <span class='totalview time'>Đã học: xxx học viên</span>
                                        <span class='lock time'></span>
                                    </div>
                                    <div class='cb'></div>
                                    <div class='desc'></div>
                                    <div class='cb'></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="kiemtradiv">
                        <a href="javascript:void(0)" onclick="popup_AA()" title="" class="kiemtra">{{ trans('client.test_knowl') }}</a>
                    </div>
                    </div>
                    <div id="view3" class="tabcont">
                        <div class="ques">
                            <input type="hidden" name="post_id" id="post_id" value="{{ $course->id }}" />
                            <textarea id="tbComment" class="tartl"></textarea>
                            <a href="javascript:;" onclick="SendComment()" title="" class="btnques">{{ trans('client.comment') }}</a>
                        </div>
                        <div class='ans'>
                            @foreach ($comments as $item)
                                <div class='item'>
                                    <div class='khungAnh'>
                                        <a class='khungAnhCrop' href='' title='{{ $item->user->name }}'>
                                        <img alt="{{ $item->user->name }}" src="{{ $item->user->avatar }}" />
                                        </a>
                                    </div>
                                    <div class='info'>
                                        <div class='pb3'>
                                        <span class='c257bbc fs16 fOfficinaSanITCBold'></span>
                                        <span class='c999 fs16'><span title='{{ date('d/m/Y - H:i:s', strtotime($item->created_at)) }}'>{{ date('d/m/Y - H:i:s', strtotime($item->created_at)) }}</span></span>
                                        </div>
                                        <div class='cont'>
                                            {{ $item->content }}
                                        </div>
                                    </div>
                                    <div class='cb'></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="view2" class="tabcont">
                        <div class="parent">
                            <ul>
                                <li>
                                    <div class='ico'></div>
                                    <div class='info'>
                                        <a href='javascript:;' title='' class='name'>Tài liệu Hướng dẫn dạy và học về tiết kiệm và bảo vệ nước</a>
                                        <div>
                                            <a class='totalview'>279 KB</a>
                                            <a href='https://mizuiku-emyeunuocsach.vn/pic/Service/Mizuiku-T_636725449496517001.pdf' title='' class='totaldown'>Tải xuống</a>
                                        </div>
                                    </div>
                                    <div class='cb'></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class='right'>
                <div class='tenbai'>
                    <a href='javascript:;' title='' class='backstudy'></a>
                    <div class='name'>
                    {{ !empty($listArticle) ? $listArticle[0]->title : null }}
                    </div>
                    <a href='javascript:history.go(-1)' title='' class='backpage'>{{ trans('client.back') }}</a>
                    <div class='cb'></div>
                </div>
                <div class='overvideo'>
                    <div id='videoPlayer'></div>
                </div>
                <script type='text/javascript'>
                    var iid = 276;
                    jwplayer('videoPlayer').setup({
                        file: '{{ !empty($listArticle) ? $listArticle[0]->url : null }}',
                        width: '100%',
                        aspectratio: '16:9',
                        mute: 'false',
                        autostart: 'true',
                        repeat: 'false',
                        primary: 'html5',
                        preload: 'auto',
                        events: {
                            onTime: function (event) {
                                timeAction = '5';
                                if (event.position > timeAction) {
                                    luotXem(iid);
                                    iid = '';
                                }
                            }
                        }
                    });
                </script>
            </div>
            <div class="cb"></div>
        </div>
        <div class="bot">
            <ul>
                <li class="percent">
                    <div class="pt2">
                    <div class="box">
                        <div class="inbox"></div>
                    </div>
                    <span id="Perc" class="fs16 c257bbc pl10 fOfficinaSanITCBold">0%</span>
                    </div>
                </li>
                <li>
                    <a href="javascript:;" title="" class="prev" id="prevvideo"></a>
                    <a href="javascript:;" title="" class="prev next" id="nextvideo"></a>
                </li>
                <li>
                    <div class="pt2">
                    <span>Tự động phát</span>
                    <div id="AutoPlay" class="check ac">
                        <input type="checkbox" value="" />
                    </div>
                    </div>
                </li>
                <li>
                    <a href="https://mizuiku-emyeunuocsach.vn/danh-gia/956.htm" title="" class="rate">Đánh giá khóa học</a>
                </li>
            </ul>
        </div>
    </div>
    <div class='popup_A'>
        <div class='content'>
            <a href='javascript://' class='closed'><i class='fa fa-times-o fa-lg' aria-hidden='true'></i></a>
            <div class="noidungNhung">
                <div class='khungAnh1 pc'>
                    {{-- iframe form google --}}
                    <iframe src='https://forms.gle/XgNMQj29ivmbQjfcA' frameborder='0' width='400'  ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        function checkUser() {
            alert('Vui lòng đăng nhập để xem bài giảng!');
            history.go(-1);
        }

        $('#headerTop,#header,#menu,#foot').hide();
        
    </script>
@endsection