
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
            <th>Diligenciado</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formatos as $formato)
            <tr> 
                <td>{{$formato->nombre}}</td>
                <td>{{$formato->objetivo}}</td>
                <td>
                    @if($formato->diligenciado == true ) Si @endif
                    @if($formato->diligenciado == false ) No @endif
                </td>
                <td>
                    <div class="btn-group">
                        <a type="button" href="{{route('pdf',[$formato->id, 'estudiante_id' => auth()->user()->estudiante->id])}}" class="btn btn-info btn-sm">
                            Pdf
                        </a>
                        <a type="button" href="" class="btn btn-success btn-sm">
                             Eliminar
                        </a>
                     
                        <a type="button" href="{{route('preguntas_create',$formato->id)}}" class="btn btn-danger btn-sm">
                            llenar
                        </a>  
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div></div></div>