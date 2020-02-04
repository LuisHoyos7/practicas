<!---  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --->
<div class="kt-login__signup">
	<div class="kt-login__head">
		<h3 class="kt-login__title">Sign Up</h3>
		<div class="kt-login__desc">Enter your details to create your account:</div>
	</div>
	<div class="kt-login__form">
		<form class="kt-form" action="">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Fullname" name="fullname">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" placeholder="Password" name="password">
			</div>
			<div class="form-group">
				<input class="form-control form-control-last" type="password" placeholder="Confirm Password" name="rpassword">
			</div>
			<div class="kt-login__extra">
				<label class="kt-checkbox">
					<input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
					<span></span>
				</label>
			</div>
			<div class="kt-login__actions">
				<button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign Up</button>
				<button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
			</div>
		</form>
	</div>
</div>
