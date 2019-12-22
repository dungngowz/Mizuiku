<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ app()->getLocale() }}">

<head>
    {{-- SEO --}}
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='canonical' href='{{ env('APP_URL', 'http://localhost') }}' />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="description" content="{{ config('app.name') }}" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ env('APP_URL', 'http://localhost') }}" />
    <meta property="og:image" content="{{ asset('client/pic/banner/logorespo_636332056462083140.png') }}" />
    <meta property="og:description" content="{{ config('app.name') }}" />
    <link rel="Shortcut icon" href="{{ asset('client/pic/banner/iconbtnhoc_636319920147622774636559225605595018.png') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    
    <script type="text/javascript">
		var weburl = "{{ url('') }}";
		// if (document.URL.indexOf("www.") > -1) window.location = document.URL.replace("www.", "");

		// if (window.location.protocol === "http:" && document.URL.indexOf("localhost") < 0) {
        //     var restOfUrl = window.location.href.substr(5);
        //     console.log(restOfUrl)
		// 	// window.location = "https:" + restOfUrl;
		// }

		// if (document.URL.indexOf("www.") > -1) window.location = document.URL.replace("www.", "");
	</script>

    {{-- CSS --}}
    <link href="{{ asset('client/css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Fonts/fonts.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Common/display.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Common/Common.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/AboutUs/AboutUs.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Common/HeadFoot.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/ContactUs/ContactUs.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Filelibrary/Filelibrary.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/KhoaHoc/KhoaHoc.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/News/News.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/PhotoAlbum/PhotoAlbum.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Video/Video.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/Member/Member.css') }}" rel="stylesheet" />

    {{-- JS --}}
    <link href="{{ asset('client/js/Owl2/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/js/Nivoslide/nivo-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/js/datePicker/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/js/ScrollBar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/js/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/js/Lightbox/lightbox.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('client/css/client.css') }}" rel="stylesheet" />

    <!--Js-->
    <script src="{{ asset('client/js/Lightbox/lightbox-plus-jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/Dotdotdot/jquery.dotdotdot.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/Owl2/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/Nivoslide/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/jquery.popupoverlay.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/datePicker/jquery-ui-1.11.4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/datePicker/date-vi-VN.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/ScrollBar/jquery.mCustomScrollbar.concat.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/tab-content/tabcontent.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/jwplayer.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jwplayer.key = "mGDOS7fVOAOlydlRCHC0GR7sLKgUNTAM1BH6/Q==";
    </script>
    <script src="{{ asset('client/js/Common.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/loading.js') }}" type="text/javascript"></script>
    <script src="{{ asset('client/js/slick/slick.js') }}" type="text/javascript"></script>


</head>

<body>
    @widget('client.header')

    @yield('content')

    @widget('client.footer')

    @include('client.components.modal')

    <script src="{{ asset('client/js/custom.js?t=' . time()) }}"></script>
    <link rel="stylesheet" href="{{ asset('client/css/custom.css?t=' . time()) }}">
    <script src="{{ asset('client/js/custom-course.js') }}"></script>

    @yield('custom-js')
</body>

</html>