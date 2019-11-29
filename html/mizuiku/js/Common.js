function clickClass(cls) {
    $(cls).click();
}

function CropImage() {
    $(".khungAnhCrop img").each(function () {
        $(this).removeClass("wide tall").addClass((this.width / this.height > $(this).parent().width() / $(this).parent().height()) ? "wide" : "tall");
        $(this).css("opacity", "1");
    });
}

$(window).load(function () {
    $('.dotdotdot').dotdotdot();
    /*Phần khung ảnh*/
    CropImage();
    $(".khungAnhCrop0 img").each(function () {
        $(this).css("opacity","1");
    });
    $('body').append('<style>' +
        '.khungAnhCrop0:after {background:none}' +
        '.khungAnhCrop:after {background:none}' +
        '</style>');
    /*end Phần khung ảnh*/
});


/*Phần cố định*/
/*Hàm cho Owlcarousel*/
function owlslide(num, margin, autoplay, dot, nav, mobile, mobilel, tablet, tabletl, pc) {
    var option;
    if (num > 1) {
        option = {
            items: num,
            autoplay: autoplay,
            autoplayTimeout: 5000,
            smartSpeed: 1500,
            loop: true,
            nav: nav,
            dots: dot,
            autoplayHoverPause: true,
            margin: margin,
            navText: [''],
            responsive: {
                0: {
                    items: mobile,
                    margin: margin
                },
                479: {
                    items: mobilel,
                    margin: margin
                },
                767: {
                    items: tablet,
                    margin: margin
                },
                991: {
                    items: tabletl,
                    margin: margin
                },
                1199: {
                    items: pc,
                    margin: margin
                }
            }
        }
    } else {
        option = {
            items: num,
            autoplay: autoplay,
            autoplayTimeout: 5000,
            smartSpeed: 1500,
            nav: nav,
            dots: dot,
            autoplayHoverPause: true,
            margin: margin,
            navText: [''],
            responsive: {
                0: {
                    items: mobile,
                    margin: margin
                },
                479: {
                    items: mobilel,
                    margin: margin
                },
                767: {
                    items: tablet,
                    margin: margin
                },
                991: {
                    items: tabletl,
                    margin: margin
                },
                1199: {
                    items: pc,
                    margin: margin
                },

            }
        }
    }
    return option;
}
function resizearr(num1199, numother, num478, namediv, namechild) {
    var name = $(namediv);
    if ($(window).innerWidth() > 1199) {
        if (name.find(namechild).size() < num1199) {
            name.find('.owl-nav').hide();
        } else {
            name.find('.owl-nav').show();
        }
    } else if ($(window).innerWidth() < 478) {
        if (name.find(namechild).size() < num478) {
            name.find('.owl-nav').hide();
        } else {
            name.find('.owl-nav').show();
        }
    }
    else {
        if (name.find(namechild).size() < numother) {
            name.find('.owl-nav').hide();
        } else {
            name.find('.owl-nav').show();
        }
    }
}
/*Hàm cho Owlcarousel*/
$(document).ready(function () { 
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 1000) { $('#bttop').fadeIn(); }
            else { $('#bttop').fadeOut(); }
        });
        $('#bttop').click(function () {
            $('body,html').animate({ scrollTop: 0 }, 1600)
            ;
        })
        ;
    });

    /*Datepicker*/
    if ($('body').find('.datepicker').size() > 0) {
        //datepicker chọn ngày tháng
        jQuery(".datepicker").datepicker({
            firstDay: 1, //Ngày đầu tuần là thứ 2 (0 thì ngày đầu tuần là chủ nhật)
            dateFormat: "dd/mm/yy", //định dạng ngày/tháng/năm, vd: 14/07/2015
            changeYear: true, //Cho phép chọn năm dạng dropdownlist
            yearRange: "-100:+100", //Số năm trước và sau năm hiện tại ở ô chọn năm
            changeMonth: true, //Cho phép chọn tháng dạng dropdownlist
            dayNames: ["Chủ Nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            monthNames: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
            monthNamesShort: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],

        });
        //Tự định dạng lại ngày, giờ trong textbox
        function FormatDateTimeInput(control) {
            if (Date.parse(control.value))
                control.value = Date.parse(control.value).toString("dd/MM/yyyy");
            else
                control.value = "";
        }

        function FormatTimeInput(control) {
            if (control.value[control.value.length - 1] == 'h')
                control.value = control.value + "00";

            if (Date.parse(control.value.replace('h', ':')))
                control.value = Date.parse(control.value.replace('h', ':')).toString("HH") + "h" + Date.parse(control.value.replace('h', ':')).toString("mm");
            else
                control.value = "";
        }

        jQuery(".datepicker").change(function () {
            FormatDateTimeInput(this);
        });

        jQuery(".timepicker").change(function () {
            FormatTimeInput(this);
        });
    }
    /*end Datepicker*/
});
/*end Phần cố định*/


$(window).resize(function () {
    $('.dotdotdot').css("height","auto");
    $('.dotdotdot').dotdotdot();

    var a = (119.14 / 100) * $('#khoahoc .group .item').innerWidth();
    $('#khoahoc.hp .group .item').innerHeight(a);

    var b = (119.14 / 100) * $('#khoahoc.detail .other .group .item').innerWidth();
    $('#khoahoc.detail .other .group .item').innerHeight(b);
});

