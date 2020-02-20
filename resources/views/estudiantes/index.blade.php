@extends('layouts.metronic')
@section('content')

@include('estudiantes.table')

<script>
  $(document).ready(function() {
    $('#estudiantes').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte Estudiantes'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte Estudiantes',
                exportOptions: {
                    columns: [0,1,2,3,4]
                }
            }
        ]
    } );
} );

</script>
@endsection
