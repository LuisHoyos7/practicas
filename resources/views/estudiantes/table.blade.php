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
        <table class="table table-hover" id="estudiantes">
            <thead>
                <tr>
                    <th>Apellidos</th>
                    <th>Nombres</th>
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
                        
                            {{ Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']) }}

                            <div class="btn-group">
                                @if(auth()->user()->hasRole('estudiante') || auth()->user()->hasRole('docente') )
                                <a type="button" href="{{ route('practicas.index', $estudiante->id) }}" class="btn btn-success btn-sm">
                                    Practicas
                                </a>
                                @endif
                                <a type="button" href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-info btn-sm">
                                     Editar
                                </a>
                                {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}
                           
                            </div>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> <br><br>
        {{-- {{$estudiantes->links()}} --}}
    </div>
</div>
</div>