$(document).ready(function () {

    if ($('#about.cate .parent').size() > 0) {
        $('#partner').appendTo('#about.cate .parent');
        $('#foot').addClass('ac');
    }

    $(window).resize(function () {
        resizearr(4, 2, 1, '#pta.detail .other .group', '.item');
    });
    $('#pta.detail .other .group').owlCarousel(owlslide(4, 26, true, false, true, 1, 2, 3, 3, 4));
    resizearr(4, 2, 1, '#pta.detail .other .group', '.item');

     
    var a = (119.14 / 100) * $('#khoahoc .group .item').innerWidth();
    $('#khoahoc.hp .group .item').innerHeight(a);
    var b = (119.14 / 100) * $('#khoahoc.detail .other .group .item').innerWidth();
    $('#khoahoc.detail .other .group .item').innerHeight(b);

    lightbox.option({
        'maxWidth': $(window).innerWidth() - 40
    });
    $(".TextSize iframe[src*='youtube']").each(function () {
        var iframeCopy = $(this).clone();
        $(this).replaceWith($("<div class='youtube-iframe-wrap'></div>").append(iframeCopy));
    });

    $('#khoahoc.hp .item').hover(function () {
        var b = $(this).find('.khungAnh').size();
        if (b > 1) {
            for (var j = 2; j <= b; j++) {
                $(this).find('.khungAnh').fadeOut();
                $(this).find('.khungAnh:nth-child(' + j + ')').fadeIn();
            }
        }
    }, function () {
        $(this).find('.khungAnh').fadeOut();
        $(this).find('.khungAnh:first-child').fadeIn();
    });

    //if ($(window).innerWidth() < 1200) {
    //    $('#lichtrinh .top .group').slick({
    //        slidesToShow: 4,
    //        slidesToScroll: 1,
    //        arrows: false,
    //        asNavFor: '#lichtrinh .bot .group',
    //        autoplay: true,
    //        autoplaySpeed: 5000,
    //        speed: 700,
    //        responsive: [
    //        {
    //            breakpoint: 1400,
    //            settings: {
    //                slidesToShow: 5,
    //            }
    //        },
    //        {
    //            breakpoint: 991,
    //            settings: {
    //                slidesToShow: 4,
    //            }
    //        },
    //        {
    //            breakpoint: 768,
    //            settings: {
    //                slidesToShow: 3,
    //            }
    //        },
    //        {
    //            breakpoint: 479,
    //            settings: {
    //                slidesToShow: 2,
    //            }
    //        }
    //        ]
    //    });
    //    $('#lichtrinh .bot .group').slick({
    //        slidesToShow: 4,
    //        slidesToScroll: 1,
    //        arrows: false,
    //        asNavFor: '#lichtrinh .top .group',
    //        dots: true,
    //        autoplay: true,
    //        autoplaySpeed: 5000,
    //        speed: 700,
    //        responsive: [
    //        {
    //            breakpoint: 1400,
    //            settings: {
    //                slidesToShow: 5,
    //            }
    //        },
    //        {
    //            breakpoint: 991,
    //            settings: {
    //                slidesToShow: 4,
    //            }
    //        },
    //        {
    //            breakpoint: 768,
    //            settings: {
    //                slidesToShow: 3,
    //            }
    //        },
    //        {
    //            breakpoint: 479,
    //            settings: {
    //                slidesToShow: 2,
    //            }
    //        }
    //        ]
    //    });
    //    $('#lichtrinh .top .group .cb').remove();
    //    $('#lichtrinh .bot .group .cb').remove();
    //}

    function responsive() {
        if ($(window).innerWidth() < 1200) { 
             
            $('#baihoc .bot').insertAfter('#baihoc .right');
            $('#baihoc .left').insertAfter('#baihoc .bot');
             
            $('#contact .contact-left .contact-input').insertBefore('#contact .contact-right .contact-input');

            if ($(window).innerWidth() / $(window).innerHeight() < 1) {
                var hbaihoc = $('#baihoc .right').height() + $('#baihoc .left .tabs').innerHeight() + $('#baihoc .bot').innerHeight();
                hbaihoc = $(window).height() - hbaihoc;
                $('#baihoc .tabcontents').innerHeight(hbaihoc);
            } else {
                $('#baihoc .tabcontents').innerHeight('auto');
            } 

            if ($(window).innerWidth() < 767) { 
                $('#khoahoc.hp .group').owlCarousel(owlslide(1, 40, false, true, true, 1, 2, 3, 3, 4));
                resizearr(4, 2, 1, '#khoahoc.hp .group', '.item');

                $('#member .right').insertBefore('#member .left');
            } else {
                $('#member .right').insertAfter('#member .mid');
            }
        } 
        else {
            if ($('#contact .contact-left').find('.contact-input').size() < 1) { 
                $('#contact .contact-right .contact-input:first-child').insertAfter('#contact .contact-left .contact-info');
            }  
        }; 
    }

    responsive();
    $(window).resize(function() {
        responsive();
    });
});


var size = parseInt(jQuery(".TextSize").css("font-size"));
var lineheight = parseInt(jQuery(".TextSize").css("line-height"));
if (!size)
    size = 14;
if (!lineheight)
    lineheight = 22;
function IncreaseTextSize() {
    size++;
    lineheight += 2;

    jQuery(".TextSize")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
    jQuery(".TextSize")
        .find("*")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
}
function DecreaseTextSize() {
    size--;
    lineheight -= 2;

    jQuery(".TextSize")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
    jQuery(".TextSize")
        .find("*")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
}
function ResetTextSize() {
    size = 14;
    lineheight = 22;

    jQuery(".TextSize")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
    jQuery(".TextSize")
        .find("*")
        .css('cssText',
            'font-size:' +
            size +
            'px !important; line-height:' +
            lineheight +
            'px !important');
}


