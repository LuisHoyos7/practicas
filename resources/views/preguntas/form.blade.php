{!! Form::open(['route'=>'preguntas_respuestas.store' ,'method' => 'POST']) !!}

@foreach ($preguntas as $pregunta )

<input type="hidden" name="formato_id" value="{{$pregunta->formato_id}}">

<div class="row row1">
    <div class="col-md-6">
        <input type="text" class="form-control" readonly value="{{$pregunta->nombre}}" >   
    </div>

    @if($pregunta->tipo == 'texto')
        <div class="col-md-6">
            @foreach ($pregunta->opcionesPreguntas as $opcionpregunta )
                <input name="opcionpregunta_id[{{$pregunta->id}}][respuesta]" type="hidden" class="form-control" value="{{$opcionpregunta->id}}">   
                <input name="opcionpregunta_id[{{$pregunta->id}}][descripcion]" type="text" class="form-control" placeholder="{{$opcionpregunta->nombre}}">   
                @endforeach
        </div>
    @else 
        <div class="col-md-6">
            <select name="opcionpregunta_id[{{$pregunta->id}}][respuesta]" class="form-control " id="" >
                @foreach ($pregunta->opcionesPreguntas as $opcionpregunta )
                    <option value="{{$opcionpregunta->id}}">{{$opcionpregunta->nombre}}</option>
                @endforeach
            </select>
        </div>
    @endif
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

