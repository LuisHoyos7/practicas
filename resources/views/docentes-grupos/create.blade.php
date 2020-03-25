@extends('layouts.metronic')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
				   @include('docentes-grupos.form')
            </div>
        </div>
    </div>
</div>
@endsection