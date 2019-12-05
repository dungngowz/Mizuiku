
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
                <li><a href='{{ route('introduction') }}' title='{{ __('client.introduction') }}'>{{ __('client.course') }}</a></li>
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
                            <a class='thongke_ngay'>{{ __('client.date-post') }}: {{ date('H:i - d/m/Y',strtotime($eLearning[0]['created_at'])) }}</a>
                            <a class='thongke_luotxem'>{{ __('client.views') }}: add view table</a>

                            <div class="cochu">
                                <a class="NormalSize" href="javascript:ResetTextSize()">{{ __('client.size') }}</a>
                                <a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
                                <a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
                            </div>
                        </div>
                        <div class="noidung TextSize">
                            {{-- Add Content Here --}}
                            {!! $eLearning[0]['content'] !!}
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