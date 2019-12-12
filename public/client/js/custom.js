
// function ResetLabel() {
//     if ($("#DisplayLoadControl_Login_tbUser").next().text() !== "Tên đăng nhập cần có ít nhất 8 ký tự. Ví dụ: Mizuiku123") {
//         $("#DisplayLoadControl_Login_tbUser").next().text("Tên đăng nhập cần có ít nhất 8 ký tự. Ví dụ: Mizuiku123").removeClass("cRed");
//     }
// }

// function ResetLabel2() {
//     if ($("#DisplayLoadControl_Login_tbPass").next().text() !== "Mật khẩu cần có ít nhất 8 ký tự bao gồm: Chữ, số, chữ in hoa và kí tự đặc biệt. Ví dụ: Mizuiku12@") {
//         $("#DisplayLoadControl_Login_tbPass").next().text("Mật khẩu cần có ít nhất 8 ký tự bao gồm: Chữ, số, chữ in hoa và kí tự đặc biệt. Ví dụ: Mizuiku12@").removeClass("cRed");
//     }
// }

function ResetLabel3() {
    $("label.loginnote").hide();
}

function ForgotPass() {
    var email = $("#DisplayLoadControl_Login_TextBox1").val();
    if (!CheckEmailValue($("#DisplayLoadControl_Login_TextBox1").val())) {
        $("#DisplayLoadControl_Login_TextBox1").focus();
        alert("Bạn đã nhập email chưa chính xác, vui lòng nhập lại email.");
        return;
    }
    loading(true);
    jQuery.ajax({
        url: weburl + "cms/display/Member/Ajax/Ajax.aspx",
        type: "POST",
        dataType: "json",
        data: {
            "action": "ForgotPass",
            "email": email
        },
        success: function(res) {
            loading(false);
            if (res[0] === "unActive") {
                $("#success .tac").html("Tài khoản của bạn chưa được kích hoạt!");
                $(".success_open").click();
            } else if (res[0] === "LockUser") {
                $("#success .tac").html("Tài khoản của bạn đang tạm khóa!");
                $(".success_open").click();
            } else if (res[0] === "Error") {
                $("#success .tac").html("Hệ thống đang bận, bạn vui lòng thử lại sau!");
                $(".success_open").click();
            } else {
                $("#success .tac").html("Reset mật khẩu thành công, vui lòng kiểm tra email để nhận mật khẩu mới!");
                $(".success_open").click();
            }
        },
        error: function(error) { //Lỗi xảy ra
            loading(false);
        }
    });
}

