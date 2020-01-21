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
                                    <li class='item {{$className}} {{($key == (count($listArticle) - 1)) ? 'last-video' : ''}}' video_ref_id='{{ $item->ref_id }}' seen="{{in_array($item->ref_id, $videoLearned) ? 'true': 'false'}}">
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

                        <div class="kiemtradiv {{$finishThisSubject ? '' : 'hide'}}">
                            <a href="{{$course->url}}" target="_blank" title="" class="kiemtra">{{ trans('client.test_knowl') }}</a>
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
                <div class='right' style="background: black;">
                    <div class='tenbai'>
                        <a href='javascript:;' title='' class='backstudy'></a>
                        <div class='name'></div>
                        <a href="{{url('')}}" title='' class='backpage'>{{ trans('client.back') }}</a>
                        <div class='cb'></div>
                    </div>
                    <div class='overvideo'>
                        <div id='videoPlayer'></div>
                    </div>
                    <script type='text/javascript'>
                        var auto = true;
                        if ($('#AutoPlay').hasClass('ac')) auto = 'true';
                        $('.overvideo').css('position', 'absolute');

                        setTimeout(() => {
                            $('#view1 ul li.ac a').trigger('click');    
                        }, 500);
                        
                        
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
                        <span>{{trans('client.auto_play')}}</span>
                        <div id="AutoPlay" class="check ac">
                            <input type="checkbox" value="" />
                        </div>
                        </div>
                    </li>

                    <li style="{{$user->complete_courses ? 'display: block !important' : ''}}" id="is_finished"">
                        <a href="javascript:void(0)" onclick="popup_AA()" title="" class="rate">{{trans('client.evaluation_course')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class='popup_A popup-evaluation'>
            <div class='content'>
                <div class="noidungNhung">
                    <a href='javascript://' class='closed'>X</a>
                    <div class='khungAnh1 pc'>
                        <h1 class="header">{{trans('client.evaluation_course')}}</h1>
                        <table width="100%">
                            <tr>
                                <td width="20%">
                                    <ul class="icons">
                                        @for ($i = 1; $i < 12; $i++)
                                            <li><img src="/client/pic/icon/{{$i}}.png"/></li>
                                        @endfor
                                    </ul>
                                </td>
                                <td width="60%" style="vertical-align: text-bottom;">
                                    <table width="100%" id="form-review">
                                        <input type="hidden" id="total_checked" value="{{count($evaluations)}}"/>
                                        @foreach ($evaluations as $k => $item)
                                            <tr>
                                                <td>
                                                    <div class="title">{{$k + 1}}. {{$item->title}}</div>
                                                    <ul class="radios">
                                                        @for ($i = 1; $i < 5; $i++)
                                                            @php
                                                                $optionx = 'option' . $i;
                                                            @endphp

                                                            @if (!empty($item->$optionx))
                                                                <li>
                                                                    <input type="checkbox" class="check" name="option{{$k}}[]" id="option{{$k}}{{$i}}" value="option{{$k}}{{$i}}">
                                                                    <label for="option{{$k}}{{$i}}">{{$item->$optionx}}</label>
                                                                </li>
                                                            @endif
                                                        @endfor

                                                        @if ($item->another)
                                                            <li>
                                                                <input type="checkbox" class="check" onclick="show_input({{$k}}, {{$i}})" name="option{{$k}}[]" id="option{{$k}}{{$i}}" value="option{{$k}}{{$i}}">
                                                                <label for="option{{$k}}{{$i}}">{{ trans('client.other') }}</label>
                                                                <br/>
                                                                <input type="text" id="text-input-{{$k}}" onchange="setDataValue(this)" hidden placeholder="{{ trans('client.other_comment') }}" style="margin-top: 10px; padding: 5px 10px; font-size: 14px; width: 400px;"/>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>

                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);" class="btnSubmitReview disable ignore">{{trans('client.send_review')}}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="20%">
                                    <ul class="icons">
                                        @for ($i = 1; $i < 12; $i++)
                                            <li><img src="/client/pic/icon/{{$i}}.png"/></li>
                                        @endfor
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('styles')
<style>
    .btnSubmitReview.disable{
        opacity: 0.5;
    }
</style>
@endpush

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
                    $("#success .tac").html("{{trans('client.required_prev_course')}}");
                    $(".success_open").click();
                    $('.success_close').click(function(){
                        location.href = "{{url('')}}";
                        return false;
                    });

                    setTimeout(() => {
                        location.href = "{{url('')}}";
                    }, 5000);
                }

                setTimeout(() => {
                    checkViewCourse();
                }, 1000);
            });
        </script>
    @endif
@endsection