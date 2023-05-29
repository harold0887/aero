<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        {{ $title ?? 'APP' }}
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
  
    
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="{{ $class }}">


    @if (Route::is('dashboard','dashboard.*','post.*'))
    @include('layouts.page_templates.admin')

    @elseif(Route::is('login','register','password.email','password.request','password.reset'))
    @include('layouts.page_templates.guest')
    @else
    @include('layouts.page_templates.white')
    @endif



    


   

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('/js/plugins/sweetalert2.min.js') }}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('/js/plugins/jquery.validate.min.js') }}"></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="{{ asset('/js/plugins/jquery.dataTables.min.js') }}"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('/js/plugins/fullcalendar.min.js') }}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('/js/plugins/jquery-jvectormap.js') }}"></script>
    <!-- Boostrap tourist -->
    <script src="{{ asset('demo/bootstrap-tourist.js') }}"></script>
    <!--  Plugin for the Bootstrap Table -->
    <script src="{{ asset('/js/plugins/nouislider.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ"></script>
    <!-- Chart JS -->
    <script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Paper Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/js/paper-dashboard.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script> --}}
    <!-- Paper DashboardDEMO methods, don't include it in your project! -->
    <script src="{{ asset('/demo/demo.js') }}"></script>
    <!-- Sharrre libray -->
    <script src="{{ asset('/demo/jquery.sharrre.js') }}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!--  Ckeditor. -->
      <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

 
 <!-- iconos awesome -->
 <script src="https://kit.fontawesome.com/58c5330fd0.js" crossorigin="anonymous"></script>
    
    @stack('js')
    @include('includes.fixed-plugin-js')
    @livewireScripts

</body>
</html>