@extends('layouts.client.default')
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

    <div id="LichTrinh">
        @widget('client.timeline')
    </div>
@endsection
