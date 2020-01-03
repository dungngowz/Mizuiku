var _token = $('meta[name="csrf-token"]').attr('content');
var loadingAjax = false;

function SendComment() {
    var content = $("#tbComment").val();
    var post_id = $("#post_id").val();
    if (content === "") {
        $("#tbComment").focus();
        return;
    }
    loading(true);
    jQuery.ajax({
        url: '/add-comment',
        type: "POST",
        dataType: "json",
        data: {
            "_token": _token,
            "post_id": post_id,
            "content": content
        },
        success: function (res) {
            loading(false);
            $("#tbComment").val('');
            $("#success .tac").html("Bình luận của bạn sẽ được kiểm duyệt bởi quản trị của Website trước khi được cập nhật. Xin cảm ơn.");
            $(".success_open").click();
        },
        error: function (error) {//Lỗi xảy ra
            loading(false);
            alert("Hệ thống đang bận, bạn vui lòng thử lại sau!");
        }
    });
}
function chieucao() {
    var a = $('#baihoc .bot').innerHeight();
    var b = $(window).innerHeight();
    $('#baihoc .top').innerHeight(b - a);
}
chieucao();
$(window).resize(function () {
    chieucao();
});


$('#baihoc .left .name').click(function () {
    if ($(this).parent().parent().prev().attr("seen") === "false") {
        var chudetruoc = $(this).parent().parent().prev().find(".name").text();
        var chudechon = $(this).text();
        $("#success .tac").html("Bạn cần hoàn thành bài học <b>" + chudetruoc + "</b> mới có thể học <b>" + chudechon + "</b>");
        $(".success_open").click();
        return;
    }

    $('body,html').animate({ scrollTop: 0 }, 1600);
    $('#baihoc .left #view1 ul li').removeClass('ac');
    $(this).parents('li').addClass('ac');
    var a = $(this).attr('datavideo');
    var iid = $(".tabcontents li.ac").attr("iid");
    var auto = "false";
    if ($('#AutoPlay').hasClass('ac')) auto = 'true';
    
    jwplayer('videoPlayer').setup({
        file: a,
        //image: '/pic/video/video2.jpg', 
        width: '100%',
        aspectratio: '16:9',
        mute: 'false',
        autostart: auto,
        repeat: 'false',
        primary: 'html5',
        preload: 'auto',
        events: {
            onTime: function (event) {
                timeAction = '30';
                if (jwplayer().getDuration()< 30) {
                    luotXem(iid);
                    iid = "";
                } else {
                    if (event.position > timeAction) {
                        luotXem(iid);
                        iid = "";
                    }
                }
            },
            onComplete: function() {
                updateViews();
            }
        }
    });
    var c = $(this).html();
    $('#baihoc .right .tenbai .name').html(c);
});
$('#view1 .parent ul li:first-child').addClass('fvideo');
$('#view1 .parent ul li:last-child').addClass('lvideo');
$('#view1 .parent:first-child').addClass('fpa');
$('#view1 .parent:last-child').addClass('lpa');
$('#view1 ul li.ac').parents('.parent').addClass('current');

