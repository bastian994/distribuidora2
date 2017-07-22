@extends('tienda.template')

@section('content')
		
		<!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/p2.jpg", "images/p1.jpg", "images/p3.jpg","images/p4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
			<!--/banner-info-->
			   <div class="baner-info">
			      <h3>Tu <span>Distribuidor</span> de <span>Alta</span> Calidad</h3>
				  <h4>Jaime Sepulveda e Hijos Ltda.</h4>
				  <span><img src="images/logo2.png" alt=""></span>
			   </div>
			<!--/banner-ingo-->		
		</div>
    </div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
				<!-- search-jQuery -->
						<script src="js/main.js"></script>
					<!-- //search-jQuery -->
							<script type="text/javascript">
								$(window).load(function() {
									$("#flexiselDemo1").flexisel({
										visibleItems:3,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
								    	responsiveBreakpoints: { 
								    		portrait: { 
								    			changePoint:480,
								    			visibleItems: 1
								    		}, 
								    		landscape: { 
								    			changePoint:640,
								    			visibleItems: 2
								    		},
								    		tablet: { 
								    			changePoint:768,
								    			visibleItems: 2
								    		}
								    	}
								    });
								    
								});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>

			<!-- Horizontal-Tabs-JavaScript -->
						<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default',
									width: 'auto',
									fit: true,
								});
							});
						</script>
					<!-- Horizontal-Tabs-JavaScript -->
					<script src="js/jquery.picEyes.js"></script>
						<script>
							$(function(){
								//picturesEyes($('.demo li'));
								$('.demo li').picEyes();
							});
						</script>
						<!--start-smooth-scrolling-->

		<div class="featured-section" id="projects">
  <div class="container">
		<h3 class="tittle">Nuestros <span>Productos</span></h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="images/c1.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="fur-name">Pieza Jamon</h6>
		                                   	<span>Peso: 10 Kg. Aprox.</span>
		                                   	<span>Marca: SOPRAVAL</span>
		                                   	<span class="fur-money">Precio: $20.000 - $28.000</span>
                               			</div>
                               			<div class="fur2">
			                               	<h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">COMPRAR</a></h6>
			                             </div>
									</div>	
									<span class="five">$24.000 CLP</span>									
							</div></li>
							<li><div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="images/c2.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="fur-name">Pieza Queso Mantecoso</h6>
		                                   	<span>Peso: 9 Kg. Aprox.</span>
		                                   	<span>Marca: San Jorge</span>
		                                   	<span class="fur-money">Precio: $28.000 - $36.000</span>
                               			</div>
                               			<div class="fur2">
			                               	<h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">COMPRAR</a></h6>
			                             </div>
									</div>	
									<span class="five">$32.000 CLP</span>										
							</div></li>
							<li><div class="project-fur">
									<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="images/c3.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="fur-name">Pieza Cecina Pavo</h6>
		                                   	<span>Peso: 12 Kg. Aprox.</span>
		                                   	<span>Marca: PF</span>
		                                   	<span class="fur-money">Precio: $35.000 - $45.000</span>
                               			</div>
                               			<div class="fur2">
			                               	<h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">COMPRAR</a></h6>
			                             </div>
									</div>	
									<span class="five">$40.000 CLP</span>
								</li>
							<li><div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="images/c4.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="fur-name">Pieza Queso Cheedar</h6>
		                                   	<span>Peso: 5 Kg. Aprox.</span>
		                                   	<span>Marca: San Francisco</span>
		                                   	<span class="fur-money">Precio: $15.000 - $21.000</span>
                               			</div>
                               			<div class="fur2">
			                               	<h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">COMPRAR</a></h6>
			                             </div>
									</div>	
									<span class="five">$16.000 CLP</span>										
							</div></li>
					</ul>

		</div>
	</div>
			
		<!--/script-->
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
		 

</body>
</html>
@stop