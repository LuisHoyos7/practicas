<style>hr{margin: 30px; color: #2d2d2d70; border: 0.5px dotted;}</style>

<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
            Agregar Nuevo Pre Inscripcion
        </h3>
    </div>
</div>

<form  id="guardar_inscripcion" action="{{route('inscripciones.store')}}" method="POST" class="kt-form ignorarform">

{{csrf_field()}}
{{method_field('POST')}}

<div class="row row1">
    <div class="col-md-3">
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <div class="kt-input-icon">
                <input name="nombres" type="text" class="form-control" placeholder="ingrese sus nombres">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-user"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <div class="kt-input-icon">
                <input name="apellidos" type="text" class="form-control" placeholder="ingrese sus apellidos">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-user"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-3">
        
            <label for="tipoidentificacion">Tipo Identificacion</label>
            <div class="kt-input-icon">
                <select name="tipoidentificacion" class="form-control">
                    <option value="CEDULA DE CIUDADANIA" selected>CEDULA DE CIUDADANIA</option> 
                    <option value="TARJETA DE IDENTIDAD" >TARJETA DE IDENTIDAD</option>
                    <option value="CEDULA DE EXTRANJERIA">CEDULA DE EXTRANJERIA</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-profile" style="margin-right:30px"></i></span></span>
            </div>    
        
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="identificacion">Identificacion</label>
            <div class="kt-input-icon">
                <input required name="identificacion" type="text" class="form-control" placeholder="identificacion">
                @if ($errors->has('identificacion'))
					<span class="text-danger">{{ $errors->first('identificacion') }}</span>
				@endif  
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-profile-1"></i></span></span>
            </div>    
        </div>
    </div>
</div><hr>

<div class="row row1">
    <div class="col-md-3">
        <div class="form-group">
            <label for="celular">Celular</label>
            <div class="kt-input-icon">
                <input name="celular" type="text" class="form-control" placeholder="celular">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-phone"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="direccion">direccion</label>
            <div class="kt-input-icon">
                <input name="direccion" type="text" class="form-control" placeholder="direccion">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-placeholder-2"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="correo">correo</label>
            <div class="kt-input-icon">
                <input required name="correo" type="text" class="form-control" placeholder="correo">
                @if ($errors->has('correo'))
					<span class="text-danger">{{ $errors->first('correo') }}</span>
				@endif  
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-multimedia-2"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="semestre">semestre</label>
            <div class="kt-input-icon">
                <select name="semestre" class="form-control">
                    <option value="SEMESTRE 3" selected>SEMESTRE 3</option> 
                    <option value="SEMESTRE 4">SEMESTRE 4</option>
                    <option value="SEMESTRE 5">SEMESTRE 5</option>
                    <option value="SEMESTRE 6">SEMESTRE 6</option> 
                    <option value="SEMESTRE 7">SEMESTRE 7</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-map" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>
</div><hr>

<div class="row row1">
    <div class="col-md-2">
        <div class="form-group">
            <label for="practica">practica</label>
            <div class="kt-input-icon">
                <select name="practica" class="form-control">
                    <option value="PRACTICA PEDAGOGICA INSTITUCIONAL 1" selected>PRACTICA PEDAGOGICA INSTITUCIONAL 1</option> 
                    <option value="PRACTICA PEDAGOGICA INSTITUCIONAL 2">PRACTICA PEDAGOGICA INSTITUCIONAL 2</option>
                    <option value="PRACTICA PEDAGOGICA INSTITUCIONAL 3">PRACTICA PEDAGOGICA INSTITUCIONAL 3</option>
                    <option value="PRACTICA PEDAGOGICA INSTITUCIONAL 4">PRACTICA PEDAGOGICA INSTITUCIONAL 4</option> 
                    <option value="PRACTICA PEDAGOGICA INSTITUCIONAL 5">PRACTICA PEDAGOGICA INSTITUCIONAL 5</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-university" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div> 

    <div class="col-md-2">
        <div class="form-group">
            <label for="sede">sede</label>
            <div class="kt-input-icon">
                <select name="sede" class="form-control">
                    <option value="CENTRAL" selected>CENTRAL</option> 
                    <option value="BERASTEGUI">BERASTEGUI</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-home" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="modalidad">modalidad</label>
            <div class="kt-input-icon">
                <select name="modalidad" class="form-control">
                    <option value="DISTANCIA" selected>DISTANCIA</option> 
                    <option value="PRESENCIAL">PRESENCIAL</option>
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-presentation-1" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="programa">programa</label>
            <div class="kt-input-icon">
                <select name="programa" class="form-control">
                    <option value="CIENCIAS NATURALES" selected>LIC CIENCIAS NATURALES</option> 
                  </select>
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-folder-1" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <div class="kt-input-icon">
                <input name="ciudad" type="text" class="form-control" placeholder="ciudad">
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="flaticon-earth-globe"></i></span></span>
            </div>    
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                Guardar
            </button>
        </center>
    </div>
</div><br>

</form>



