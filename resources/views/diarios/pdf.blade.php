<div class="row">
    <img src="./unicor-acreditada5.png"/ width="700px" height="300px">
</div><br>

<table class="table table-hover" >
    <thead>
        <tr>
            <th>
               Fecha Creacion 
            </th>
            <th>
               Semestre En Curso 
            </th>
            <th>
                Practica 
            </th>
            <th>
                Nombre 
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{$diario->fecha}}
            </td>
            <td>
                {{$practica->semestre->nombre}}
            </td>
            <td>
                {{$practica->practica->nombre}}
            </td>
            <td>
                {{$practica->estudiante->Usuario->first_name}} {{$practica->estudiante->Usuario->last_name}}
            </td>
        </tr>
    </tbody>
</table><br>

<p><center><h3>Analisis / Comentarios / Vivencias</h3></center></p>
<div class="row">
    <div class="col-md-12">
        {!! $diario->analisis !!}
    </div>
</div>