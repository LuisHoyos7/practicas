<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion registrada en {{$formatopractica->nombre}}
            </h3>
        </div>
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="predio">
            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($preguntas as $pregunta)
                    <tr>
                        <td>¿{{$pregunta->nombre}}?</td>
                        
                        @if($pregunta->preguntaRespuesta->descripcion == null)
                       <td>{{$pregunta->preguntaRespuesta->opcionPregunta->nombre}}</td> 
                        @endif

                         @if($pregunta->preguntaRespuesta->descripcion <> null)
                       <td>{{$pregunta->preguntaRespuesta->descripcion}}</td> 
                        @endif
                        

                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
        {{-- {{$estudiantes->links()}} --}}
    </div>
</div>
</div>

