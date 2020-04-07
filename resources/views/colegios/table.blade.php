<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
             Colegios
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{route('colegios.create')}}" class="btn btn-success">
                        Agregar Colegio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover" id="colegios">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nombre Representante</th>
                        <th>Contacto</th>
                        <th>Direccion</th>
                        <th>Mas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colegios as $colegio )
                    <tr>
                        <td>{{$colegio->nombre_colegio}}</td>
                        <td>{{$colegio->nombre_representante}}</td> 
                        <td>{{$colegio->contacto}}</td>   
                        <td>{{$colegio->direccion}}</td>                      
                        <td>
                            <div class="btn-group">
                            <a href="{{route('colegios.edit', $colegio->id)}}" class="btn btn-success btn-sm">
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

