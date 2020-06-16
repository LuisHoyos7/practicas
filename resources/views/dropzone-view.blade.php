
@extends('layouts.metronic')
@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-md-12">
            <h3>Sube las Imagenes que tomaste a lo largo de tus Practicas</h3>
            {!! Form::open([ 'route' => [ 'dropzone.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}
            <div>
                <h3>Agregar Imagenes</h3>
                <input hidden  name="id" value="{{$id}}">
            </div>
            
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="div" style="margin-top:10px">
    <a href="{{route ('productos.index', ['idPracticaPedagogica' => $id2]) }} "class="btn btn-success">
        Terminar
    </a>
</div>

<script defer type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>


@endsection