<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Registrar Colegio
        </h3>
    </div>
</div>

@if(empty($colegio))
{!! Form::open(['route' => 'colegios.store', 'enctype' => 'multipart/form-data']) !!}
@else
{!! Form::model($colegio, ['route' => ['colegios.update', $gcolegio->id], 'method' => 'PUT']) !!}
@endif

<div class="row row1">
	<div class="col-md-6">
        <label>Nombre Colegio</label>
	    <input type="text" class="form-control" name="nombre_colegio">
	</div>
	<div class="col-md-6">
        <label>Nombre Rector (representante)</label>
	    <input type="text" class="form-control" name="nombre_representante">
	</div>
</div><br>

<div class="row row1">
	<div class="col-md-4">
        <label>Contacto</label>
	    <input type="text" class="form-control" name="contacto">
	</div>
	<div class="col-md-4">
        <label>Direccion</label>
	    <input type="text" class="form-control" name="direccion">
	</div>
</div><br>

<div class="row row1">
	<div class="col-md-12">
        <label>Imagen</label>
	    <input type="file" class="form-control" name="imagen">
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

