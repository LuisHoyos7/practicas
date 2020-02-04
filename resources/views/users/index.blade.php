@extends('layouts.metronic')

@section('content')

    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <strong> Informacion de los Usuarios </strong>
                    </h3>
                </h3>
            </div>

            @if ( auth()->user()->hasPermission('create_users') )
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <a href="{{route('users.create')}}" class="btn btn-brand btn-elevate btn-pill btn-elevate-air">
                                <i class="flaticon-user-add"></i>
                                Nuevo Usuario
                            </a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5" style="padding-left:50px;">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-8">
                                <select onchange="$(this).parents('form').submit();" id="rownumber" name="rownumber" class="form-control ">
                                        @for ($i = 10; $i <60; $i=$i+10)
                                            <option {{$i==request()->rownumber?"selected":""}} value="{{ $i }}">Mostrar {{ $i }} registros</option>
                                        @endfor
                                </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offset-2 col-md-5">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="search" class="form-control " placeholder="Buscar..." id="search" value="{{ request()->search }}">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn m-btn--pill btn-outline-primary"> <i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="kt-portlet__body ">

                @include('users.table')

            </div>
        </div>
    </div>

@endsection
