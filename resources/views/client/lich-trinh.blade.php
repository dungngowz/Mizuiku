@extends('layouts.client.default')

@section('title', $title)

@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ config('app.url') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{ route('introduction') }}' title='{{ __('client.introduction') }}'>{{ __('client.program-timeline') }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="container">
        <div id="LichTrinh">
            @widget('client.timeline')
        </div>

        @isset($record)
            <div id="about" class="LichTrinhDetail detail">
                <div class="wrp">
                    <div class="fs30 c109ce3 fiCielCadena pb10">
                        <h1>{{ $record->title }}</h1>
                    </div>
                    <div class="baiviet">

                        <div class="thongke">

                        <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($record->created_at)) }}</a>
                            <a class='thongke_luotxem'>{{ __('client.views') }}: add view table</a>

                            <div class="cochu">
                                <a class="NormalSize" href="javascript:ResetTextSize()">{{ __('client.size') }}</a>
                                <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                            </div>
                        </div>

                        <div class="noidung TextSize">{!! $record->content !!}</div>
                    </div>

                    @component('client/components/social', ['record' => $record])@endcomponent

                    </div>

                </div>
            </div>
        @endisset
    </div>
@endsection
