
@extends('layouts.client.default')
@section('title', trans('client.course'))

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ url('') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{ route('e-learning') }}' title='{{ __('client.course') }}'>{{ __('client.course') }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div id="about" class="detail chitietkh">
            <div class="wrp">
                <div class="fs30 c109ce3 fiCielCadena pb10">
                    <h1>E-learning</h1>
                </div>
                <div class="baiviet">
                    @if ($eLearning)
                        <div class="thongke">
                            <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($eLearning->created_at)) }}</a>
                            <a class='thongke_luotxem'>{{ __('client.views') }}: {{$eLearning->views}}</a>

                            <div class="cochu">
                                <a class="NormalSize" href="javascript:ResetTextSize()">{{ __('client.size') }}</a>
                                <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                            </div>
                        </div>
                        <div class="noidung TextSize">
                            {{-- Add Content Here --}}
                            {!! $eLearning->content !!}
                        </div>
                    @endif
                    <div class='nav'>
                    <a href='javascript:;' class='nowbt loginForm_open'>{{ __('client.sign-in-for-learn') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection