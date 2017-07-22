@extends('tienda.template')

@section('content')
	<h1>Detaalle del Producto</h1>

	<div class="producto-block">
		<img src="{{ $producto->imagen }}" width="300">
	</div>

	<div class="producto-block">
		<h3>{{ $producto->nombre}}</h3><hr>
		<div class="producto-info">
			<p>{{ $producto->descripcion }}</p>
			<p>Precio: ${{ $producto->precio }}</p>
			<p>
				<a href="#">Comprar</a>
			</p>
		</div>
	</div>
	<p><a href="{{ route('/') }}">Volver</a></p>
@stop