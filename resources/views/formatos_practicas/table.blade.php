{{-- <div class="kt-portlet ">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Formatos 
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <!--begin::Accordion-->
        <div class="accordion  accordion-toggle-arrow" id="accordionExample4">
            <div class="card">
                <div class="card-header" id="headingOne4">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                        <i class="flaticon2-layers-1"></i> Protocolo 1. Guía de Observación 1. Lectura Inicial, PPI-I
                    </div>
                </div>
                 <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4" style="">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo4">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                        <i class="flaticon2-copy"></i> Protocolo 2. Guía de Observación 2. Lectura del Sector, PPI-I
                </div>
                <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample4" style="">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
        <!--end::Accordion-->
    </div>
</div>
</div> --}}

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
<table class="table table-hover" id="predio">
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
                        <a type="button" href="{{route('formatos.index')}}" class="btn btn-bold btn-label-info btn-sm">
                            Diligenciar
                        </a>
                        <a type="button" href="" class="btn btn-bold btn-label-success btn-sm">
                             Imprimir
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div></div></div>