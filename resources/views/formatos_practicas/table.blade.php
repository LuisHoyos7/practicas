
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion de Formatos
            </h3>
        </div>
    </div>
   
<div class="row">      
    <div class="kt-portlet__body row1">
<table class="table table-hover" id="formato">
    <thead>
        <tr>
            <th>Nombre Formato</th>
            <th>Objetivo</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formatos as $formato)
            <tr> 
                <td>{{$formato->nombre}}</td>
                <td>{{$formato->objetivo}}</td>
                <td>
                    <div class="btn-group">
                        @if($formato->id == 1 && $validar1 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>
                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 2 && $validar2 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 3 && $validar3 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 4 && $validar4 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 5 && $validar5 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 6 && $validar6 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 7 && $validar7 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif

                        @if($formato->id == 8 && $validar8 > 0)
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>

                        {{ Form::open(['route' => ['preguntas_respuestas.destroy', $formato->id], 'method' => 'delete']) }}

                        {{ Form::button('<i class="la la-trash"></i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"
                                ]) }}

                         {{ Form::close() }}
                        @endif
                                 
                        @if($formato->id == 1 && $validar1 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 2 && $validar2 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 3 && $validar3 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 4 && $validar4 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 5 && $validar5 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 6 && $validar6 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 7 && $validar7 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                        @if($formato->id == 8 && $validar8 == 0)
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-success btn-sm">
                            llenar
                        </a>  
                        @endif

                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div></div></div>