@extends('layouts.client.default')
@section('title', trans('client.contact-us'))

@section('content')

        <div id="container">
            <div id="contact">
                <div class="wrp">
                    <div class="contact">
                        <div class="contact-info">
                            <div class="fs20 pb8 fiCielCadena c109ce3">
                                {{ __('client.mizuiku-program')}}<span class="dnmobile">-</span> <span class="dbMobile">{{ __('client.i-love-clean-water')}}</span>
                            </div>
                            <ul>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.contact-2')}}:&nbsp;</span>{{ __('client.contact-1')}}</li>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.address-2')}}:</span>{{ __('client.address-1')}}</li>
                                <li style="line-height: normal;">
                                    <span class="fOfficinaSanITCBold">{{ __('client.tel')}}:&nbsp;</span>(84 28) 3 821 9437 (ext 242)</li>
                                <li style="line-height: normal;">
                                <span class="fOfficinaSanITCBold">Website:&nbsp;</span>{{ config('app.url') }}</li>
                            </ul>

                        </div>
                        <div class="contact-left">
                            <div id="contact_input" class="contact-input">
                                <div class="fs18 pb8 fiCielCadena c109ce3">{{ __('client.send-contact')}}</div>
                                <div class="ct-ip">
                                    <input id="tbName_CT" type="text" value="" class="ct-ipt required" placeholder="Name *" />
                                    <input id="tbPhone_CT" type="text" value="" class="ct-ipt required" placeholder="Phone *" />
                                    <input id="tbEmail_CT" type="text" value="" class="ct-ipt required" placeholder="Email *" />
                                    <select name="DisplayLoadControl$ctl00$Index$dllCT" id="DisplayLoadControl_ctl00_Index_dllCT" class="ct-sl dn">
                                        <option value="60">&quot;Mizuiku - I love clean water&quot; program</option>

                                    </select>
                                    <textarea id="tbContent_CT" class="ct-tare required" placeholder="Content *"></textarea>
                                    <div>
                                        <a href="javascript:;" title="" class="ct-btn" onclick="SendContact();">{{ __('client.send')}}</a>
                                        <a href="javascript:;" title="" class="ct-btn" onclick="ResetAllTextBox('#contact_input');">{{ __('client.content')}}</a>
                                        <div class="cb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-right">
                            <div class="contact-input">
                                <div class="fs18 pb8 fiCielCadena c109ce3">
                                    {{ __('client.location')}}
                                </div>
                                <div class="mapborder">
                                    <div id="map_canvas2">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4676291444634!2d106.70168921526039!3d10.775451362157098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4802af4703%3A0x958af8c6972ad52c!2zS2jDoWNoIHPhuqFuIFNoZXJhdG9uIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1554104932439!5m2!1svi!2s" width="636" height="335" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="to-popup">
            <span id="btn-close"></span>
            <div id="popup-content">
                <div class="success">
                    <img src="{{ asset('client/css/Common/success.png') }}" class="db ma pb15" />
                    <p class="fs30 c109ce3 fOfficinaSanITCBold tac pb15">Gửi liên hệ thành công</p>
                    <div class="">
                        <p class="tac db lh22 c000 pb10 fs16">Cảm ơn bạn đã quan tâm và liên hệ đến chương trình</p>
                        <p class="tac db lh22 fs16">Chúng tôi sẽ liên hệ với bạn trong vòng 24h. Nếu bạn có bất cứ thắc mắc hay câu hỏi nào xin vui lòng gọi điện để được tư vấn miễn phí: <span class="cred">
                    (84 28) 3 821 9427 </span></p>
                    </div>
                    <a href="https://mizuiku-emyeunuocsach.vn/" title="home page" class="sc-hp">Trở về trang chủ</a>
                </div>
            </div>
            <!--end #popup-content-->
        </div>
        <!--to-popup end-->
        <div id="background-popup"></div>

        

@endsection

@section('custom-js')
<script type="text/javascript">
    function SendContact() {
        var obError = undefined;
        $("#contact_input .required").each(function() {
            if (obError == undefined && $(this).val() == '') {
                obError = $(this);
                return;
            }
        });
        if (obError != undefined) {
            alert("Bạn phải nhập đầy đủ thông tin trước khi gửi liên hệ!");
            obError.focus();
            return;
        }
        if (!CheckEmailValue($("#tbEmail_CT").val())) {
            $("#tbEmail_CT").focus();
            alert("Bạn đã nhập email    chưa chính xác, vui lòng nhập lại email.");
            return;
        }
        loading(true);
        var name = $("#tbName_CT").val();
        var email = $("#tbEmail_CT").val();
        var phone = $("#tbPhone_CT").val();
        var content = $("#tbContent_CT").val();
        // var igid = $("#DisplayLoadControl_ctl00_Index_dllCT option:selected").val();
        $.ajax({
            url: '/lien-he',
            type: "get",
            data: {
                "fullname": name,
                "email": email,
                "phone": phone,
                "content": content,
                "ip": '{{ \Request::ip() }}',
                "language": "{{ session()->get('locale') ? session()->get('locale') : 'en' }}"
            },
            success: function(res) {
                loading(false);
                ResetAllTextBox("#contact_input");
                loadPopup();
            },
            error: function(error) { //Lỗi xảy ra
                loading(false);
                alert('Hệ thống đang bận, bạn vui lòng thử lại sau.');
            }
        });
    };
    $("#btn-close").click(function() {
        disablePopup();
    });
    $(this).keydown(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
            disablePopup(); // function close pop up
        }
    });
    $("#background-popup").click(function() {
        disablePopup(); // function close pop up 
    });
    var popupStatus = 0; // set value

    function loadPopup() {
        event.preventDefault();
        if (popupStatus === 0) { // if value is 0, show popup
            $("#to-popup").fadeIn(200); // fadein popup div
            $("#background-popup").css("opacity", "0.8"); // Css opacity, supports IE7, IE8
            $("#background-popup").fadeIn(200);
            popupStatus = 1; // and set value to 1
        }
    }

    function disablePopup() {
        if (popupStatus === 1) { // if value is 1, close popup
            $("#to-popup").fadeOut(300);
            $("#background-popup").fadeOut(300);
            popupStatus = 0;
        }
    }
</script>
@endsection