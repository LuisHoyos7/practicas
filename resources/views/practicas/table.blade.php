
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
                    @if(!empty($validar_practicas))
                     
                            <a href="{{route('practicas.create')}}" class="btn btn-success">
                                Crear Nueva
                            </a>
                      
                    @endif
                </div>
            </div>
        </div>
       
    </div>
<div class="row">      
    <div class="kt-portlet__body row1">
        <table class="table table-hover" id="practica">
            <thead>
                <tr>
                    <th>Nombre Practica Pedagogica</th>
                    <th>Semestre en que se realiza la practica</th>
                    <th>Finalizada</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($practica_pedagogicas as $practica_pedagogica)
                    <tr>
                        <td>{{$practica_pedagogica->practica->nombre}}</td>
                        <td>{{$practica_pedagogica->semestre->nombre}}</td>
                        <td>
                            @if($practica_pedagogica->finalizada == true) Si @endif 
                            @if($practica_pedagogica->finalizada == false) No @endif 
                        </td>
                        
                        <td>
                            <div class="btn-group">
                                <a type="button" href="{{route('formatos_index',$practica_pedagogica->practica->id)}}" class="btn btn-success btn-sm">
                                    Instrumentos
                                </a>
                                <a type="button" href="{{route('diarios.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-danger btn-sm">
                                    Diarios
                               </a>

                               <a type="button" href="{{route('productos.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-info btn-sm">
                                    Producto
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

