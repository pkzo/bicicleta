@extends('layouts.app')

@section('content')
	<div class="card text-center">
	  <div class="card-header">
	  	<h2><a href="{!! route('bicicletas.create') !!}">Crear Bicicleta</a></h2>
	  </div>
	  <div class="card-body">
	  	@if($bicicletas->isNotEmpty())
	  		<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Tamaño Rin</th>
			      <th scope="col">Tamaño Marco</th>
			      <th scope="col">Color</th>
			      <th scope="col">Tipo</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($bicicletas as $bicicleta)
				    <tr>
				      <th scope="row">{!! $bicicleta->id !!}</th>
				      <td>{!! $bicicleta->tamaño_rin !!}</td>
				      <td>{!! $bicicleta->tamaño_marco !!}</td>
				      <td>{!! $bicicleta->color !!}</td>
				      <td>{!! $bicicleta->tipo->nombre !!}</td>
				      <td>
				      	<a href="{!! route('bicicletas.edit', ['id' => $bicicleta->id]) !!}" class="btn btn-warning">Editar</a>

				      	<form method="POST" action="{!! route('bicicletas.destroy', ['id' => $bicicleta->id]) !!}">
				      		{!! csrf_field() !!}
				      		{!! method_field('DELETE') !!}
				      		<button type="submit" class="btn btn-danger">Eliminar</button>		
				      	</form>
				      </td>
				    </tr>
			    @endforeach			    
			  </tbody>
			</table>
	  	@else
	  		<p>No hay datos</p>
		@endif
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
	</div>	
@endsection