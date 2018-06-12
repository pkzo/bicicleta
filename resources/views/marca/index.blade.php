@extends('layouts.app')

@section('content')

<div class="card text-center">
	  <div class="card-header">
	  	<h2><a href="{!! route('marcas.create') !!}">Crear marca</a></h2>
	  </div>
	  <div class="card-body">
	  	@if($marcas->isNotEmpty())
	  		<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Origen</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($marcas as $marca)
				    <tr>
				      <th scope="row">{!! $marca->id !!}</th>
				      <td>{!! $marca->nombre_marca !!}</td>
				      <td>{!! $marca->origen !!}</td>
				      <td>
				      	<a href="{!! route('marcas.edit', ['id' => $marca->id]) !!}" class="btn btn-warning">Editar</a>

				      	<form method="POST" action="{!! route('marcas.destroy', ['id' => $marca->id]) !!}">
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
	  		<p>No hay marcas registradas aun</p>
		@endif
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
	</div>	
@endsection

