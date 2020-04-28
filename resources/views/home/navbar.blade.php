{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('layouts/defaultScript')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
            } */
            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="kt-portlet">
                    <div class="kt-portlet__head kt-bg-dark">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="#">
                                    <img alt="Logo" src="{{asset('logos/logo_transparente_semi_blanco.png')}}" width="120px" />
                                </a>
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                                <h3 class="kt-menu__head-title">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @if (Auth::check())
                                                <a href="{{ url('/index') }}" class="fa fa-home"></a>
                                            @else
                                                <a href="{{ url('/login') }}" style="font-size: 12px;">Login</a>
                                                <a href="{{ url('/register') }}" style="font-size: 12px;">Register</a>
                                            @endif
                                        </div>
                                    @endif
                                </h3>
                            </div>
                    </div>
                    <div class="kt-portlet__body">
                        @yield('contentInicio')
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </body>
</html> --}}

<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
        @include('layouts/defaultScript')
        <style>
                /* html, body {
                    background-color: #fff;
                } */
                .links > a {
                    color: #fff;
                    padding: 0 25px;
                    font-size: 20px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
            </style>
    <!-- end::Head -->

    @toastr_css - toastr css lib.
    @toastr_js - toastr js lib.
    @toastr_render - for render toastr notification.

    <link  href="{{ asset('metronic/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >
        <!-- begin:: Page -->
        
		<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed" >
		<div class="kt-header-mobile__logo">
			<a href="index.html">
				<img alt="Logo" src="{{asset('logos/logo_transparente_semi_blanco.png')}}" width="100px" />
			</a>
        </div>
        
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
		</div>
    </div>
        <!-- end:: Header Mobile -->
        

<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    
            <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                     <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                                    <ul class="kt-menu__nav ">
                                        <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true">
                                            <a href="{{ route('home')}}" style="margin-right: 50px; ">
                                                <img alt="Logo" src="{{asset('logos/logo_transparente.png')}}" width="140px" height="70"/>
                                            </a>
                                        </li>
									    <!-- Preinscripcion -->
                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel"aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="{{ route('inscripciones.create')}}" class="kt-menu__link"><i class="kt-menu__link-icon fa fa-building">
                                                </i><span class="kt-menu__link-text"> Pre - Inscribir </span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel"aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="#services" class="kt-menu__link"><i class="kt-menu__link-icon fa fa-building">
                                                </i><span class="kt-menu__link-text">Servicios </span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel"aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="#nosotros" class="kt-menu__link"><i class="kt-menu__link-icon fa fa-building">
                                                </i><span class="kt-menu__link-text">Nosotros</span>
                                            </a>
                                        </li>
                            
                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel"aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="#contactos" class="kt-menu__link"><i class="kt-menu__link-icon fa fa-building">
                                                </i><span class="kt-menu__link-text">Contacto</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <!-- end: Header Menu -->
                  

                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">

                            <div class="kt-header__topbar-item">
                                <div class="kt-header__topbar-wrapper">
                                    <span class="kt-header__topbar-icon">
                                        <i>
                                            <a style="color:black !important" href="{{ route('inscripciones.create')}}" class="la la-edit" data-tittle="Inscripciones" data-toggle="inscribir"></a>
                                        </i>
                                    </span>
                                </div>
                            </div>
                            <!--begin: User Bar -->
                            @if (Route::has('login'))

                                @if (Auth::check())
                                    <div class="kt-header__topbar-item">
                                        <div class="kt-header__topbar-wrapper">
                                            <span class="kt-header__topbar-icon">
                                                <i>
                                                    <a style="color:black !important" href="{{ url('/index') }}" class="fa fa-home"></a>
                                                </i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                            <div class="kt-header__topbar-user">
                                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
                                                <img class="kt-hidden" alt="Pic" src="metronic/assets/media/users/300_25.jpg" />

                                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                                            <!--begin: Head -->
                                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(metronic/assets/media/misc/bg-1.jpg)">
                                                <div class="kt-user-card__avatar">
                                                    <img class="kt-hidden" alt="Pic" src="metronic/assets/media/users/300_25.jpg" />
                                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                                                </div>
                                                <div class="kt-user-card__name">
                                                    {{-- {{auth()->user()->name}} --}}
                                                </div>
                                            </div>
                                            <!--end: Head -->

                                            <!--begin: Navigation -->
                                            <div class="kt-notification">
                                                <div class="kt-notification__custom kt-space-between">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();"
                                                                                    target="_blank"
                                                                                    class="btn btn-label btn-label-brand btn-sm btn-bold">
                                                                                    Salir
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>

                                                </div>
                                            </div>
                                            <!--end: Navigation -->
                                        </div>
                                    </div>
                                @else
                                    <div class="kt-header__topbar-item">
                                        <div class="kt-header__topbar-wrapper">
                                            <span class="kt-header__topbar-icon">
                                                <a class="btn btn-label-success" style="color:black !important" href="{{ url('/login') }}" class="">Entrar</a>
                                            </span>
                                        </div>
                                    </div>
                                @endif

                            @endif


                            <!--end: User Bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->

                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <!--Begin::Dashboard 3-->
                        <!--Begin::Row-->
                        <div class="row uno">
                            @yield('contentInicio')
                        </div>
                        <!--End::Row-->
                        <!--End::Dashboard 3-->
                    </div>
					<!-- begin:: Footer -->
                    @include('layouts/footer')
					<!-- end:: Footer -->
				</div>
			</div>
        </div>
        <script src="{{ asset('metronic/assets/js/icons.js') }}" type="text/javascript"></script>
	</body>
	<!-- end::Body -->
</html>
