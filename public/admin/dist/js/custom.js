var _token = $('meta[name="csrf-token"]').attr('content');

$(function() {
    "use strict";

    $(".preloader").fadeOut();
    // ============================================================== 
    // Theme options
    // ==============================================================     
    // ============================================================== 
    // sidebar-hover
    // ==============================================================

    $(".left-sidebar").hover(
        function() {
            $(".navbar-header").addClass("expand-logo");
        },
        function() {
            $(".navbar-header").removeClass("expand-logo");
        }
    );
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function() {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".nav-lock").on('click', function() {
        $("body").toggleClass("lock-nav");
        $(".nav-lock i").toggleClass("mdi-toggle-switch-off");
        $("body, .page-wrapper").trigger("resize");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ============================================================== 
    // Right sidebar options
    // ==============================================================
    $(function() {
        $(".service-panel-toggle").on('click', function() {
            $(".customizer").toggleClass('show-service-panel');

        });
        $('.page-wrapper').on('click', function() {
            $(".customizer").removeClass('show-service-panel');
        });
    });
    // ============================================================== 
    // This is for the floating labels
    // ============================================================== 
    $('.floating-labels .form-control').on('focus blur', function(e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // ============================================================== 
    //tooltip
    // ============================================================== 
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ============================================================== 
    //Popover
    // ============================================================== 
    $(function() {
        $('[data-toggle="popover"]').popover()
    })

    // ============================================================== 
    // Perfact scrollbar
    // ============================================================== 
    $('.message-center, .customizer-body, .scrollable').perfectScrollbar({
        wheelPropagation: !0
    });

    /*var ps = new PerfectScrollbar('.message-body');
    var ps = new PerfectScrollbar('.notifications');
    var ps = new PerfectScrollbar('.scroll-sidebar');
    var ps = new PerfectScrollbar('.customizer-body');*/

    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();
    // ============================================================== 
    // To do list
    // ============================================================== 
    $(".list-task li label").click(function() {
        $(this).toggleClass("task-done");
    });

    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //**************************** 
    var setsidebartype = function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function() {
        $("#main-wrapper").toggleClass("mini-sidebar");
        if ($("#main-wrapper").hasClass("mini-sidebar")) {
            $(".sidebartoggler").prop("checked", !0);
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $(".sidebartoggler").prop("checked", !1);
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-news-btn').on("click",function() {
        $.ajax({
            type: "GET",
            url: "/admin/news/getCategory",
            success: function(data){
                $.each(data, function(index, item){
                    $('#category-create').append("<option value='"+item.id+"'>"+item.title+"</option>")
                })
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    
    $('#btn-create-news').on("click",function() {
        $.ajax({
            type: "POST",
            url: "/admin/news/store",
            data: { 
                ref_id: 1,
                category_id: $('#category-create').children("option:selected").val(),
                slug : $('#slug-create').val(),  
                title: $('#title-create').val(), 
                thumbnail: $('#thumbnail-create').val(),
                description: $('#description-create').val(), 
                content: $('#content-create').val(), 
                language: 'en',
                created_user_id: 1,
                updated_user_id: 1
            },  
            success: function(data){
                $.notify({ message: 'The news was created successfully!' },{ type: 'success' });
                $('#datatables').DataTable().ajax.reload();
            },
            error: function(data) {
                $.notify({ message: 'The news creates fail!' },{ type: 'danger' });
                console.log(data);
            }
        });
    });

    // Modal Delete
    $( document ).on( "click", ".btn-delete", function() {
        let id = parseInt($(this).attr('data-id'));
        let url = $(this).attr('data-url');
        alert(url);
        $('#modal-delete .btn-submit-delete').attr('data-id', id);
        $('#modal-delete .btn-submit-delete').attr('data-url', url);
        $('#modal-delete').modal('show');
    });

    $( document ).on( "click", ".btn-submit-delete", function() {
        let id = parseInt($(this).attr('data-id'));
        let url = $(this).attr('data-url');

        $.ajax({
            type: "POST",
            url: url + '/' + id,
            data: { 
                _token: _token,
                _method: 'DELETE'
            },  
            complete:function(data){
                $('#modal-delete').modal('hide');
            },
            success: function(data){
                $.notify({ message: 'The item was deleted successfully!' },{ type: 'success' });
                $('#datatable').DataTable().ajax.reload();
            },
            error: function(data) {
                $.notify({ message: 'The item was delete fail!' },{ type: 'danger' });
            }
        });
    });
});