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
                    @if($validar == 0)
                    <a href="{{route('diarios.create',['idPracticaPedagogicas'=>$practica_pedagogicas])}}" class="btn btn-success">
                        Nuevo Diario
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover" id="diario">
                <thead>
                    <tr>
                        <th>Fecha de creacion del Diario</th>
                        <th>Semestre Actual</th>
                        <th>Practica en proceso</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practica_pedagogicas->diarios as $diario )
 
                    
                    <tr>
                        <td>{{$diario->fecha}}</td>
                        <td>{{$practica_pedagogicas->semestre->nombre}}</td>
                        <td>{{$practica_pedagogicas->practica->nombre}}</td>
                    
                            {{ Form::open(['route' => ['diarios.destroy', $diario->id], 'method' => 'delete']) }}
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('diario_pdf', $diario->id)}}" class="btn btn-info btn-sm">
                                    Pdf
                                    </a>

                                    <a href="{{route('diarios.edit', $diario->id)}}" class="btn btn-success btn-sm">
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

