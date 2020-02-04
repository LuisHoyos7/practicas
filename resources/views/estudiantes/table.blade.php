<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion de Estudiantes
            </h3>
        </div>
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="predio">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Identificacion</th>
                    <th>Identificacion</th>
                    <th>Semestre</th>
                    <th>Practica</th>
                    <th>sede</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->Usuario->last_name}}</td>
                        <td>{{$estudiante->Usuario->first_name}}</td>
                        <td>{{$estudiante->tipoidentificacion}}</td>
                        <td>{{$estudiante->Usuario->identificacion}}</td>
                        <td>{{$estudiante->semestre}} </td>
                        <td>{{$estudiante->practica}}</td>
                        <td>{{$estudiante->sede}}</td>
                        <td>
                            <div class="btn-group">
                                <a type="button" href="{{ route('practicas.index', $estudiante->id) }}" class="btn btn-bold btn-label-info btn-sm">
                                    Practicas
                                </a>
                                <a type="button" href="{{ route('aprobar_inscripcion', $estudiante->id) }}" class="btn btn-bold btn-label-success btn-sm">
                                     Editar
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
        {{-- {{$estudiantes->links()}} --}}
    </div>
</div>
</div>

