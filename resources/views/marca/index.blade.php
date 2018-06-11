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
				      	<form method="put" action="{!! route('marcas.edit', ['id' => $marca->id]) !!}">
				      		<button type="submit" class="btn btn-warning">Actualizar</button>			      		
				      	</form>
				      	
				      	<button type="button" class="btn btn-danger">Eliminar</button>						
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

