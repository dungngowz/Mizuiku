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
                  <img alt="{{ $user->email }}" class="" src="{{ \Storage::url($user->avatar) ?? asset('client/pic/icon/no_image.gif') }}" />
                  </a>
                  <div class="input">
                     <input type="file" name="DisplayLoadControl$ctl00$ctl00$flImage" id="DisplayLoadControl_ctl00_ctl00_flImage" />
                  </div>
               </div>
            </div>
            <div id="changePassForm" class="mid">
               <p class="fiCielGotham c109ce3 fs14 ttu pb20">{{ trans('client.change_pass') }}</p>
               <div>
                  <div class="ip changepass">
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassOld" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassOld" class="required" placeholder="{{ trans('client.old_pass') }}" />
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassNew" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassNew" class="required" placeholder="{{ trans('client.new_pass') }}" />
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassNew2" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassNew2" class="required" placeholder="{{ trans('client.re_new_pass') }}" />
                     <a class="btnupdateinfo" href="javascript:;" onclick="changePass();">{{ trans('client.update_pass') }}</a>
                  </div>
                  <div class="cb"></div>
               </div>
            </div>
            <script type="text/javascript">
               function changePass() {
                     var obError = undefined;
                     $("#changePassForm .required").each(function () {
                        if (obError == undefined && $(this).val() == '') {
                           obError = $(this);
                           return;
                        }
                     });
                     if (obError != undefined) {
                        obError.focus();
                        return;
                     }
                     var passOld = "", passNew = "", passNew2 = "";
                     passOld = $("#DisplayLoadControl_ctl00_ctl00_tbPassOld").val();
                     passNew = $("#DisplayLoadControl_ctl00_ctl00_tbPassNew").val();
                     passNew2 = $("#DisplayLoadControl_ctl00_ctl00_tbPassNew2").val();
                     loading(true);
                     $.ajax({
                        url: '/change-password',
                        type: "POST",
                        dataType: "json",
                        data: {
                           "_token": '{{ csrf_token() }}',
                           "old_password": passOld,
                           "new_password": passNew,
                           "confirm_new_password": passNew2
                        },
                        success: function (res) {
                           console.log(res);
                           loading(false);
                           alert(res.message);
                           location.reload();
                        },
                        error: function (error) {//Lỗi xảy ra
                           loading(false);
                           var mesError = jQuery.parseJSON(error.responseText).message;
                           alert(mesError);
                        }
                     });
               }
            </script>
            <div class="right">
               <div class="title">{{ trans('client.manage_acc') }}</div>
               <ul>
                  <li class="normal"><a href="{{ route('showManageAccount') }}" title="{{ trans('client.info_acc') }}">{{ trans('client.info_acc') }}</a></li>
                  <li class="active"><a href="{{ route('showChangePassword') }}" title="{{ trans('client.change_pass') }}">{{ trans('client.change_pass') }}</a></li>
                  <li class="normal"><a href="{{ route('showMyCourse') }}" title="{{ trans('client.my_course') }}">{{ trans('client.my_course') }}</a></li>
                  <li><a href="javascript:;" title="{{ trans('client.log_out') }}" class="logout_open">{{ trans('client.log_out') }}</a></li>
               </ul>
            </div>
            <div class="cb"></div>
         </div>
      </div>
   </div>
@endsection