@extends('layouts.client.default')

@section('title', $title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
                <li><a href="/" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href="{{ route('statistical') }}" title="{{trans('client.statistical')}}">{{trans('client.statistical')}}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="Analytisc">
        <div class="tit">Thống kê học viên</div>
        <div class="Filter">
            <div class="item">
                <label>Tỉnh/Thành phố</label>
                <select name="DisplayLoadControl$ctl00$ctl00$ddlCity" onchange="javascript:setTimeout('__doPostBack(\'DisplayLoadControl$ctl00$ctl00$ddlCity\',\'\')', 0)" id="DisplayLoadControl_ctl00_ctl00_ddlCity">
                </select>
            </div>
            <div class="item">
                <label>Quận/Huyện/Thị xã</label>
                <select name="DisplayLoadControl$ctl00$ctl00$ddlDistrict" id="DisplayLoadControl_ctl00_ctl00_ddlDistrict">
                </select>
            </div>
            <div class="item">
                <label>Trường/Nơi công tác</label>
                <input name="DisplayLoadControl$ctl00$ctl00$ddlSchool" type="text" id="ddlSchool">
            </div>
            <div class="btn">
                <a id="DisplayLoadControl_ctl00_ctl00_lbtSearch" href="javascript:__doPostBack('DisplayLoadControl$ctl00$ctl00$lbtSearch','')">Thống kê</a>
            </div>
        </div>
        <div class="tit2">Không có kết quả phù hợp ...</div>
    </div>
@endsection