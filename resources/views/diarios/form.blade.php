<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
           Registrar Informacion al Diario de Campo
        </h3>
    </div>
</div>
 
@if(empty($diario))
{!! Form::open(['route' => 'diarios.store']) !!}
@else

@if( auth()->user()->hasRole('docente'))
{!! Form::model($diario, ['route' => ['diarios.aprobarPractica', $diario->id], 'method' => 'PUT']) !!}
@endif

@if( auth()->user()->hasRole('estudiante'))
{!! Form::model($diario, ['route' => ['diarios.update', $diario->id], 'method' => 'PUT']) !!}
@endif

@endif

<div class="row row1">
    <div class="col-md-3">
        <label>
            Fecha
        </label>
        <input type="text" class="form-control" name="fecha" readonly value="{{now()}}">
    </div>
    <div class="col-md-3">
        <label>
            Semestre en curso
        </label>
        <input type="text" class="form-control"  readonly value="{{$practicas_pedagogicas->semestre->nombre}}">
    </div>
    <div class="col-md-3">
        <label>
            Practica en Curso
        </label>
        <input type="text" class="form-control"  readonly value="{{$practicas_pedagogicas->practica->nombre}}">
    </div>
    <div class="col-md-3">
        <label>
            Estudiante
        </label>
        <input type="text" class="form-control"  readonly value="{{$practicas_pedagogicas->estudiante->usuario->first_name}} {{$practicas_pedagogicas->estudiante->usuario->last_name}}">
    </div>
</div>
<div class="row row1">
    <div class="col-md-8 offset-2">
        <div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Analisis / Descripciones / Comentarios / Vivencias
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
            <input type="textarea" id="kt-tinymce-2" name="analisis" class="tox-target" aria-hidden="true" value="{{@$diario->analisis}}">                   
               
			</div>
		</div>
    </div>

    <input name="practica_pedagogicas_id" class="form-control"  hidden value="{{@$request->idPracticaPedagogicas}}">

</div>

@if( auth()->user()->hasRole('estudiante'))
<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($diario) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>
@endif

@if( auth()->user()->hasRole('docente'))

<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-danger btn-md" >
                @if(!empty($diario)) Aprobar
                @endif
            </button>
        </center>
    </div>
</div><br>

@endif

{!! Form::close() !!}

