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
{!! Form::model($colegio, ['route' => ['colegios.update', $colegio->id], 'method' => 'PUT']) !!}
@endif

<div class="row row1">
	<div class="col-md-6">
        <label>Nombre Colegio</label>
	    <input type="text" class="form-control" name="nombre_colegio" value={{@$colegio->nombre_colegio}}"">
	</div>
	<div class="col-md-6">
        <label>Nombre Rector (Representante Legal)</label>
	    <input type="text" class="form-control" name="nombre_representante" value="{{@$colegio->nombre_representante}}">
	</div>
</div><br>

<div class="row row1">
	<div class="col-md-4">
        <label>Contacto</label>
	    <input type="text" class="form-control" name="contacto" value="{{@$colegio->contacto}}">
	</div>
	<div class="col-md-4">
        <label>Direccion</label>
	    <input type="text" class="form-control" name="direccion" value="{{@$colegio->direccion}}">
	</div>
	<div class="col-md-4">
        <label>Imagen</label>
	    <input type="file" class="form-control" name="imagen">
	</div>
</div><br>
   
<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($colegio) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