function registerMember() {
    var obError = undefined;
    $("#regisForm .required").each(function() {
        if (obError == undefined && $(this).val() === '') {
            obError = $(this);
            return;
        }
    });
    if (obError != undefined) {
        obError.focus();
        return;
    }
    if (!CheckEmailValue($("#DisplayLoadControl_Login_tbEmail").val())) {
        $("#DisplayLoadControl_Login_tbEmail").focus();
        alert("Bạn đã nhập email chưa chính xác, vui lòng nhập lại email.");
        return;
    }
    var token = "",
        email = "",
        matkhau = "",
        hovaten = "",
        gioitinh = "",
        sodienthoai = "",
        chucvu = "",
        thanhpho = "",
        quanhuyen = "",
        noicongtac = "";
    token = $("#token_register").val();
    matkhau = $("#DisplayLoadControl_Login_tbPass").val();
    hovaten = $("#DisplayLoadControl_Login_tbName").val();
    gioitinh = $("#DisplayLoadControl_Login_ddlSex option:selected").val();
    email = $("#DisplayLoadControl_Login_tbEmail").val();
    sodienthoai = $("#DisplayLoadControl_Login_tbPhone").val();
    chucvu = $("#DisplayLoadControl_Login_ddlType option:selected").val();
    thanhpho = $("#DisplayLoadControl_Login_ddlCity option:selected").val();
    quanhuyen = $("#DisplayLoadControl_Login_ddlDistric option:selected").val();
    noicongtac = $("#DisplayLoadControl_Login_ddlSchool").val();

    if (gioitinh === "0") {
        alert('Vui lòng chọn giới tính trước khi đăng ký!');
        $("#DisplayLoadControl_Login_ddlSex").focus();
        return;
    }
    if (chucvu === "0") {
        alert('Vui lòng chọn thông tin trước khi đăng ký!');
        $("#DisplayLoadControl_Login_ddlType").focus();
        return;
    }
    if (thanhpho === "0") {
        alert('Vui lòng chọn Tỉnh/Thành phố trước khi đăng ký!');
        $("#DisplayLoadControl_Login_ddlCity").focus();
        return;
    }
    if (quanhuyen === "0") {
        alert('Vui lòng chọn Quận/Huyện/Thị xã trước khi đăng ký!');
        $("#DisplayLoadControl_Login_ddlDistric").focus();
        return;
    }
    if (noicongtac === "0") {
        alert('Vui lòng chọn nơi công tác trước khi đăng ký!');
        $("#DisplayLoadControl_Login_ddlSchool").focus();
        return;
    }
    if (!$('#cb_Accept').is(':checked')) {
        alert('Vui lòng chọn đồng ý các điều khoản và quy định!');
        return;
    }
    loading(true);
    $.ajax({
        url: '/ajax-register',
        type: "POST",
        dataType: "json",
        data: {
            "_token": token,
            "password": matkhau,
            "name": hovaten,
            "sex": gioitinh,
            "email": email,
            "phone": sodienthoai,
            "career": chucvu,
            "city": thanhpho,
            "district": quanhuyen,
            "work_place": noicongtac,
        },
        success: function(res) {
            loading(false);
            if (res[0] === "Exists") {
                $("label.username").html("Email đã được sử dụng, vui lòng chọn tài khoản khác.").addClass("cRed");
            } else if (res[0] === "SpecialChar") {
                $("label.username").html("Tên đăng nhập không được chứa ký tự đặc biệt.").addClass("cRed");
            } else if (res[0] === "Space") {
                $("label.username").html("Tên đăng nhập và mật khẩu không được có khoảng trống.").addClass("cRed");
            } else if (res[0] === "LenghtLow") {
                $("label.username").html("Tên đăng nhập phải có độ dài trên 8 ký tự.").addClass("cRed");
            } else if (res[0] === "NotSecure") {
                $("label.passw").html("Mật khẩu phải chứa chữ hoa, chữ thường, số, ký tự đặc biệt và độ dài trên 8 ký tự.").addClass("cRed");
            } else {
                ResetAllTextBox("#regisForm");
                $("#success .tac").html("Đăng ký thành công, vui lòng kiểm tra thư hộp thư đến và hộp thư rác để kích hoạt tài khoản! Trường hợp không nhận được email gửi tới, vui lòng gửi yêu cầu trong mục Liên hệ");
                $(".success_open").click();
            }
        },
        error: function(error) { //Lỗi xảy ra
            loading(false);
            alert("Hệ thống đang bận, bạn vui lòng thử lại sau!");
        }
    });
}

function CheckLogin(e) {
    if (e.keyCode === 13) {
        loginMember();
        e.preventDefault();
    }
}

function loginMember() {
    var obError = undefined;
    $("#loginForm .required").each(function() {
        if (obError == undefined && $(this).val() === '') {
            obError = $(this);
            return;
        }
    });
    if (obError != undefined) {
        obError.focus();
        return;
    }
    var token = "",
        email = "",
        matkhau = "",
        remember = "0";
    token = $("#token_login").val();
    email = $("#DisplayLoadControl_Login_tbEmailLogin").val();
    matkhau = $("#DisplayLoadControl_Login_tbPassLogin").val();
    if ($("#RememberPass").prop('checked')) {
        remember = "1";
    }
    loading(true);
    $.ajax({
        url: '/ajax-login',
        type: "POST",
        dataType: "json",
        data: {
            "_token": token,
            "email": email,
            "password": matkhau,
            "remember": remember
        },
        success: function(res) {
            loading(false);
            console.log(res.mes)
            if (res.status === true) {
                location.reload();
            } 
            // else if (res[0] === "unActive") {
            //     $("label.loginnote").text("Đăng nhập không thành công, tài khoản chưa được kích hoạt!");
            //     $("label.loginnote").css("display", "block");
            // } else if (res[0] === "LockUser") {
            //     $("label.loginnote").text("Đăng nhập không thành công, Tài khoản đang bị khóa!");
            //     $("label.loginnote").css("display", "block");
            // }
             else {
                $("label.loginnote").text("Email hoặc mật khẩu không chính xác!");
                $("label.loginnote").css("display", "block");
            }
        },
        error: function(error) { //Lỗi xảy ra
            loading(false);
            var mesError = jQuery.parseJSON(error.responseText).message;
            alert(mesError);
        }
    });
}

