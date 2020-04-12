@extends('layouts.metronic')

@section('content')


<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Informacon Sobre {{$colegio->nombre_colegio}}
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-brand" >
				Colegio Asociado
			</a>	
		</div>
    </div>
</div>
<div class="row row1">
 <div class="col-md-4">
	<div class="kt-portlet__body">
		<!--begin::k-widget4-->
		<div class="kt-widget4">
			<div class="kt-widget4__item">
				<div class="kt-widget4__pic kt-widget4__pic--icon">
					<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/files/doc.svg" alt="">  
				</div>				
				<a href="#" class="kt-widget4__title">
					Nombre Institucion: {{$colegio->nombre_colegio}}
				</a>						
				<div class="kt-widget4__tools">
					<a href="#" class="btn btn-clean btn-icon btn-sm">
						<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
					</a>
				</div>				
			</div>

			<div class="kt-widget4__item">
				<div class="kt-widget4__pic kt-widget4__pic--icon">
					<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/files/jpg.svg" alt=""> 
				</div>				 
				<a href="#" class="kt-widget4__title">
					Nombre Representante: {{$colegio->nombre_representante}}
				</a>
				<div class="kt-widget4__tools">
					<a href="#" class="btn btn-clean btn-icon btn-sm">
						<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
					</a>
				</div>				
			</div>

			<div class="kt-widget4__item">
				<div class="kt-widget4__pic kt-widget4__pic--icon">
					<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/files/pdf.svg" alt="">   
				</div>
				<a href="#" class="kt-widget4__title">
					Numero de Contacto: {{$colegio->contacto}}										 	 
				</a>				
				<div class="kt-widget4__tools">
					<a href="#" class="btn btn-clean btn-icon btn-sm">
						<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
					</a>
				</div>				
			</div>

			<div class="kt-widget4__item">
				<div class="kt-widget4__pic kt-widget4__pic--icon">
					<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/files/javascript.svg" alt=""> 
				</div>
				<a href="#" class="kt-widget4__title">
                    Direccion: {{$colegio->direccion}}
                    <img src="uploads/diablos.jpg" width="200px" alt="">
				</a>
							
            </div>
		</div>
		<!--end::Widget 9-->
	</div>
</div>


<div class="col-md-8">

	<img src="{{asset('uploads/'.$colegio->nombre_colegio.'.jpg')}}" width="800px" height="350px">

</div>

</div>
@endsection