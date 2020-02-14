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
{!! Form::model($diario, ['route' => ['diarios.update', $diario->id], 'method' => 'PUT']) !!}
@endif

<div class="row row1">
    <div class="col-md-4">
        <label>
            Fecha
        </label>
        <input type="text" class="form-control" name="fecha" readonly value="{{now()}}">
    </div>
    <div class="col-md-4">
        <label>
            Semestre en curso
        </label>
        <input type="text" class="form-control"  readonly value="{{$practicas_pedagogicas->semestre->nombre}}">
    </div>
    <div class="col-md-4">
        <label>
            Practica en Curso
        </label>
        <input type="text" class="form-control"  readonly value="{{$practicas_pedagogicas->practica->nombre}}">
    </div>
</div>
<div class="row row1">
	<div class="col-md-6">
        <div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Descripciones
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
				<input type="textarea" id="kt-tinymce-1" name="item" class="tox-target" aria-hidden="true" value="{{@$diario->item}}">                   
                </textarea>
			</div>
		</div>
    </div>

    <div class="col-md-6">
        <div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Analisis
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
            <input type="textarea" id="kt-tinymce-2" name="analisis" class="tox-target" aria-hidden="true" value="{{@$diario->analisis}}">                   
               
			</div>
		</div>
    </div>

    <input name="practica_id" hidden class="form-control" readonly value="{{@$request->idPractica}}">

</div>

<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($diario) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

