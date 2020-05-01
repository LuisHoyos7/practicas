@extends('layouts.metronic')
@section('content')

<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Información Sobre Practicas
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget31_tab1_content">
				<div class="kt-widget31">
					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_4.jpg" alt="">   
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Estudiantes Pre-inscritos
								</a>							 		 
							</div>					 
						</div>

						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
                                    <span>{{$inscripciones}}</span>
									<span>Estudiantes Pre-Inscritos</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-brand" role="progressbar" style="width: {{$inscripciones}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>						
					</div>

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_14.jpg" alt="">      
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Docentes Activos En el Sistema
								</a>							 		 
							</div>
						</div>

						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>{{$docentes}}</span>
									<span>Docentes Activos En el Sistema</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-warning" role="progressbar" style="width:{{$docentes}}%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>							 
					</div>

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic kt-widget4__pic--pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_11.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Estudiantes Realizando Practicas
								</a>						 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>{{$practicas_activas}}</span>
									<span>Estudiantes Realizando Practicas</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info" role="progressbar" style="width: {{$practicas_activas}}%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>						
					</div>

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic kt-widget4__pic--pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_1.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Instituciones en convenios
								</a>							 		 
							</div>
						</div>	
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>{{$instituciones}}</span>
									<span>Instituciones En Convenios</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger" role="progressbar" style="width:{{$instituciones}}%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>						
					</div>	

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_6.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Grupos Activos
								</a>							 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>{{$grupos}}</span>
									<span>Grupos Activos</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success" role="progressbar" style="width:{{$grupos}}%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>													 
                    </div>
                    <div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_14.jpg" alt="">      
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Practicas Finalizadas
								</a>							 		 
							</div>
						</div>

						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>{{$practicas_finalizadas}}</span>
									<span>Numero De Practicas Finalizadas</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-warning" role="progressbar" style="width:{{$practicas_finalizadas}}%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>							 
                    </div>
                    <div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_6.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Correos Generados Por el Sistema
								</a>
								<p class="kt-widget31__text">							 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>{{$correos}}</span>
									<span>Correos Generados Por el Sistema</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success" role="progressbar" style="width: {{$correos}}%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
						</div>													 
                    </div>
				</div>            
			</div>	
		</div>
	</div>
</div>
@endsection