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
												<button type="submit" class=" btn btn-brand btn-pill btn-elevate ">
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
						
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background: linear-gradient(180deg,#21c8f6,#395177)">
						<div class="kt-login__section">
							<div class="kt-login__block">
								<center><h3 class="kt-login__title"><p>Sistema de Practicas pedagogicas</p></h3></center>
								<br>
								<div class="kt-login__desc">
									<center><img src="{{asset('logos/logo_transparente.png')}}" width="150"></center>
								</div><br><br><br><br>
							
								<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
							

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
