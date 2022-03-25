<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safa- @yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('paint/css/signature-pad.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/our.css') }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/file-uploader/dropzone.css') }}">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/extensions/toastr.css')}}"> --}}

    <link rel="stylesheet" href="{{ asset('dist/css/rtl.css') }}" />

    <style>
        .up-photo {
            height: 100px;
            width: 100px;
        }

        .custom-img {
            height: 70px;
            width: 70px;
        }

        .dropzone.dz-clickable {
            cursor: pointer;
            width: 100%;
        }

        .total-item {
            font-size: 20px;
            font-weight: bold;
        }

        .dropzone .dz-message {
            font-size: 2rem;
            position: absolute;
            top: 25%;
            right: 47px;
            width: 100%;
            margin-top: -30px;
            color: #666EE8;
            text-align: center;
        }

        #printTaBLE {
            display: none;
        }

        #printTaBLE table td,
        #printTaBLE table th {
            font-size: 18px;
        }

        #printTaBLE thead {
            font-weight: bold;
            font-size: 22px;
        }

        @media print {
            #printTaBLE {
                display: block;
            }

            body>:not(section#printTaBLE) {
                display: none
            }
        }

        .item-qte {
            color: green;
            font-size: 15px;
            font-weight: bold;
        }

        .input-group>.custom-file,
        .input-group>.custom-select,
        .input-group>.form-control,
        .input-group>.form-control-plaintext {
            width: 4%;
            min-width: 64px;
        }

        .new-request .table-re-wrap table td {
            white-space: nowrap;
            min-width: 131px;
            padding: 1px;
            padding-bottom: 5px;
        }

        .discount{
            margin: 2px;
            color: #776262;
            font-size: 11px;
            float: left;
            margin-top: 5px;
            font-style: normal;
            text-decoration: line-through!important
        }

        .dropzone {
            min-height: 116px;
        }

        .dropzone .dz-message {
            top: 48%;
            height: auto
        }

        .dropzone .dz-message{

        }

        .inc-quantity{
            min-width: 150px;
        }

        #get_items_table tr td{
            padding: 5px 8px;
            text-align: center;
            vertical-align: middle !important;
            border: 1px dashed #000;
            font-size: 15px;
        }

        .custom-table thead tr th{
            text-align: center;
            border-right: 1px solid #dee2e6
        }

        .carousel-control-next,
        .carousel-control-prev {
            background: #bbb;
        }

        .input-group:not(.has-validation)>.custom-file:not(:last-child) .custom-file-label::after, .input-group:not(.has-validation)>.custom-select:not(:last-child), .input-group:not(.has-validation)>.form-control:not(:last-child) {
            background: #ffffff !important
        }

        .span-print {
            font-size: 20px;
            font-weight: bold;
            padding: 10px 2px;
        }

        .order-image{
            width: 100%;
            height: 200px;
            box-shadow: 0px 1px 5px -2px #000;
            border-radius: 5px;
        }

        .info-box{
            overflow-x: auto
        }
    </style>
</head>



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.navbar')
        @include('includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content-wrapper-admin">
            @yield('content')
        </div>


    </div>
    @yield('modal')
    <input type="hidden" id="token" value="{{ csrf_token() }}">


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/lib/js/bootstrap.bundle.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>

    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/ckEditor/js/ckeditor.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/dropzone2/dropzone.min.js') }}" type="text/javascript"></script>
    <input id="url" type="hidden" value="{{ asset('/') }}">
    <script>
        var url = $('#url').val();
        $(document).ready(function() {

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-left",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });

        function readUrl(input) {

            if (input.files && input.files[0]) {
                file = input.files[0];
                reader = new FileReader();

                console.log(file.type.toString());
                if (file.type.toString() == 'image/png' || file.type.toString() == 'image/jgp' || file.type
                    .toString() == 'image/jpeg') {
                    reader.readAsDataURL(file);
                    reader.onload = function(e) {
                        $('.up-photo').attr('src', e.target.result);
                    }
                } else {
                    $('#up').val(null);
                    toastr["error"]("متداد الصورة غير مدعوم يجب ان يكون png, jgp, jpeg")
                }


            }
        }

    </script>

    @yield('script')


    @include('includes.alerts.success')
    @include('includes.alerts.errors')
</body>

</html>
