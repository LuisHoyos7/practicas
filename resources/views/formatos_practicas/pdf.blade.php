
<div class="row">
    <img src="./unicor-acreditada5.png"/ width="700px" height="280px">
</div>

@foreach ($encabezado_formatos as $encabezado_formato)

<div class="row">
    @if($encabezado_formato->nombre <> null)
    <div class="col-md-4">
        <p>Nombre: {{$encabezado_formato->nombre }}</p>
    </div>
    @endif
    @if($encabezado_formato->fecha <> null)
    <div class="col-md-4">
        <p>Fecha: {{$encabezado_formato->fecha }}</p>
    </div>
    @endif
    @if($encabezado_formato->tiempoobservacion <> null)
    <div class="col-md-4">
        <p>Tiempo Oberservado: {{$encabezado_formato->tiempoobservacion  }}</p>
    </div>
    @endif
    @if($encabezado_formato->ubicacion <> null)
    <div class="col-md-3">
        <p>Ubicacion: {{$encabezado_formato->ubicacion }}</p>
    </div>
    @endif
    @if($encabezado_formato->contexto <> null)
    <div class="col-md-3">
        <p>Fecha: {{$encabezado_formato->contexto }}</p>
    </div>
    @endif
    @if($encabezado_formato->barrio <> null)
    <div class="col-md-3">
        <p>Barrio: {{$encabezado_formato->barrio  }}</p>
    </div>
    @endif
    @if($encabezado_formato->institucion <> null)
    <div class="col-md-3">
        <p>Barrio: {{$encabezado_formato->institucion  }}</p>
    </div>
    @endif
</div><br>
@endforeach

<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="practica">
            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($respuestas as $respuesta)
                    <tr>
                        <td>{{$respuesta->nombre}}</td>
                        <td>{{$respuesta->descripcion}}</td>
                        <td>{{$respuesta->observaciones}}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
        {{-- {{$estudiantes->links()}} --}}
    </div>
</div>
        

