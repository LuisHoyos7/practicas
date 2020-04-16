<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
             Grupos
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{route('docentes-grupos.create')}}" class="btn btn-success">
                        Agregar Grupo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover" id="grupos-docentes">
                <thead>
                    <tr>
                        <th>Nombre del grupo</th>
                        <th>Docente Asociado</th>
                        <th>Fecha de Creacion</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docente_grupos as $docente_grupo )
                    <tr>
                        
                        <td>{{$docente_grupo->grupo->nombre}}</td>
                        <td>{{$docente_grupo->docente->nombres}}</td>   
                        <td>{{$docente_grupo->fecha}}</td>                 
                        <td>

                            {{ Form::open(['route' => ['docentes-grupos.destroy', $docente_grupo->id], 'method' => 'delete']) }}

                            <div class="btn-group">
                            <a href="{{route('docentes-grupos.edit', $docente_grupo->id)}}" class="btn btn-success btn-sm">
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
            </table>
        </div>
    </div>
</div>

