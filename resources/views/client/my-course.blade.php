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
                        @foreach ($courses as $item)
                           <li>
                              <a href='{{ url("/khoa-hoc/$item->slug") }}' title='{{ $item->title }}'>{{ $item->title }}</a>
                              <div class='progres'>{{ trans('client.completed') }}: <span>{{isset($learning_process[$item->ref_id]) ? $learning_process[$item->ref_id] : 0}} %</span></div>
                           </li>
                        @endforeach
                     </ul>
                  </div>
                  <div class="cb"></div>
               </div>
            <p class="fiCielGotham c109ce3 fs14 ttu pb20">{{trans('client.course_document')}}</p>
               <div class="Frame2">
                  @foreach ($documents as $item)
                     <div class="item">
                        <div class="ico">
                           <img src="{{asset('client/css/KhoaHoc/icon.png')}}" alt="">
                        </div>
                        <div class="info">
                           <a target="_blank" href="javascript://" onclick="showPopupdownload('{{Storage::url($item->file_path)}}')" title="{{$item->file_name}}" class="name download_open" data-popup-ordinal="0" id="open_88736612">
                              <h3>{{$item->file_name}}</h3>
                           </a>
                           <div>
                              <a target="_blank" href="javascript://" onclick="showPopupdownload('{{Storage::url($item->file_path)}}')" title="{{$item->file_name}}" class="xct download_open" data-popup-ordinal="1" id="open_82092273">{{trans('client.detail')}}</a>
                              <a target="_blank" href="javascript://" onclick="showPopupdownload('{{Storage::url($item->file_path)}}')" title="download" class="download_open download" data-popup-ordinal="2" id="open_27838032">{{trans('client.download')}}</a>
                           </div>
                           <div class="cb"></div>
                        </div>
                     </div>
                  @endforeach
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