<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion de Pre-inscripciones
            </h3>
        </div>
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="inscripciones">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Identificacion</th>
                    <th>Identificacion</th>
                    <th>Practica</th>
                    <th>Semestre</th>
                    <th>sede</th>
                    <th>Inscrito</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscripciones as $inscripcion)
                    <tr>
                        <td>{{$inscripcion->nombres}}</td>
                        <td>{{$inscripcion->apellidos}}</td>
                        <td>{{$inscripcion->tipoidentificacion}}</td>
                        <td>{{$inscripcion->identificacion}}</td>
                        <td>{{$inscripcion->practica}}</td>
                        <td>{{$inscripcion->semestre}}</td>
                        <td>{{$inscripcion->sede}}</td>
                        <td>
                             @if($inscripcion->inscrito == false  ) No @endif
                             @if($inscripcion->inscrito == true  )  Si @endif
                        </td>
                        <td>
                            @if ($inscripcion->inscrito == false)
                            <a type="button" href="{{ route('aprobar_inscripcion', $inscripcion->id) }}" class="btn btn-bold btn-label-success btn-sm">
                                aprobar
                            </a>
                            @endif
                            @if ($inscripcion->inscrito == true)
                            <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Inscrito</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
    </div>
</div>
</div>


