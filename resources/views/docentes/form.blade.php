<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
           Registrar Docente
        </h3>
    </div>
</div>

@if(empty($docente))
{!! Form::open(['route' => 'docentes.store']) !!}
@else
{!! Form::model($docente, ['route' => ['docentes.update', $docente->id], 'method' => 'PUT']) !!}
@endif

@if(!empty($docente))
<input hidden name="user_id" value="{{$usuario->id}}">
@endif

<div class="row row1">
    <div class="col-md-4">
        <label>
            Nombre
        </label>
        <input type="text" class="form-control" name="first_name" value="{{@$usuario->first_name}}">
    </div>
    <div class="col-md-4">
        <label>
            Apellidos
        </label>
        <input type="text" class="form-control" name="last_name" value="{{@$usuario->last_name}}">
    </div>
    <div class="col-md-4">
        <label>
            Identificacion
        </label>
        <input type="text" class="form-control"  name="identificacion" value="{{@$usuario->identificacion}}">
    </div>
</div>

<div class="row row1">
    <div class="col-md-5">
        <label for="tipoidentificacion">Tipo Identificacion</label>
            <div class="kt-input-icon">
                <select name="tipoidentificacion" class="form-control" value="">
                    <option value="CEDULA DE CIUDADANIA" selected>CEDULA DE CIUDADANIA</option> 
                    <option value="TARJETA DE IDENTIDAD" >TARJETA DE IDENTIDAD</option>
                    <option value="CEDULA DE EXTRANJERIA">CEDULA DE EXTRANJERIA</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-profile" style="margin-right:30px"></i></span></span>
            </div>    
    </div>
    
    <div class="col-md-3">
        <div class="form-group">
            <label for="celular">Celular</label>
            <div class="kt-input-icon">
                <input name="celular" type="text" class="form-control" placeholder="celular" value="{{@$usuario->telefono}}">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-phone"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="direccion">direccion</label>
            <div class="kt-input-icon">
                <input name="direccion" type="text" class="form-control" placeholder="direccion" value="{{@$usuario->direccion}}">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-placeholder-2"></i></span></span>
            </div>    
        </div>
    </div>
</div>

<div class="row row1">

     <div class="col-md-4">
        <div class="form-group">
            <label for="correo">correo</label>
            <div class="kt-input-icon">
                <input required name="correo" type="text" class="form-control" placeholder="correo" value="{{@$usuario->email}}">
                @if ($errors->has('correo'))
					<span class="text-danger">{{ $errors->first('correo') }}</span>
				@endif  
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-multimedia-2"></i></span></span>
            </div>    
        </div>
    </div>

  <div class="col-md-4">
        <div class="form-group">
            <label for="correo">Ultimo Titulo Obtenido</label>
            <div class="kt-input-icon">
                <input required name="titulo" type="text" class="form-control" placeholder="Escriba" value="{{@$docente->titulo}}">
            </div>    
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group">
            <label for="semestre">tipo Docente</label>
            <div class="kt-input-icon">
                {{Form::select('tipodocente_id', $tipo_docentes , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-map" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($docente) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

