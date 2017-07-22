@extends('tienda.template')

@section('content')

<!-- contact -->
	<div id="contacto" class="contacto">
		<div class="container"> 
			<div class="w3l-heading">
				<div></div>
				<h3 class="tittle three">Contacto <span>!</span></h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="contacto-row agileits-w3layouts">  
				<div class="col-md-6 col-sm-6 contacto-w3lsleft">
					<div class="contacto-grid agileits">
						<h4>ESCRIBENOS</h4>
						<form action="#" method="post"> 
							<input type="text" name="Name" placeholder="Nombre" required="">
							<input type="email" name="Email" placeholder="Correo" required=""> 
							<input type="text" name="Phone Number" placeholder="Telefono" required="">
							<textarea name="Message" placeholder="Mensaje..." required=""></textarea>
							<input type="submit" value="ENVIAR" >
						</form> 
					</div>
				</div>
				<div class="col-md-6 col-sm-6 contacto-w3lsright">
					<div class="address-row w3-agileits">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Correo</h5>
							<p><a href="mailto:contacto@distribuidorajsh.cl"> contacto@distribuidorajsh.cl</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Llamanos</h5>
							<p>(+56) 9 8811 0038</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>	
	</div>

@stop