function loginMember2() {
    var obError = undefined;
    $("#loginForm2 .required").each(function() {
        if (obError == undefined && $(this).val() === '') {
            obError = $(this);
            return;
        }
    });
    if (obError != undefined) {
        obError.focus();
        return;
    }
    var pass = "";
    pass = $("#DisplayLoadControl_Login_TextBox2").val();
    loading(true);
    jQuery.ajax({
        url: weburl + "cms/display/Member/Ajax/Ajax.aspx",
        type: "POST",
        dataType: "json",
        data: {
            "action": "LoginAnalytics",
            "pass": pass
        },
        success: function(res) {
            loading(false);
            if (res[0] === "Success") {
                window.location.href = 'https://mizuiku-emyeunuocsach.vn/';
            } else {
                $("label.loginnote").text("Mật khẩu không chính xác!");
                $("label.loginnote").css("display", "block");
            }
        },
        error: function(error) { //Lỗi xảy ra
            loading(false);
            alert("Hệ thống đang bận, bạn vui lòng thử lại sau!");
        }
    });
}
$(document).ready(function() {

    $('#slide').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
    $('#loginForm').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
    $('#loginForm2').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
    $('#ForgotForm').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
    $('#success').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
});

function openalert() {

}

function setUserName(val) {
    $("#DisplayLoadControl_Login_tbUser").val(val);
}

$('.bot .group').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    dots: true,
    arrows: true,
    useTransform: false,
    autoplay: false,
    focusOnSelect: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
var indexbt = 0;
$("#lichtrinh .slick-dots li button").each(function() {
    indexbt = indexbt + 1;
    $(this).html(indexbt);
})

function navigation(link) {
    if (link.length > 0) window.open(link, '_blank');
}

$('#logout').popup({
    focusdelay: 400,
    outline: true,
    vertical: 'top'
});


function showPopupdownload(link) {
    $('#download').popup({
        focusdelay: 400,
        outline: true,
        vertical: 'top'
    });
    $("#download .btndownload").attr("href", link);
}

$('#download').popup({
    focusdelay: 400,
    outline: true,
    vertical: 'top'
});

$('#video.hp .groups_items').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    useTransform: false,
    autoplay: false,
    focusOnSelect: true
});

var a = $(this).find('iframe').attr('src');
$('#video.hp .item .img').click(function() {
    if ($(this).hasClass('ac')) {
        $(this).find('.play').fadeIn();
        $(this).find('.khungAnh img').fadeIn();
        $(this).find('iframe').attr('src', a);
        $(this).removeClass('ac');
    } else {
        $(this).addClass('ac');
        $(this).find('.play').fadeOut();
        $(this).find('.khungAnh img').fadeOut();
        var b = a + '?autoplay=1';
        $(this).find('iframe').attr('src', b);
    }
});

$('#slider').nivoSlider();

if ($('#header .buton .regis1 .btndk').hasClass('ac')) {
    $('#header .buton .regis1').addClass('ac');
}

var cRewrite = "";
var cHrefInUrl = XuLyLink(document.URL);

/*jQuery("#CommonMenuMain li.litop").removeClass("active");
jQuery("#CommonMenuMain li.litop a").each(function() {
    var href = jQuery(this).attr("href");
    if (href) {
        href = XuLyLink(href);
        if (href === cHrefInUrl || href === cRewrite) jQuery(this).parent().addClass("active");
        if (href === "thu-vien") {
            var active = false;
            var listSubRewrite = ["hinh-anh", "video", "tai-lieu"];
            for (var i = 0; i < listSubRewrite.length; i++) {
                href = listSubRewrite[i];
                if (href) {
                    if (href.lastIndexOf("/") > -1) href = href.substring(href.lastIndexOf("/") + 1);
                    if (href.lastIndexOf(".") > -1) href = href.substring(0, href.lastIndexOf("."));
                    if (href === "/") href = "";
                    if (href === cRewrite) active = true;
                }
            }
            if (active) jQuery(this).parent().addClass("active");
        }
    }
});*/

