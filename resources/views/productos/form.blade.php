<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
           Registrar Informacion al Diario de Campo
        </h3>
    </div>
</div>

@if(empty($producto))
{!! Form::open(['route' => 'productos.store']) !!}
@else
{!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT']) !!}
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
</div><br>

<div class="row row1">
    <div class="col-md-6">
        <label>Titulo</label>
        <textarea name="titulo" class="form-control">{{@$producto->titulo}}</textarea>
    </div>

    <div class="col-md-6">
        <label>Planteamiento del Problema</label>
        <textarea name="problema" class="form-control">{{@$producto->problema}}</textarea>
    </div>
</div>

<div class="row row1">
    <div class="col-md-6">
        <label>Antecedentes</label>
        <textarea name="antecedentes" class="form-control" >{{@$producto->antecedentes}}</textarea>
    </div>

    <div class="col-md-6">
        <label>Justificacion</label>
        <textarea name="justificacion" class="form-control" >{{@$producto->justificacion}}</textarea>
    </div>
</div>

<div class="row row1">
    <div class="col-md-6">
        <label>Marco Teorico</label>
        <textarea name="marco_teorico" class="form-control" >{{@$producto->marco_teorico}}</textarea>
    </div>

    <div class="col-md-6">
        <label>Objetivos</label>
        <textarea name="objetivos" class="form-control">{{@$producto->objetivos}}</textarea>
    </div>
</div>

<div class="row row1">
    <div class="col-md-6">
        <label>Marco Metodologico</label>
        <textarea name="marco_metodologico" class="form-control">{{@$producto->marco_metodologico}}</textarea>
    </div>

    <div class="col-md-6">
        <label>bibliografia</label>
        <textarea name="bibliografia" class="form-control" >{{@$producto->bibliografia}}</textarea>
    </div>
</div>

<input name="practica_pedagogicas_id" class="form-control"  hidden value="{{@$request->idPracticaPedagogicas}}">

<br>
<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                {{empty($producto) ? 'Guardar' : 'Actualizar'}}
            </button>
        </center>
    </div>
</div><br>

{!! Form::close() !!}

