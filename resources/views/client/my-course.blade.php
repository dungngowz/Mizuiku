@extends('layouts.client.default')
@section('title', config('app.name'))

@section('content')
   <div id="pageroad">
      <div class="wrp">
         <ul>
         <li><a href="{{ url('') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
               <li><a href='{{ route('showManageAccount') }}' title='{{ __('client.member') }}'>{{ __('client.member') }}</a></li>
         </ul>
         <div class="cb"></div>
      </div>
   </div>
   <div id="container">
      <div class="wrp">
         <div id="member">
            <div class="left">
               <div class="khungAnh">
                  <a class="khungAnhCrop" href="javascript:;" title="Avatar">
                     <img alt="{{ $user->email }}" class="" src="{{ $user->avatar }}" />
                  </a>
                  <div class="input">
                     <input type="file" name="DisplayLoadControl$ctl00$ctl00$flImage" id="DisplayLoadControl_ctl00_ctl00_flImage" />
                  </div>
               </div>
            </div>
            <div class="mid">
               <p class="fiCielGotham c109ce3 fs14 ttu pb10">{{ trans('client.my_course') }}</p>
               <div class="Frame1">
                  <div class="mykhoahoc">
                     <ul>
                        @foreach ($course as $item)
                        <li>
                        <a href='{{ url("/bai-hoc/$item->slug") }}' title='{{ $item->title }}'>{{ $item->title }}</a>
                           <div class='progres'>{{ trans('client.completed') }}: <span>0 %</span></div>
                        </li>
                        @endforeach
                     </ul>
                  </div>
                  <div class="cb"></div>
               </div>
               <p class="fiCielGotham c109ce3 fs14 ttu pb20">Tài liệu khóa học</p>
               <div class="Frame2">
                  <div class="cb"></div>
               </div>
            </div>
            <div class="right">
               <div class="title">{{ trans('client.manage_acc') }}</div>
               <ul>
                  <li class="normal"><a href="{{ route('showManageAccount') }}" title="{{ trans('client.info_acc') }}">{{ trans('client.info_acc') }}</a></li>
                  <li class="normal"><a href="{{ route('showChangePassword') }}" title="{{ trans('client.change_pass') }}">{{ trans('client.change_pass') }}</a></li>
                  <li class="active"><a href="{{ route('showMyCourse') }}" title="{{ trans('client.my_course') }}">{{ trans('client.my_course') }}</a></li>
                  <li><a href="javascript:;" title="{{ trans('client.log_out') }}" class="logout_open">{{ trans('client.log_out') }}</a></li>
               </ul>
            </div>
            <div class="cb"></div>
         </div>
      </div>
   </div>
@endsection