function XuLyLink(href) {
    if (href.lastIndexOf("/") > -1) href = href.substring(href.lastIndexOf("/") + 1);
    if (href.lastIndexOf(".") > -1) href = href.substring(0, href.lastIndexOf("."));
    if (href === "/") href = "";
    return href;
}

function hovermenu() {
    var current = 0;
    $('#menu ul.main>li.active').each(function() {
        var a = $(this).attr('data');
        var tong = 0;
        var c = 0;
        for (var i = 1; i <= a; i++) {
            tong = tong + $('#menu ul.main>li:nth-child(' + i + ')').innerWidth();
            c = $('#menu ul.main>li:nth-child(' + i + ')').innerWidth();
        }
        var b = ($(window).innerWidth() - $('.wrp').innerWidth()) / 2;
        c = c / 2;
        current = tong + b - c;
        $('#menu .icoac').css('left', tong + b - c);
    });

    $('#menu ul.main>li').hover(function() {
        if ($(this).hasClass('active')) {
            $('#menu .icoac').addClass('ac');
        } else {
            $('#menu .icoac').removeClass('ac');
            setTimeout(function() {
                $('#menu .icoac').addClass('ac');
            }, 300);
        }

        var a = $(this).attr('data');
        var tong = 0;
        var c = 0;
        for (var i = 1; i <= a; i++) {
            tong = tong + $('#menu ul.main>li:nth-child(' + i + ')').innerWidth();
            c = $('#menu ul.main>li:nth-child(' + i + ')').innerWidth();
        }
        var b = ($(window).innerWidth() - $('.wrp').innerWidth()) / 2;
        c = c / 2;
        $('#menu .icoac').css('left', tong + b - c);
    }, function() {

        $('.cmNav a').hover(function(event) {
            var left = $(this).offset().left + ($(this).innerWidth() / 2) - 20;
            $('#menu .icoac').css('left', left + 'px');
        }, function() {
            $('#menu .icoac').removeClass('ac');
            $('#menu .icoac').css('left', current);
        });

        
    });

    $('.cmNav a').hover(function(event) {
        var left = $(this).offset().left + ($(this).innerWidth() / 2) - 20;
        $('#menu .icoac').css('left', left + 'px');
    }, function() {
        $('#menu .icoac').removeClass('ac');
        $('#menu .icoac').css('left', current);
    });
}
hovermenu();
$(window).resize(function() {
    hovermenu();
});

$('.slide_open').on('click', function(){
    $.ajax({
        url: '/get-provinces',
        type: "GET",
        dataType: "json",
        success: function(res) {
            $.each(res.data, function (){
                $('#DisplayLoadControl_Login_ddlCity').append("<option value='"+ this.id +"' >"+ this.name_vi +"</option>");
            });
            // console.log(res.data)
        },
        error: function(error) { //Lỗi xảy ra
            console.log(error)
        }
    });
});

$('#DisplayLoadControl_Login_ddlCity, #DisplayLoadControl_ctl00_ctl00_ddlCity').on('change', function(){
    $.ajax({
        url: '/get-provinces',
        type: "GET",
        dataType: "json",
        data: {
            'id': this.value
        },
        success: function(res) {
            $('#DisplayLoadControl_Login_ddlDistric, #DisplayLoadControl_ctl00_ctl00_ddlDistrict').find('option').not(':first').remove();
            $.each(res.data, function (){
                $('#DisplayLoadControl_Login_ddlDistric, #DisplayLoadControl_ctl00_ctl00_ddlDistrict').append("<option value='"+ this.id +"' >"+ this.name_vi +"</option>");
            });
        //    console.log(res)
        },
        error: function(error) { //Lỗi xảy ra
            console.log(error)
        }
    });
});

$('.uploadFile input').change(function () {
    var filename = $(this).val();
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
       filename = filename.substring(lastIndex + 1);
    }
    //$(this).parent().find(".show_file").text(filename);
    console.log(filename);
    // Hiển thị ảnh sau khi select
    var preview = document.querySelector('.Avatar');
    var file = document.querySelector('#DisplayLoadControl_ctl00_ctl00_flImage').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
       preview.src = reader.result;
    }

    if (file) {
       reader.readAsDataURL(file);
       CropImage();
    } else {
       preview.src = "";
    }
 });

function reFresh() {
    location.href = location.href;
}
