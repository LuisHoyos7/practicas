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
                    <a href="{{route('grupos.create')}}" class="btn btn-success">
                        Agregar Grupo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover" id="grupos">
                <thead>
                    <tr>
                        <th>Nombre del grupo</th>
                        <th>Fecha de Creacion</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $grupo )
                    <tr>
                        <td>{{$grupo->nombre}}</td>
                        <td>{{$grupo->created_at}}</td>                    
                        <td>
                            <div class="btn-group">
                            <a href="#" class="btn btn-success btn-sm">
                            Editar
                            </a>

                            <a href class="btn btn-danger btn-sm">
                            Eliminar
                            </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

