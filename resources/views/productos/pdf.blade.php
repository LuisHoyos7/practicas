<div class="row">
    <img src="./unicor-acreditada5.png"/ width="700px" height="300px">
</div><br>

<table class="table table-hover" >
    <thead>
        <tr>
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

<p><center><h3>Titulo</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->titulo !!}
    </div>
</div>

<p><center><h3>Planteamiento del Problema</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->problema !!}
    </div>
</div>

<p><center><h3>Antecedentes</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->antecedentes !!}
    </div>
</div>

<p><center><h3>Justificacion</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->justificacion !!}
    </div>
</div>

<p><center><h3>Marco Teorico</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->marco_teorico!!}
    </div>
</div>

<p><center><h3>Objetivos</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->objetivos !!}
    </div>
</div>

<p><center><h3>Marco Metodologico</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->marco_metodologico !!}
    </div>
</div>

<p><center><h3>Bibliografia</h3></center></p>
<div class="row">
    <div class="col-md-8 offset-2">
        {!! $producto->bibliografia !!}
    </div>
</div>


<div class="galeria">
    @foreach ($array_uno as $imagen )
        <div class="col-md-6">
            <img src={{asset('/storage/app/public'.$imagen)}}" style="width:700px; padding:20px;">
        </div>
    @endforeach
</div>