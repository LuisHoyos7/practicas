{!! Form::open(['route'=>'preguntas_respuestas.store' ,'method' => 'POST']) !!}


<!--inicio formato 1 practica pedagogica 1 -->

@if($formatopractica->id == 1)
<br><br>
<div class="row row1">
    <div class="col-md-6">
        <label><h3>Nombre de Instrumento</h3></label>
        <p>{{$formatopractica->nombre}}</p>
    </div>
    <div class="col-md-6">
        <label><h3>Objetivo</h3></label>
        <p class="text-justify">{{$formatopractica->objetivo}}</p>
    </div>
</div><hr>

<div class="row row1">
    <div class="col-md-12">
        <h3>Informacion Personal</h3>
     </div>
</div>
<div class="row row1">
    <div class="col-md-3">
        <label><b>Observador(a)</b></label>
        <input type="text" class="form-control" readonly value="{{auth()->user()->first_name}} {{auth()->user()->last_name}}">
        <input type="text" name="estudiante_id" hidden class="form-control" readonly value="{{auth()->user()->estudiante->id}}">
    </div>
    <div class="col-md-2">
        <label><b>Fecha de creacion</b></label>
        <input type="text" name="fecha" class="form-control" readonly value="{{now()}} ">
    </div>
    <div class="col-md-2">
        <label><b>ubicacion</b></label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ingrese la ubicacion">
    </div>
    <div class="col-md-3">
        <label><b>Situación observada y contexto</b></label>
        <input type="text" name="contexto" class="form-control" placeholder="Digite la respuesta">
    </div>
    <div class="col-md-2">
        <label><b>Tiempo de observacion</b></label>
        <input type="text" name="tiempoobservacion" class="form-control" placeholder="Ejemplo: 2 horas">
    </div>
</div><br><hr>

<div class="row row1">
    <div class="col-md-12">
        <h3>Cuestionario</h3>
    </div>
</div>

<div class="row row1">
    <div class="col-md-5"><h5>Topicos</h5></div>
    <div class="col-md-4"><h5>Preguntas,comentarios</h5></div>
    <div class="col-md-3"><h5>Observaciones</h5></div>
</div>
@endif

<!--fin  formato 1 practica pedagogica 1 -->

<!--inicio formato 2 practica pedagogica 1 -->
@if($formatopractica->id == 2)
<br><br>
<div class="row row1">
    <div class="col-md-6">
        <label><h3>Nombre de Instrumento</h3></label>
        <p>{{$formatopractica->nombre}}</p>
    </div>
    <div class="col-md-6">
        <label><h3>Objetivo</h3></label>
        <p class="text-justify">{{$formatopractica->objetivo}}</p>
    </div>
</div><hr>

<div class="row row1">
    <div class="col-md-12">
        <h3>Informacion Personal</h3>
     </div>
</div>
<div class="row row1">
    <div class="col-md-3">
        <label><b>Observador(a)</b></label>
        <input type="text" class="form-control" readonly value="{{auth()->user()->first_name}} {{auth()->user()->last_name}}">
        <input type="text" name="estudiante_id" hidden class="form-control" readonly value="{{auth()->user()->estudiante->id}}">
    </div>
    <div class="col-md-2">
        <label><b>Fecha de creacion</b></label>
        <input type="text" name="fecha" class="form-control" readonly value="{{now()}} ">
    </div>
    <div class="col-md-2">
        <label><b>ubicacion</b></label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ingrese la ubicacion">
    </div>
    <div class="col-md-3">
        <label><b>Situación observada y contexto</b></label>
        <input type="text" name="contexto" class="form-control" placeholder="Digite la respuesta">
    </div>
    <div class="col-md-2">
        <label><b>Tiempo de observacion</b></label>
        <input type="text" name="tiempobservacion" class="form-control" placeholder="Ejemplo: 2 horas">
    </div>
</div><br><hr>

<div class="row row1">
    <div class="col-md-2">
        <label><b>Barrio</b></label>
        <input type="text" name="institucion" class="form-control">
    </div>
    <div class="col-md-2">
        <label><b>Institucion</b></label>
        <input type="text" name="barrio" class="form-control">
    </div>
</div>

<div class="row row1">
    <div class="col-md-12">
        <h3>Cuestionario</h3>
    </div>
</div>

<div class="row row1">
    <div class="col-md-5"><h5>Preguntas</h5></div>
    <div class="col-md-4"><h5>Respuestas</h5></div>
    <div class="col-md-3"><h5>Observaciones</h5></div>
</div>
@endif
<!--fin formato 2 practica pedagogica 1 -->





@foreach ($preguntas as $pregunta )

<input type="hidden" name="formato_id" value="{{$pregunta->formato_id}}">

<div class="row row1">

    @if($pregunta->tipo <> 'titulo')
    <div class="col-md-5">
        <input type="text" class="form-control" readonly value="{{$pregunta->nombre}}" >   
    </div>
     @endif

     @if($pregunta->tipo == 'titulo')
      <h5><br>{{$pregunta->nombre}}</h5><br>
   @endif

    @if($pregunta->tipo == 'texto' && $pregunta->tipo <> 'titulo')
        <div class="col-md-4">
            @foreach ($pregunta->opcionesPreguntas as $opcionpregunta )
                <input name="opcionpregunta_id[{{$pregunta->id}}][respuesta]" type="hidden" class="form-control" value="{{$opcionpregunta->id}}">   
                <input name="opcionpregunta_id[{{$pregunta->id}}][descripcion]" type="text" class="form-control" placeholder="{{$opcionpregunta->nombre}}">   
                @endforeach
        </div>
    @elseif($pregunta->tipo <> 'titulo' && $pregunta->tipo == 'multiple')
        <div class="col-md-4">
                @foreach ($pregunta->opcionesPreguntas as $opcionpregunta )
                    <input type="radio" class="form-control" name="opcionpregunta_id[{{$pregunta->id}}][respuesta]" class="form-control " id="" >
                    <option value="{{$opcionpregunta->id}}">{{$opcionpregunta->nombre}}</option>
                @endforeach
            </select>
        </div>
    @endif

@if($pregunta->tipo == 'seleccion' && $pregunta->tipo <> 'titulo')
  <div class="col-md-4">
            <select name="opcionpregunta_id[{{$pregunta->id}}][respuesta]" class="form-control " id="" >
                @foreach ($pregunta->opcionesPreguntas as $opcionpregunta )
                    <option value="{{$opcionpregunta->id}}">{{$opcionpregunta->nombre}}</option>
                @endforeach
            </select>
        </div>
@endif
    

    
    <div class="col-md-3">

     @foreach ($pregunta->observaciones as $observacion )
             <input type="text"  name="observaciones[{{$pregunta->id}}][observacion]" class="form-control" placeholder="{{$observacion->nombre}}">
     @endforeach

    </div>
</div>
@endforeach


<div class="row">
    <div class="col-md-12">
        <center><br>
            <button type="submit" class="btn btn-success btn-md"> Guardar </button>
        </center><br>
   </div>
</div>

{!! Form::close() !!}

