@extends('layouts.metronic')

@section('content')

    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            <strong> Actualizar Usuario </strong>
                        </h3>
                    </h3>
                </div>
            </div>

            @include('partials.errors')

            <!--begin::Form-->
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="kt-form kt-form--label-right">

                {{ csrf_field() }}
                {{ method_field('put') }}

                @include('users.fields')

            </form>

            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>

@endsection
