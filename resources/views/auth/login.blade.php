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
	<!-- end::Head -->
 
	<style>

h1 {
  margin: 0;
  height: 2vmin;
  width:80vmin;
  display: flex;
  justify-content: center;
  position: relative;
}

em {

margin-top: 110px;
  font-family: 'Josefin Sans', sans-serif;
  color: white;
  font-size: 2vmin;
  position: relative;
  font-style: normal;
  width: 10vmin;
  text-align: center;
}

em.planet {
  -webkit-animation: planet-rotate 4s linear infinite;
  animation: planet-rotate 4s linear infinite;
  position: relative;
}


em.planet.left {
  -webkit-transform-origin: 10vmin 1vmin;
  transform-origin: 10vmin 1vmin;
}

em.planet.right {
  -webkit-transform-origin: -1vmin 2vmin;
  transform-origin: -1vmin 2vmin;
}

@-webkit-keyframes planet-rotate {
  to {
    -webkit-transform: rotate(1turn);
  }
}

@keyframes planet-rotate {
  to {
    transform: rotate(1turn);
  }
}



@import url(https://fonts.googleapis.com/css?family=Erica+One);
/* BODY */


p {

 
 
 /* -webkit-animation: bounce .10m ease infinite alternate; */
  font-family: 'Erica One', cursive;
  font-size: 50px;
  color: #FFF;
  text-align: center;
  line-height: 100px;
/*  text-shadow: 0 1px 0 #CCC,
               0 1px 0 #CCC,
               0 1px 0 #CCC,
               0 1px 0 #CCC,
               0 1px 0 #CCC,
               0 1px 0 transparent,
               0 1px 0 transparent,
               0 1px 0 transparent,
               0 1px 0 transparent,
               0 1px 10px rgba(0, 0, 0, .6);
}
 ANIMATION */
@-webkit-keyframes bounce {
  100% {
    
    
    text-shadow: 0 1px 0 #CCC,
                 0 2px 0 #CCC,
                 0 3px 0 #CCC,
                 0 4px 0 #CCC,
                 0 5px 0 #CCC,
                 0 6px 0 #CCC,
                 0 7px 0 #CCC,
                 0 8px 0 #CCC,
                 0 9px 0 #CCC,
                 0 30px 30px rgba(0, 0, 0, .3);
  }
}

.btn > .degradado{
	background: black !important;
}
	</style>

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div class="kt-login__logo">
										<a href="#">
										{{-- 	<img src="{{asset('logos/logotaxtool.png')}}" width="100" class="mb-2"><br>--}}
												<img src="{{asset('logos/logo_transparente.png')}}" width="150">
										</a>
									</div>
									<div class="kt-login__signin">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Iniciar Sesión.</h3>
										</div>
										<div class="kt-login__form">
										<!-- FORMULARIO DE INICIO DE SESION -->
											<form class="kt-form" method="POST" action="{{ route('login') }}">
											    {{ csrf_field() }}

												<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


														<input placeholder="Email" autocomplete="off" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

														@if ($errors->has('email'))
															<span class="help-block">
																<strong>{{ $errors->first('email') }}</strong>
															</span>
														@endif

												</div>



												<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

													<input id="password" type="password" class="form-control form-control-last" placeholder="Password" name="password" required>

														@if ($errors->has('password'))
															<span class="help-block">
																<strong>{{ $errors->first('password') }}</strong>
															</span>
														@endif

												</div>

												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="remember"> Recordarme
														<span></span>
													</label>
													<a href="javascript:;" id="kt_login_forgot">He olvidado mi contraseña</a>
												</div>
												<div class="kt-login__actions">
												<button type="submit" class=" btn degradado btn-brand btn-pill btn-elevate ">
													Ingresar
												</button>
												</div>
											</form>
										<!-- FIN FORMULARIO DE INICIO DE SESION -->
										</div>
									</div>

									<!-- begin::register -->
									{{-- @ include('auth.register') --}}
									<!-- end::register -->

									<!-- begin::olvide mi clave -->
									{{-- @ include('auth.passwords.reset') --}}
									<!-- end::olvide mi clave -->


								</div>
							</div>
							<div class="kt-login__account">
								<span class="kt-login__account-msg">
									¿No tienes una cuenta?
								</span>&nbsp;&nbsp;
								<a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Registrate!</a>
							</div>
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background: linear-gradient(180deg,#21c8f6,#395177)">
						<div class="kt-login__section">
							<div class="kt-login__block">
								<center><h3 class="kt-login__title"><p>!Haz parte de nosotros!</p></h3></center>
								<br>
								<div class="kt-login__desc">
									<center><img src="{{asset('logos/logo_transparente_semi_blanco.png')}}" width="300"></center>
								</div><br><br><br><br>
							
								<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
							
								<div class="div">
								<h1>
  								<em>T</em>
  								<em>A</em>
  								<em>X</em>
  								<em>T</em>
  								<em class="planet left">O</em>
  								<em class="planet right">O</em>
  								<em>L</em>
							</h1></div>
							</div>
						</div>
					</div>
					
						
					
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->


		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="metronic/assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>







 {{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
