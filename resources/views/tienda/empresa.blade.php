@extends('tienda.template')

@section('content')

<div class="agitsworkw3ls" id="property">

			<div class="col-md-6 agitsworkw3ls-grid ">
       <h3 class="tittle two">¿Quienes <span>Somos</span>?</h3>
				<!-- Tabs -->
				<div class="tabs">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>QUE OFRECEMOS</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>MISION</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>VISION</span></li>
								<div class="clearfix"></div>
							</ul>

							<div class="resp-tabs-container">
								<h3 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>QUE OFRECEMOS</h3><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<p>La distribuidora Jaime Sepulveda e Hijos Ltda. se basa en ofrecer al cliente un distribuidor eficiente de quesos y cecinas, con productos frescos, de excelente calidad y marcas reconocidas para abastecer la demanda de cualquier tipo de negocio que trabaje con este tipo de productos.</p>
									
								</div>
								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>MISION</h3><div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
									<p>La misión de esta pyme en el mercado Chileno es la distribución de quesos y cecinas no dirigiéndose exclusivamente a comerciantes sino que también al público en general logrando un crecimiento sostenido y rentable, líder en la distribución de fiambres de la más alta calidad dejando a disposición de los clientes un distribuidor 24/7 marcando una ventaja competitiva que diferencia a esta pyme de las demás distribuidoras que no se limitaría a una distribución solo en días hábiles, sino que el cliente puede quedarse sin stock en cualquier momento y tener sin problemas una reposición cualquier día de la semana.</p>
									
								</div>
								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>VISION</h3><div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
									<p>La visión que presenta esta pyme es llegar a ser una empresa destacada en el rubro alimenticio, logrando una cobertura nacional inigualable con puntos estratégicos de distribución a lo largo de todo el país y con los estándares de calidad más altos dentro de la industria.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Tabs -->

			</div>

			<div class="col-md-6 agitsworkw3ls-grid-2">
			   <div class="info-imgs">
			         <ul>
					  <li>
						  <div class="gallery-grid1">
								<img src="images/g11.jpg" alt=" " class="img-responsive">
								<div class="p-mask">
										<h4>Todo <span>Quesos</span></h4>
									<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								</div>
							</div>
					  </li>
					   <li>
					     <div class="gallery-grid1">
							<img src="images/g12.jpg" alt=" " class="img-responsive">
							<div class="p-mask">
									<h4>Satisfacción <span>Garantizada</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					   </li>
						<li>
						   <div class="gallery-grid1">
							<img src="images/g21.jpg" alt=" " class="img-responsive">
							<div class="p-mask">
									<h4>Envios <span>a</span> Domicilio</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
						</li>
					    <li>
						  <div class="gallery-grid1">
							<img src="images/g22.jpg" alt=" " class="img-responsive">
							<div class="p-mask">
									<h4>Todo <span>Cecinas</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
						</li>
					 </ul>
			   </div>
				
			</div>
			<div class="clearfix"></div>

			<!--/script-->
		

</div>

<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>

		<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
						});
					});
		</script>
		<script type="text/javascript">
								$(document).ready(function() {
									/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/
									
									$().UItoTop({ easingType: 'easeOutQuart' });
									
								});
		</script>
		<!--end-smooth-scrolling-->
		<script src="js/bootstrap.min.js"></script>


@stop