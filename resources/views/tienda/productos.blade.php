@extends('tienda.template')

@section('content')

	 <div class="container">
		<h3 class="tittle">Nuestros <span>Productos</span></h3>
			@foreach ($productos as $producto)
			<h1>
				{{$producto->nombre." - ".$producto->precioProducto }}
				{{$producto->imagen}}
			</h1>
			@endforeach
	</div>
		


	
@stop