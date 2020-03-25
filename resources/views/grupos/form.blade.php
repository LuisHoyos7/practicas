<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Registrar Grupo
        </h3>
    </div>
</div>

@if(empty($grupo))
{!! Form::open(['route' => 'grupos.store']) !!}
@else
{!! Form::model($grupo, ['route' => ['grupos.update', $grupo->id], 'method' => 'PUT']) !!}
@endif

<div class="row row1">
	<div class="col-md-12">
        <label>Nombre de grupo</label>
	    <input type="text" class="form-control" name="nombre">
	</div>
</div><br>
   
<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($grupo) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

