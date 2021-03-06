<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">

    <!-- Title -->
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css">
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/dist/css/admin.css?t=' . time())}}" rel="stylesheet">
    
    <!--Dropzone -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/dropzone/dropzone.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        const SITE_URL = "<?php echo url('admin')?>/";
        const CSRF_TOKEN = "<?php echo csrf_token()?>";
        const URL_NOIMAGE = "{{asset('admin/dist/images/noimage.jpg')}}";
        var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
    </script>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        @include('admin.components.header')
        
        @widget('admin.sideBar', [])

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

    @stack('modals')
    
    <!-- All Jquery -->
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>

    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>

    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>

    <!--DataTables-->
    <script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>

    <!--Editor-->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <!--Config datatable -->
    <script src="{{asset('admin/dist/js/config-datatable.js')}}"></script>
    
    <!--Notify -->
    <script src="{{asset('admin/assets/libs/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!--Croppie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>
    
    <!--Dropzone -->
    <script src="{{ asset('admin/dist/css/dropzone/dropzone.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.js?t=' . time())}}"></script>

    <!--This page JavaScript -->
    {{-- <script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.js' )}}"></script> --}}

    <!-- Charts js Files -->
    {{-- <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script> --}}
    
    @stack('scripts')
</body>

</html>