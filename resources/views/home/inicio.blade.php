@extends('home.navbar')

@section('contentInicio')
<style>
    body{
        background: linear-gradient(180deg,##21f63daf,#395177);
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#637bff)) fixed; */
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#395177)) fixed; */
        background: -webkit-gradient(linear, left top, left bottom, from(#21f63daf), to(#395177)) fixed;

    }
    .contdiv{
        background-color:transparent;
        box-shadow: 0px 0px 0px 0px rgba(82, 63, 105, 0.0);
    }
    .tw-text-white {
        color: #fff;
        text-align: center;
    }
    .img-center{
        display: block;
        margin: auto;
    }
    .link1{
        background-color: #304260;
        width: 120px;
        height: 120px;
        border-radius: 10px;
        display: inline;
        float: left;
        margin-right: 10px;
    }
    .link1:hover{
        transition-property: opacity, left, top, height;
        transition-duration: 3s, 5s, 3s, 5s;
        background: linear-gradient(180deg,#25c2f6,#528efc);
    }

</style>
{{-- <div class="row">
    <div class="contenedor1" class="col-md-4">
       <img src= "{{asset ('/logos/logo_transparente_semi_blanco.png') }}"  style="margin-left:50px" width="500px">
    </div>

    <div class="contenedor col-md-8">
        <div id="titulo" class="primary phone:tw-pt-0 tw-text-white">
            <h1 style="font-size:40px;" class="tw-text-white tw-text-3xl tw-mb-4">
                Bienvenido al sistema de pagos de Impuestos Municipales
            </h1>
            <div style="font-size:20px;" id="titulo2" class="tw-text-transparent-75 tw-mb-8 tw-pb-4 generic-content tw-leading-normal xl:tw-pr-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores reiciendis, sunt veritatis dolor eveniet voluptates, porro autem nam aliquid fugiat dolorum reprehenderit officia tenetur culpa obcaecati quo quas vel illo.
            </div>
            <div class="link1">
        <img src= "{{asset ('/logos/1.svg') }}"  style="color:white;" width="180px">
      </div>
      <div class="link1">

       </div>
       <div class="link1">

       </div>
       <div class="link1">

       </div>
    </div>



    </div>
</div> --}}
<br><br><br><br><br>
<div class="row">
    <div class="col-lg-5">
        <!--begin::Portlet-->
        <div class="kt-portlet contdiv">
            {{-- <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                </div>
            </div> --}}
            <div class="kt-portlet__body  ">
                <img src="{{asset ('/logos/logo_transparente.png') }}" class="img-center" style="margin-top:0%; " width="80%">
            </div>
            {{-- <div class="kt-portlet__foot">
                <div class="row align-items-center">
                </div>
            </div> --}}
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-lg-7">
        <!--begin::Portlet-->
        <div class="kt-portlet contdiv">
            {{-- <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                </div>
            </div> --}}
            <div class="kt-portlet__body">

                <div class="primary phone:tw-pt-0 tw-text-white">
                    <h1 class="tw-text-white tw-text-3xl tw-mb-4">
                        Practicas Pedagogicas
                    </h1>
                </div>

                <div class="row img-center">
                    <div class="iconholder">
                        <a href=""><span class="svg-icon flat-line" id="line-screen"><h3 class="tw-text-white tw-text-3xl tw-mb-4">  NATURALES </h3></span></a>
                    </div>
                </div>

            </div>
            {{-- <div class="kt-portlet__foot">
                <div class="row align-items-center">
                </div>
            </div> --}}
        </div>
        <!--end::Portlet-->
    </div>
</div>

@endsection
