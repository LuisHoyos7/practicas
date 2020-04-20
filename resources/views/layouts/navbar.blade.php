<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">

            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true">
                    <a href="{{ route('home')}}" style="margin-right: 25px; ">
                        <img alt="Logo" src="{{asset('logos/logo_transparente.png')}}" width="140px" height="60px"/>
                    </a>
                </li>

                @if (Auth::check())
	    <!-- Estudiantes -->
            <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('estudiantes.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-user"></i><span class="kt-menu__link-text"> <center> Estudiantes</center></span></a>
                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-user"><span></span></i><span class="kt-menu__link-text">Link 1</span></a></li> 
                        </ul>
                    </div>
                </li>
                @endif


                @if (Auth::check())
                @if(auth()->user()->hasRole('administrador')  )
                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('docentes-grupos.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-file"></i><span class="kt-menu__link-text"> <center>Grupos-Docentes</center></span></a>
                    
                </li>
                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('inscripciones.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-file"></i><span class="kt-menu__link-text"> <center>Inscripciones</center></span></a>
                @endif
                </li>
                @if(auth()->user()->hasRole('administrador') || auth()->user()->hasRole('estudiante') )
                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('docentes.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-user"></i><span class="kt-menu__link-text"> <center>Docentes</center></span></a>
                    
                </li>
                @endif

                @if(auth()->user()->hasRole('administrador') || auth()->user()->hasRole('estudiante') )
                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('grupos.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-file"></i><span class="kt-menu__link-text"> <center>Grupos</center></span></a>
                </li>
                @endif

                @if(auth()->user()->hasRole('administrador') || auth()->user()->hasRole('estudiante') )

                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('colegios.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-file"></i><span class="kt-menu__link-text"> <center>Instituciones</center></span></a>  
                </li>
                @endif

          
                @endif
                <!-- ADMINISTRACIÓN -->
                @if (Auth::check())
                    @if(auth()->user()->hasRole('administrador'))
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <i class="kt-menu__link-icon flaticon-security"></i>
                                <span class="kt-menu__link-text"> <center>  Administración </center></span>
                            </a>
                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item " aria-haspopup="true">
                                        <a href="{{ route('users.index')}}" class="kt-menu__link ">
                                            <i class="kt-menu__link-icon flaticon-users-1"><span></span>
                                            </i>
                                            <span class="kt-menu__link-text"> Funcionarios </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>

    <!-- end: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: User Bar -->
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
                    <a href="{{ route('users.show',1) }}" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                {{auth()->user()->first_name}}
                            </div>
                            <div class="kt-notification__item-time">
                                Rol Administrador
                            </div>
                        </div>
                    </a>

                    <div class="kt-notification__custom kt-space-between">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();"
														target="_blank"
														class="btn btn-label btn-label-brand btn-sm btn-bold">
														Cerrar Sesión
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>

                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>

        <!--end: User Bar -->
    </div>

    <!-- end:: Header Topbar -->
</div>

<!-- end:: Header -->
