<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Información de Productos finales de Practicas
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    @if($validar == 0)
                    <a href="{{route('productos.create',['idPracticaPedagogicas'=>$practica_pedagogicas])}}" class="btn btn-success">
                        Nuevo Producto
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="kt-portlet__body row1">
            <table class="table table-hover" id="producto">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Planteamiento del problema</th>
                        <th>antecedentes</th>
                        <th>Justitificacion</th>
                        <th>Marco teorico</th>
                        <th>Objetivos</th>
                        <th>Marco Metodologico</th>
                        <th>Bibliografia</th>
                        <th>Observaciones</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practica_pedagogicas->productos as $producto )
 
                    
                    <tr>
                        <td>{{$producto->titulo}}</td>
                        <td>{{$producto->problema}}</td>
                        <td>{{$producto->antecedentes}}</td>
                        <td>{{$producto->justificacion}}</td>
                        <td>{{$producto->marco_teorico}}</td>
                        <td>{{$producto->objetivos}}</td>
                        <td>{{$producto->marco_metodologico}}</td>
                        <td>{{$producto->bibliografia}}</td>
                        <td>{{$producto->observaciones}}</td>

        
                            {{ Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) }}
                            <td>
                                <div class="btn-group">
                                    @if( auth()->user()->hasRole('estudiante'))
                                    <a href="{{route('producto_pdf', $producto->id)}}" class="btn btn-info btn-sm">
                                    Pdf
                                    </a>

                                    <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-success btn-sm">
                                    Editar
                                    </a>

                                    {{ Form::button('<i class="la la-trash"></i>',
                                    [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-sm',
                                        'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                    ]) }}

                                    @endif

                                     @if( auth()->user()->hasRole('docente'))
                                    <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-success btn-sm">
                                    Revisar
                                    </a>
                                    @endif
                           
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

