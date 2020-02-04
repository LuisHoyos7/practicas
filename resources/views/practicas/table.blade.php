
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Informacion de Estudiantes
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <a href="{{route('practicas.create')}}" class="btn btn-brand btn-elevate btn-pill btn-elevate-air">
                        <i class="la la-plus"></i>
                        Nuevo
                    </a>
                </div>
            </div>
        </div>
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="predio">
            <thead>
                <tr>
                    <th>Nombre Practica Pedagogica</th>
                    <th>Semestre en que se realiza la practica</th>
                    <th>Estado</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($practica_pedagogicas as $practica_pedagogica)
                    <tr>
                        <td>{{$practica_pedagogica->practica->nombre}}</td>
                        <td>{{$practica_pedagogica->semestre->nombre}}</td>
                        <td></td>
                        
                        <td>
                            <div class="btn-group">
                                <a type="button" href="{{route('formatos_index',$practica_pedagogica->practica->id)}}" class="btn btn-bold btn-label-info btn-sm">
                                    Formatos
                                </a>
                                <a type="button" href="" class="btn btn-bold btn-label-success btn-sm">
                                     Avtividades
                                </a>
                                <a type="button" href="" class="btn btn-bold btn-label-danger btn-sm">
                                    Diarios
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