$('#nextvideo').click(function () {
    if ($('#view1 ul li.ac').next().length == 0) {
        $("#success .tac").html("Không có video nào tiếp theo!");
        $(".success_open").click();
    } else {
        if ($('#view1 ul li.ac').attr("seen") === "false") {
            $("#success .tac").html("Bài cần hoàn thành bài học hiện tại trước!");
            $(".success_open").click();
            return;
        }
        if ($('#view1 ul li.ac').hasClass('lvideo')) {
            var b = $('#view1 ul li.ac').parents('.parent').next().find('ul li.fvideo a.name').attr('datavideo');
            var c = $('#view1 ul li.ac').parents('.parent').next().find('ul li.fvideo a.name').html();
            $('#view1 ul li.ac').addClass('current');
            $('#view1 ul li.ac').parents('.parent').next().find('ul li.fvideo').addClass('ac');
            $('#view1 ul li.current').removeClass('ac');
            $('#view1 ul li').removeClass('current');
            $('#baihoc .right .tenbai .name').html(c);
            var iid = $(".tabcontents li.ac").attr("iid");
            var auto = "false";
            if ($('#AutoPlay').hasClass('ac')) auto = 'true';
            jwplayer('videoPlayer').setup({
                file: b,
                //image: '/pic/video/video2.jpg', 
                width: '100%',
                aspectratio: '16:9',
                mute: 'false',
                autostart: auto,
                repeat: 'false',
                primary: 'html5',
                preload: 'auto',
                events: {
                    onTime: function (event) {
                        
                        timeAction = '30';
                        if (event.position > timeAction) {
                            luotXem(iid);
                            iid = "";
                        }
                    },
                    onComplete: function() {
                        updateViews();
                    }
                }
            });
        } else {
            var a = $('#view1 ul li.ac').next('li').find('a.name').attr('datavideo');
            var c1 = $('#view1 ul li.ac').next('li').find('a.name').html();
            $('#baihoc .right .tenbai .name').html(c1);
            $('#view1 ul li.ac').addClass('current');
            $('#view1 ul li.ac').next().addClass('ac');
            $('#view1 ul li.current').removeClass('ac');
            $('#view1 ul li').removeClass('current');
            var iid = $(".tabcontents li.ac").attr("iid");
            var auto = "false";
            if ($('#AutoPlay').hasClass('ac')) auto = 'true';
            jwplayer('videoPlayer').setup({
                file: a,
                //image: '/pic/video/video2.jpg', 
                width: '100%',
                aspectratio: '16:9',
                mute: 'false',
                autostart: auto,
                repeat: 'false',
                primary: 'html5',
                preload: 'auto',
                events: {
                    onTime: function (event) {
                        timeAction = '30';
                        if (event.position > timeAction) {
                            luotXem(iid);
                            iid = "";
                        }
                    },
                    onComplete: function() {
                        updateViews();
                    }
                }
            });
        }
    }
});
$('#AutoPlay').click(function(){
    $(this).toggleClass('ac');
});
$('#prevvideo').click(function () {
    if ($('#view1 ul li.ac.fvideo').parents('.parent').hasClass('fpa')) {
        alert('Không có video nào phía trước!');
    } else {
        if ($('#view1 ul li.ac').hasClass('fvideo')) {
            var b = $('#view1 ul li.ac').parents('.parent').prev().find('ul li.lvideo a.name').attr('datavideo');
            var c = $('#view1 ul li.ac').parents('.parent').prev().find('ul li.lvideo a.name').html();
            $('#view1 ul li.ac').addClass('current');
            $('#view1 ul li.ac').parents('.parent').prev().find('ul li.lvideo').addClass('ac');
            $('#view1 ul li.current').removeClass('ac');
            $('#view1 ul li').removeClass('current');
            $('#baihoc .right .tenbai .name').html(c);
            var iid = $(".tabcontents li.ac").attr("iid");
            var auto = "false";
            if ($('#AutoPlay').hasClass('ac')) auto = 'true';
            jwplayer('videoPlayer').setup({
                file: b,
                //image: '/pic/video/video2.jpg', 
                width: '100%',
                aspectratio: '16:9',
                mute: 'false',
                autostart: auto,
                repeat: 'false',
                primary: 'html5',
                preload: 'auto',
                events: {
                    onTime: function (event) {
                        timeAction = '30';
                        if (event.position > timeAction) {
                            luotXem(iid);
                            iid = "";
                        }
                    },
                    onComplete: function() {
                        updateViews();
                    }
                }
            });
        } else {
            var a = $('#view1 ul li.ac').prev('li').find('a.name').attr('datavideo');
            var c1 = $('#view1 ul li.ac').prev('li').find('a.name').html();
            $('#view1 ul li.ac').addClass('current');
            $('#view1 ul li.ac').prev().addClass('ac');
            $('#view1 ul li.current').removeClass('ac');
            $('#view1 ul li').removeClass('current');
            $('#baihoc .right .tenbai .name').html(c1);
            var iid = $(".tabcontents li.ac").attr("iid");
            var auto = "false";
            if ($('#AutoPlay').hasClass('ac')) auto = 'true';
            jwplayer('videoPlayer').setup({
                file: a,
                //image: '/pic/video/video2.jpg', 
                width: '100%',
                aspectratio: '16:9',
                mute: 'false',
                autostart: auto,
                repeat: 'false',
                primary: 'html5',
                preload: 'auto',
                events: {
                    onTime: function (event) {
                        timeAction = '30';
                        if (event.position > timeAction) {
                            luotXem(iid);
                            iid = "";
                        }
                    },
                    onComplete: function() {
                        updateViews();
                    }
                }
            });
        }
    }
});

$('#baihoc .right .tenbai .backstudy').click(function () {
    $('#baihoc .left').toggleClass('ac');
    $('#baihoc .right').toggleClass('ac');
});
function luotXem(iid) {
    if (iid !== "") {
        jQuery.ajax({
            url: weburl + "cms/display/Learning/Ajax/Ajax.aspx",
            type: "POST",
            dataType: "json",
            data: {
                "iid": iid
            },
            success: function (res) {
                $('#baihoc .parent ul li[iid=' + iid + ']').attr("seen", "true");
                HienThiDanhGia02();
            },
            error: function (error) {//Lỗi xảy ra
            }
        });
    }
}

function updateViews(){
    if(loadingAjax){
        return false;
    }
    loadingAjax = true;

    let video_ref_id = $('#view1 ul.list-video li.ac').attr('video_ref_id');

    $.ajax({
        url: weburl + "/update-views-course",
        type: "POST",
        dataType: "json",
        data: {
            "video_ref_id": video_ref_id,
            "course_ref_id": $('input[name=course_ref_id]').val(),
            "_token": _token,
        },
        success: function (res) {
            loadingAjax = false;
            location.reload();
        },
        error: function (error) {//Lỗi xảy ra
            loadingAjax = false;
        }
    });
}


function loadPercent() {
  var  total = $("ul li.item").length;
  var  cr = $($("ul li.item[seen=true]")).length;

    var perc = (cr / total) * 100;
    $("#baihoc .bot ul li.percent .box .inbox").css("width", perc + "%");
    $("#Perc").html(parseInt(perc) + "%");

    let course_ref_id = $('input[name=course_ref_id]').val();
    $.ajax({
        url: weburl + "/update-percent-finish-course",
        type: "POST",
        dataType: "json",
        data: {
            "course_ref_id": course_ref_id,
            "perc": perc,
            "_token": _token,
        },
        success: function (res) {
            console.log(res);
        },
        error: function (error) {}
    });
}
loadPercent();

function popup_AA() {
    $(".popup_A").addClass("active");
    $(".popup_A .content a.closed").click(function () {
        $(".popup_A").removeClass("active");
    });
    $(this).keydown(function (event) {
        if (event.which === 27) { // 27 is 'Ecs' in the keyboard
            $(".popup_A").removeClass("active");
        }
    });
}
