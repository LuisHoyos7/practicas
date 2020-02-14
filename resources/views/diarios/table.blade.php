<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Información de Diarios de Campos
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{route('diarios.create',['idPractica'=>$practica])}}" class="btn btn-success">
                        Nuevo Diario
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Fecha de creacion del Diario</th>
                        <th>Practica en proceso</th>
                        <th>Semestre Actual</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practica->diarios as $diario )
                    <tr>
                        <td>{{$diario->fecha}}</td>
                        <td>{{$practica->first()->nombre}}</td>
                        <td>{{$practica->first()->practicaPedagogica->semestre->nombre}}</td>
                    
                        <div class="btn-group">
                            <td>
                                <a href="{{route('diarios.edit', ['idPractica' => $practica->first()->id, $diario->id ])}}" class="btn btn-success">
                                Editar
                                </a>

                                <a href class="btn btn-danger">
                                Pdf
                                </a>
                            </td>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

