@extends('layouts.metronic')
@section('content')

@include('formatos_practicas.table')

<script>
  $(document).ready(function() {
    $('#formato').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte Formatos'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte Formatos',
                exportOptions: {
                    columns: [0,1,2]
                }
            }
        ]
    } );
} );

</script>


@endsection
