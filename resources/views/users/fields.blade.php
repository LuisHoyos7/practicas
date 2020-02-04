<div class="kt-portlet__body">
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label> No. Identificación: </label>
            <input type="text" name="identificacion" id="identificacion" class="form-control m-input" placeholder="Ingrese el numero de identificación" value="{{ $user->identificacion ?? old('identificacion') }}" >
        </div>
        <div class="col-lg-4">
            <label class=""> Nombres: </label>
            <input type="text" name="first_name" id="first_name" class="form-control m-input" placeholder="Ingrese los nombres" value="{{ $user->first_name ?? old('first_name') }}">
        </div>
        <div class="col-lg-4">
            <label class=""> Apellidos: </label>
            <input type="text" name="last_name" id="last_name" class="form-control m-input" placeholder="Ingrese los apellidos" value="{{ $user->last_name ?? old('last_name') }}">
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label class=""> Telefono: </label>
            <input type="text" name="telefono" id="telefono" class="form-control m-input" placeholder="Ingrese el telefono" value="{{ $user->telefono ?? old('telefono') }}" >
        </div>
        <div class="col-lg-4">
            <label class=""> Direccion: </label>
            <input type="text" name="direccion" id="direccion" class="form-control m-input" placeholder="Ingrese la direccion" value="{{ $user->direccion ?? old('direccion') }}" >
        </div>
        <div class="col-lg-4">
            <label class=""> Email o Usuario: </label>
            <input type="email" name="email" id="email" class="form-control m-input" placeholder="Ingrese el usuario o email" value="{{ $user->email ?? old('email') }}">
        </div>
    </div>
    @empty($user)
        <div class="form-group m-form__group row">
            <div class="col-lg-4">
                <label class=""> Contraseña: </label>
                <input type="password" name="password" id="password" class="form-control m-input" placeholder="Ingrese la contraseña">
            </div>
            <div class="col-lg-4">
                <label class=""> Confirme la Contraseña: </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control m-input" placeholder="Ingrese la contraseña">
            </div>
        </div>
    @endempty
    <div class="form-group m-form__group row">
        <div class="col-lg-12">
            <label> Rol: </label>
            <div class="m-radio-inline ">
                @foreach ($Roles as $Rol)
                    <label class="kt-radio kt-radio--bold kt-radio--success">
                        @php $usr = empty($user)?'':$user->roles->first()->name; @endphp
                        <input type="radio" name="rol" {{ $usr == $Rol->name ? 'checked' : '' }} value="{{ $Rol->name }}"> {{ $Rol->display_name }}
                        <span></span>
                    </label>
                    &nbsp; &nbsp;
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary"> Cancelar </a>
            </div>
            <div class="col-lg-6 kt-align-right">
                <button type="reset" class="btn btn-danger">Limipiar Formulario</button>
            </div>
        </div>
    </div>
</div>
