<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion de Docentes
            </h3>
        </div>

        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{route('docentes.create')}}" class="btn btn-success">
                        Agregar Docente
                    </a>
                </div>
            </div>
        </div>
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="docentes">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Identificacion</th>
                    <th>Identificacion</th>
                    <th>titulo</th>
                    <th>Tipo Docente</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docentes as $docente)
                    <tr>
                        <td>{{$docente->Usuario->last_name}}</td>
                        <td>{{$docente->Usuario->first_name}}</td>
                        <td>{{$docente->tipoidentificacion}}</td>
                        <td>{{$docente->Usuario->identificacion}}</td>
                        <td>{{$docente->titulo}} </td>
                        <td>{{$docente->tipoDocente->nombre}}</td>
                        <td>
                            <div class="btn-group">
                                <a type="button" href="" class="btn btn-success btn-sm">
                                Editar
                                </a>
                                <a type="button" href="" class="btn btn-danger btn-sm">
                                Eliminar
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

