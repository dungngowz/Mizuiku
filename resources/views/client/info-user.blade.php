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
         <form action="{{ route('updateInfo') }}" enctype="multipart/form-data" method="post">
            {{ method_field('PUT') }}
            @csrf
            <div id="member">
               <input type="hidden" name="DisplayLoadControl$ctl00$ctl00$hdImage" id="DisplayLoadControl_ctl00_ctl00_hdImage" />
               <div class="left">
                  <div class="khungAnh">
                     <a class="khungAnhCrop" href="javascript:;" title="Avatar">
                     <img alt="{{ $user->email }}" class="Avatar" src="{{ $user->avatar_display }}" />
                     </a>
                     <div class="input uploadFile">
                        <p>{{trans('client.change_avatar')}}</p>
                        <input type="file" name="avatar" id="DisplayLoadControl_ctl00_ctl00_flImage" />
                     </div>
                  </div>
               </div>
               <div class="mid">
                  <p class="fiCielGotham c109ce3 fs14 ttu pb20">{{ trans('client.info_acc') }}</p>
                  <div>
                     <div class="info">
                        <ul>
                           <li>{{ trans('client.username') }}: {{ $user->email }}</li>
                           <li>{{ trans('client.last-and-fist-name') }}: {{ $user->name }}</li>
                           <li>{{ trans('client.sex') }}: {{ trans('client.sex-list.'.$user->sex) }}</li>
                           <li>{{ trans('client.email') }}: {{ $user->email }}</li>
                           <li>{{ trans('client.phone') }}: {{ $user->phone }}</li>
                           <li>{{ trans('client.you-are') }}: {{ trans('client.career-list.'.$user->career) }}</li>
                           <li>{{ trans('client.city') }}: {{ $user->city_name }}</li>
                           <li>{{ trans('client.district') }}: {{ $user->district_name }}</li>
                           <li>{{ trans('client.work-place') }}: {{ $user->work_place }}</li>
                           <li>
                              <input {{$user->receive_emails ? 'checked' : ''}} id="DisplayLoadControl_ctl00_ctl00_ckNhanEmail" type="checkbox" name="receive_emails" value="1" />
                              <label for='DisplayLoadControl_ctl00_ctl00_ckNhanEmail'>{{ trans('client.receive-email') }}</label>
                           </li>
                        </ul>
                     </div>
                     <div class="ip">
                           <input name="" type="text" value="{{ $user->email }}" readonly="readonly" id="DisplayLoadControl_ctl00_ctl00_tbAccount" />
                           <input name="name" type="text" value="{{ $user->name }}" id="DisplayLoadControl_ctl00_ctl00_tbName" class="w50pc fl" />
                           <select name="sex" id="DisplayLoadControl_ctl00_ctl00_ddlSex" class="w50pc fr">
                              @for ($i = 1; $i <= 3; $i++)
                                 <option {{ $user->sex == $i ? 'selected' : null }} value="{{ $i }}">{{ trans('client.sex-list.'.$i) }}</option>
                              @endfor
                           </select>
                           <input name="" type="text" value="{{ $user->email }}" readonly="readonly" id="DisplayLoadControl_ctl00_ctl00_tbEmail" class="w50pc fl" />
                           <input name="phone" type="text" value="{{ $user->phone }}" id="DisplayLoadControl_ctl00_ctl00_tbPhone" class="w50pc fr" placeholder="(84 28) 3 821 9427" />
                           <select name="career" id="DisplayLoadControl_ctl00_ctl00_ddlType">
                              @for ($i = 1; $i <= 3; $i++)
                                 <option {{ $user->career == $i ? 'selected' : null }} value="{{ $i }}">{{ trans('client.career-list.'.$i) }}</option>
                              @endfor
                           </select>
                           <select name="province_id" id="DisplayLoadControl_ctl00_ctl00_ddlCity" class="w50pc fl">
                              @foreach ($city as $item)
                                 <option {{ $user->province_id == $item->id ? 'selected' : null }} value="{{ $item->id }}">{{ $item->$findColumn }}</option>
                              @endforeach
                           </select>
                           <select name="district_id" id="DisplayLoadControl_ctl00_ctl00_ddlDistrict" class="w50pc fr">
                              @foreach ($district as $item)
                                 <option {{ $user->district_id == $item->id ? 'selected' : null }} value="{{ $item->id }}">{{ $item->$findColumn }}</option>
                              @endforeach
                           </select>
                           <input name="work_place" type="text" value="{{ $user->work_place }}" id="DisplayLoadControl_ctl00_ctl00_ddlSchool" />
                           <button id="DisplayLoadControl_ctl00_ctl00_lbtUpdate" class="btnupdateinfo look-like-link">{{ trans('client.update-info') }}</button>
                           <a href="javascript:reFresh();" class="btnupdateinfo ignore">{{ trans('client.ignore') }}</a>
                        
                     </div>
                     <div class="cb"></div>
                  </div>
               </div>

               <div class="right">
                  <div class="title">{{ trans('client.manage_acc') }}</div>
                  <ul>
                     <li class="active"><a href="{{ route('showManageAccount') }}" title="{{ trans('client.info_acc') }}">{{ trans('client.info_acc') }}</a></li>
                     <li class="normal"><a href="{{ route('showChangePassword') }}" title="{{ trans('client.change_pass') }}">{{ trans('client.change_pass') }}</a></li>
                     <li class="normal"><a href="{{ route('showMyCourse') }}" title="{{ trans('client.my_course') }}">{{ trans('client.my_course') }}</a></li>
                     <li><a href="javascript:;" title="{{ trans('client.log_out') }}" class="logout_open">{{ trans('client.log_out') }}</a></li>
                  </ul>
               </div>
               <div class="cb"></div>
            </div>
         </form>
      </div>
   </div>
@endsection

@section('custom-js')
   <script>
      if({{ session()->has('showAlertSuccess') ? session()->get('showAlertSuccess') : 0 }})
         alert("{{ trans('client.update_success') }}");
   </script>
@endsection