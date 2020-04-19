@extends('layouts.metronic')
@section('content')

<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Información Sobre Practicas
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">					
					<a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">					
						Hoy
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">					
						Semana
					</a>
				</li>
			</ul>
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
									Anna Strong
								</a>
								<p class="kt-widget31__text">
									Visual Designer,Google Inc 
								</p>							 		 
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
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
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
								<p class="kt-widget31__text">
									Product Designer, Apple Inc 
								</p>							 		 
							</div>
						</div>

						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>33</span>
									<span>Docentes Activos En el Sistema</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
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
								<p class="kt-widget31__text">
									Web Developer, Facebook Inc 
								</p>							 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>13</span>
									<span>Estudiantes Realizando Practicas</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
						</div>						
					</div>

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic kt-widget4__pic--pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_1.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Wiltor Delton
								</a>
								<p class="kt-widget31__text">
									Project Manager, Amazon Inc 
								</p>							 		 
							</div>
						</div>	
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>45</span>
									<span>Instituciones En Convenios</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
						</div>						
					</div>	

					<div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_6.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Sam Stone
								</a>
								<p class="kt-widget31__text">
									Project Manager, Kilpo Inc 
								</p>							 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>21</span>
									<span>Grupos Activos</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
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
								<p class="kt-widget31__text">
									Product Designer, Apple Inc 
								</p>							 		 
							</div>
						</div>

						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<a href="#" class="kt-widget31__stats">
									<span>33</span>
									<span>Numero De Practicas Finalizadas</span>						    							 
								</a>
								<div class="progress progress-sm">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
						</div>							 
                    </div>
                    <div class="kt-widget31__item">
						<div class="kt-widget31__content">
							<div class="kt-widget31__pic">
								<img src="/metronic/themes/metronic/theme/default/demo3/dist/assets/media/users/100_6.jpg" alt="">    
							</div>
							<div class="kt-widget31__info">
								<a href="#" class="kt-widget31__username">
									Sam Stone
								</a>
								<p class="kt-widget31__text">
									Project Manager, Kilpo Inc 
								</p>							 		 
							</div>
						</div>
						<div class="kt-widget31__content">
							<div class="kt-widget31__progress">
								<div class="kt-widget31__stats">
									<span>21</span>
									<span>Correos Generados Por el Sistema</span>						    							 
								</div>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>	
							<a href="#" class="btn-label-brand btn btn-sm btn-bold">Mas</a>													
						</div>													 
                    </div>
				</div>            
			</div>	
		</div>
	</div>
</div>
@endsection