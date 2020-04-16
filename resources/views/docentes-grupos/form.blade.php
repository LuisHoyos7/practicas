<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Asociar Docentes A un Grupo
        </h3>
    </div>
</div>

@if(empty($docente_grupo))
{!! Form::open(['route' => 'docentes-grupos.store']) !!}
@else
{!! Form::model($docente_grupo, ['route' => ['docentes-grupos.update', $docente_grupo->id], 'method' => 'PUT']) !!}
@endif

<div class="row row1">

    <div class="col-md-4">
        <div class="form-group">
            <label for="semestre">Docente</label>
            <div class="kt-input-icon">
                {{Form::select('docente_id', @$docentes  , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-map" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="semestre">Grupos</label>
            <div class="kt-input-icon">
                {{Form::select('grupo_id', @$grupos , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-map" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>

    <div class="col-md-4">
        <label>
            Fecha
        </label>
        <input type="text" class="form-control" name="fecha" readonly value="{{now()}}">
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($docente_grupo) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

