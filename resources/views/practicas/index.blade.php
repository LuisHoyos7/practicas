@extends('layouts.metronic')
@section('content')

@include('practicas.table')

<script>
  $(document).ready(function() {
    $('#practica').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte Practicas'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte Practicas',
                exportOptions: {
                    columns: [0,1,2]
                }
            }
        ]
    } );
} );

</script>

@endsection
