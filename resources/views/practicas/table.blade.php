
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

                    @if( auth()->user()->hasRole('estudiante'))
                    @if($validar1 == 0)
                        <a href="{{route('practicas.create')}}" class="btn btn-success" id="ocultar2">
                            Crear Nueva
                        </a>
                    @endif

                            <input id="valor1" hidden value="{{$validar1}}">
                            <input id="valor2" hidden value="{{$validar2}}">

                    @if($validar2 == 0)
                        <a href="{{route('practicas.create')}}" class="btn btn-success" id="ocultar1">
                            Crear Nueva
                        </a>
                    @endif
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
                    <th>Nombre Estudiante</th>
                    <th>Identificacion</th>
                    <th>Nombre Practica Pedagogica</th>
                    <th>Semestre en que se realiza la practica</th>
                    <th>Diario Revisado</th>
                    <th>producto Revisado</th>
                    <th>Practica Finalizada</th>
                    <th width="300px">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($practica_pedagogicas as $practica_pedagogica)
                    <tr>
                        <td>{{$practica_pedagogica->estudiante->Usuario->first_name}} {{$practica_pedagogica->estudiante->Usuario->last_name}}</td>
                        <td>{{$practica_pedagogica->estudiante->Usuario->identificacion}} </td>
                        <td>{{$practica_pedagogica->practica->nombre}}</td>
                        <td>{{$practica_pedagogica->semestre->nombre}}</td>
                        <td>
                            @if($practica_pedagogica->diario_finalizado == true) Si @endif 
                            @if($practica_pedagogica->diario_finalizado == false) No @endif 
                        </td>

                        <td>
                            @if($practica_pedagogica->producto_finalizado == true) Si @endif 
                            @if($practica_pedagogica->producto_finalizado == false) No @endif 
                        </td>

                        <td>
                            @if($practica_pedagogica->finalizada == true) Si @endif 
                            @if($practica_pedagogica->finalizada == false) No @endif 
                        </td>
                        
                        <td>
                            <div class="btn-group">
                                    @if( auth()->user()->hasRole('estudiante'))
                                        <a type="button" href="{{route('formatos_index',$practica_pedagogica->practica->id)}}" class="btn btn-success btn-sm">
                                        Instrumentos
                                        </a>
                                
                                        <a type="button" href="{{route('diarios.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-danger btn-sm">
                                        Diarios
                                        </a>

                                        <a type="button" href="{{route('productos.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-info btn-sm">
                                        Producto
                                        </a>
                                    @endif

                                    @if( auth()->user()->hasRole('docente'))
                                        @if($practica_pedagogica->diario_finalizado == false)
                                        <a type="button" href="{{route('diarios.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-danger btn-sm">
                                        Revisar Diario
                                        </a>
                                        @endif
                       
                                        @if($practica_pedagogica->diario_finalizado == true)
                                            <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Diario Revisado</span>                              
                                        @endif

                                        @if($practica_pedagogica->producto_finalizado == false)
                                        <a type="button" href="{{route('productos.index',['idPracticaPedagogica' => $practica_pedagogica->id])}}" class="btn btn-info btn-sm">
                                        Revisar Producto 
                                        </a>
                                        @endif

                                        @if($practica_pedagogica->producto_finalizado == true)
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Producto Revisado</span>                               
                                        @endif
                                    
                                    @endif
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

<script type="text/javascript">

$(document).ready( function(){
    
    if($('#valor1' == 0 && '#valor2' == 0))
    {
        $('#ocultar1').hide();
        $('#ocultar2').show();
    }
});
</script>