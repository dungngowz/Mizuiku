@extends('layouts.client.default')
@section('title', $title)

@section('content')
    @if ($isAllowSee)
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
                            <input type="hidden" value="{{$course->ref_id}}" name="course_ref_id"/>
                            <ul class="list-video">
                                @foreach ($listArticle as $key => $item)
                                    @php
                                        $className = 'other';
                                        if(($key == count($videoLearned)) || ((count($videoLearned) == count($listArticle) && ($key == 0)))){
                                            $className = 'first ac';
                                        }
                                        
                                    @endphp
                                    <li class='item {{$className}}' video_ref_id='{{ $item->ref_id }}' seen="{{in_array($item->id, $videoLearned) ? 'true': 'false'}}">
                                        <div class='ico'></div>
                                        <div class='info'>
                                            <a datavideo='{{ $item->url }}' title='' class='name first'>{{ $item->title }}</a>
                                            <span class='time'>{{ $item->video_duration }}</span>
                                            <span class='totalview time'>{{trans('client.have_learned')}}: {{number_format(count($item->learningOutcomes))}} {{trans('client.student')}}</span>
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
                                            <a class='khungAnhCrop' href='' title='{{ $item->user['name'] }}'>
                                                <img alt="{{ $item->user['name'] }}" src="{{ $item->user['avatar_display'] }}" />
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
                                @if (count($course->gallery) > 0)
                                    <ul>
                                        @foreach ($course->gallery as $item)
                                            <li>
                                                <div class='ico'></div>
                                                <div class='info'>
                                                    <a href='javascript:;' title='' class='name'>{{$item->file_name}}</a>
                                                    <div>
                                                        <a class='totalview'>{{$item->formatBytes}}</a>
                                                        <a target="_blank" href='{{Storage::url($item->file_path)}}' title='' class='totaldown'>{{trans('client.download')}}</a>
                                                    </div>
                                                </div>
                                                <div class='cb'></div>
                                            </li>      
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>            
                <div class='right'>
                    <div class='tenbai'>
                        <a href='javascript:;' title='' class='backstudy'></a>
                        <div class='name'>
                            {{ count($listArticle) ? $listArticle[0]->title : null }}
                        </div>
                        <a href="{{url('')}}" title='' class='backpage'>{{ trans('client.back') }}</a>
                        <div class='cb'></div>
                    </div>
                    <div class='overvideo'>
                        <div id='videoPlayer'></div>
                    </div>
                    <script type='text/javascript'>
                        var auto = true;
                        if ($('#AutoPlay').hasClass('ac')) auto = 'true';
                        jwplayer('videoPlayer').setup({
                            file: '{{ count($listArticle) ? $listArticle[0]->url : null }}',
                            width: '100%',
                            aspectratio: '16:9',
                            mute: 'false',
                            autostart: auto,
                            repeat: 'false',
                            primary: 'html5',
                            preload: 'auto',
                            events: {
                                onTime: function (event) {},
                                onComplete: function() {
                                    updateViews();
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
                        <span>{{trans('clien.auto_play')}}</span>
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
                        <iframe src='https://forms.gle/XgNMQj29ivmbQjfcA&output=embed' frameborder='0' width='400'  ></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('custom-js')
    <script type="text/javascript">
        function checkUser() {
            alert("{{trans('client.required_login_to_view')}}");
            history.go(-1);
        }

        $('#headerTop,#header,#menu,#foot').hide();
    </script>

    @if (!$isAllowSee)
        <script type="text/javascript">
            $(document).ready(function() {
                function checkViewCourse(){
                    $("#success .tac").html("Để có thễ học khoá học này. Bạn cần hoàn thành khoá học trước đó!");
                    $(".success_open").click();
                    $('.success_close').click(function(){
                        location.href = "{{url('')}}";
                        return false;
                    });

                    setTimeout(() => {
                        location.href = "{{url('')}}";
                    }, 2000);
                }

                setTimeout(() => {
                    checkViewCourse();
                }, 1000);
            });
        </script>
    @endif
@endsection