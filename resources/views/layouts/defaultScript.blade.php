<head>
    <base href="">
    <meta charset="utf-8" />

    <title>@yield('pageTitle')</title>

    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts  https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700 -->
    <link rel="stylesheet" href="{{ asset('metronic/assets/css/fonts.googleapis.css')}}">

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('metronic/assets/css/pages/login/login-6.css') }}" rel="stylesheet" type="text/css" />

    <!--begin::Page Custom Styles(used by this page)  Welcome-->
    <link href="metronic/assets/css/pages/pricing/pricing-1.css" rel="stylesheet" type="text/css" />

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('metronic/assets/media/logos/favicon.ico') }}" />
    <link  href="{{ asset('css/personal.css') }}" rel="stylesheet" type="text/css" />

</head>

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<!-- script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script -->
<script src="{{ asset('metronic/assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('metronic/assets/js/pages/dashboard.js') }}" type="text/javascript"></script>

<script src="{{ asset('metronic/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/crud/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/functions.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/contribuyente/declaracion.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/contribuyente/campos_calculados_anual_monteria.js') }}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/contribuyente/campos_calculados_reteica_monteria.js') }}" type="text/javascript"></script>

<!--end::Page Scripts -->
<!-- Select 2 -->
<script src="{{ asset('metronic/assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/plugins/custom/tinymce/tinymce.bundle.js')}}" type="text/javascript"></script>
<script src="{{ asset('metronic/assets/js/pages/crud/forms/editors/tinymce.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.number.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/FormatNumber.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pickerbootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/contribuyenteGeneral.js') }}" type="text/javascript"></script>
