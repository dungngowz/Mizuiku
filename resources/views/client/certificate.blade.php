@extends('layouts.client.default')
@section('title', trans('client.home'))

@section('content')
    <div class="hoanthanhchungchi" style="background: url(/client/pic/certificate.jpg) no-repeat center center;background-size: contain;position: relative;">
        <div class="name">{{$user->email}}</div>
    </div>
    <div class="quayve">
        <a href="{{url('quan-ly-khoa-hoc')}}" title="" class="rate">{{trans('client.back_course')}}</a>
    </div>
@endsection

@push('styles')
<style>
    #menu, #header, #headerTop, #foot{
        display: none;
    }
    .hoanthanhchungchi .name{
        bottom: 350px;
    }
    .quayve {
        text-align: center;
        margin-bottom: 20px;
    }
    .rate {
        background: #109ce3;
        color: #fff;
        display: inline-block;
        line-height: 35px;
        margin-top: -3px;
        padding: 0 10px;
        border-radius: 4px;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
@endpush

@section('custom-js')
    <script>
        setTimeout(() => {
            $("#success .tac").html('Chúc mừng bạn đã hoàn thành khóa học trực tuyến chương trình “Mizuiku – Em yêu nước sạch');
            $(".success_open").click();
        }, 1000);
        
    </script>

@endsection