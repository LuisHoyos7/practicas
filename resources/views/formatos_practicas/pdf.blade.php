
<div class="row imagen">
    <img src="./unicor-acreditada5.png"/ width="920px" height="150px">
</div><br><br>

<style>
    .imagen{
        padding-left: 50px;
    }
</style>

@foreach ($encabezado_formatos as $encabezado_formato)

<div class="row">
    @if($encabezado_formato->nombre <> null)
    <div class="col-md-4">
        <span><b>Nombre:</b>{{$encabezado_formato->nombre }}</span>
    </div>
    @endif
    @if($encabezado_formato->fecha <> null)
    <div class="col-md-4">
        <span><b>Fecha:</b> {{$encabezado_formato->fecha }}</span>
    </div>
    @endif
    @if($encabezado_formato->tiempoobservacion <> null)
    <div class="col-md-4">
        <span><b>Tiempo Oberservado:</b> {{$encabezado_formato->tiempoobservacion  }}</span>
    </div>
    @endif
    @if($encabezado_formato->ubicacion <> null)
    <div class="col-md-3">
        <span><b>Ubicacion: </b>{{$encabezado_formato->ubicacion }}</span>
    </div>
    @endif
    @if($encabezado_formato->contexto <> null)
    <div class="col-md-3">
        <span><b>Contexto Obervado:</b> {{$encabezado_formato->contexto }}</span>
    </div>
    @endif
    @if($encabezado_formato->barrio <> null)
    <div class="col-md-3">
        <span><b>Barrio:</b> {{$encabezado_formato->barrio  }}</span>
    </div>
    @endif
    @if($encabezado_formato->institucion <> null)
    <div class="col-md-3">
        <span><b>Institucion:</b> {{$encabezado_formato->institucion  }}</span>
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
                        @if(@$formato_id == 1 )
                        <td>{{$respuesta->descripcion}}</td>
                        @endif
                        @if(empty(@$formato_id))
                        <td>{{$respuesta->nombre}}</td>
                        @endif
                        <td>{{$respuesta->observaciones}}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
        {{-- {{$estudiantes->links()}} --}}
    </div>
</div>
        

