<style>hr{margin: 30px; color: #2d2d2d70; border: 0.5px dotted;}</style>

<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
            Agregar Practicas Pedagogicas
        </h3>
    </div>
</div>

<form  id="guardar_practica" action="{{route('practicas.store')}}" method="POST" class="kt-form ignorarform">

{{csrf_field()}}
{{method_field('POST')}}

<div class="row row1">
    <div class="col-md-3">
        <div class="form-group">
            <label for="semestre">seleccione el semestre</label>
            <div class="kt-input-icon">
                {{Form::select('semestre_id', $semestres , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="
                    flaticon-map" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="practica">seleccione la practica </label>
            <div class="kt-input-icon">
                {{Form::select('practica_id', $practicas , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-university" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div> 

    <div class="col-md-3">
        <div class="form-group">
            <label for="practica">seleccione el docente</label>
            <div class="kt-input-icon">
                {{Form::select('docente_id', $docentes , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-university" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div> 

    <div class="col-md-3">
        <div class="form-group">
            <label for="practica">seleccione la institucion </label>
            <div class="kt-input-icon">
                {{Form::select('colegio_id', $instituciones , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-university" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div> 


    <input style="display:none" name="estudiante_id" type="text" class="form-control" readonly value="{{$estudiante->id}}">

    {{-- <div class="col-md-2">
        <div class="form-group">
            <label for="sede">ingrese la Fecha de Inico</label>
            <div class="kt-input-icon">
                {{Form::select('sede_id', $sedes , null, ['class' => 'form-control kt-selectpicker', 'placeholder' => 'seleccione.'])}}
                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-home" style="margin-right:30px"></i></span></span>
            </div>    
        </div>
    </div> --}}
</div>

<div class="row">
    <div class="col-md-12">
        <center>
            <button class="submit btn btn-success btn-md" >
                Registrar
            </button>
        </center>
    </div>
</div><br>

</form>



