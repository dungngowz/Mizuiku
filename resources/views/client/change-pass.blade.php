@extends('layouts.client.default')
@section('title', config('app.name'))

@section('content')
   <div id="pageroad">
      <div class="wrp">
         <ul>
         <li><a href="{{ config('app.url') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
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
                  <img alt="helen.hoa1103@gmail.com" class="" src="https://mizuiku-emyeunuocsach.vn/pic/icon/no_image.gif" />
                  </a>
                  <div class="input">
                     <input type="file" name="DisplayLoadControl$ctl00$ctl00$flImage" id="DisplayLoadControl_ctl00_ctl00_flImage" />
                  </div>
               </div>
            </div>
            <div id="changePassForm" class="mid">
               <p class="fiCielGotham c109ce3 fs14 ttu pb20">Đổi mật khẩu</p>
               <div>
                  <div class="ip changepass">
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassOld" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassOld" class="required" placeholder="Mật khẩu cũ" />
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassNew" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassNew" class="required" placeholder="Mật khẩu mới" />
                     <input name="DisplayLoadControl$ctl00$ctl00$tbPassNew2" type="password" id="DisplayLoadControl_ctl00_ctl00_tbPassNew2" class="required" placeholder="Nhập lại mật khẩu mới" />
                     <a class="btnupdateinfo" href="javascript:;" onclick="changePass();">Cập nhật mật khẩu</a>
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
                     jQuery.ajax({
                        url: weburl + "cms/display/Member/Ajax/Ajax.aspx",
                        type: "POST",
                        dataType: "json",
                        data: {
                           "action": "changePass",
                           "passOld": passOld,
                           "passNew": passNew,
                           "passNew2": passNew2
                        },
                        success: function (res) {
                           loading(false);
                           alert(res[0]);
                        },
                        error: function (error) {//Lỗi xảy ra
                           loading(false);
                           alert("Hệ thống đang bận, bạn vui lòng thử lại sau!");
                        }
                     });
               }
            </script>
            <div class="right">
               <div class="title">Quản lý tài khoản</div>
               <ul>
                  <li class="normal"><a href="https://mizuiku-emyeunuocsach.vn/quan-ly-tai-khoan.htm" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                  <li class="active"><a href="https://mizuiku-emyeunuocsach.vn/doi-mat-khau.htm" title="">Đổi mật khẩu</a></li>
                  <li class="normal"><a href="https://mizuiku-emyeunuocsach.vn/quan-ly-khoa-hoc.htm" title="Khoá học của tôi">Khoá học của tôi</a></li>
                  <li><a href="javascript:;" title="Thoát" class="logout_open">Thoát</a></li>
               </ul>
            </div>
            <div class="cb"></div>
         </div>
      </div>
   </div>
@endsection