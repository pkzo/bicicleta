@extends('layouts.app')

@section('content')
<div class="card text-center">
	  <div class="card-header">
	  	<h2><a href="{!! route('tipos.create') !!}">Crear Tipo</a></h2>
	  </div>
	  <div class="card-body">
	  	@if($tipos->isNotEmpty())
	  		<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Marca</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($tipos as $tipo)
				    <tr>
				      <th scope="row">{!! $tipo->id !!}</th>
				      <td>{!! $tipo->nombre !!}</td>
				      <td>{!! $tipo->descripcion !!}</td>
				      <td>{!! $tipo->marca->nombre_marca !!}</td>
				      <td>
				      	<a href="{!! route('tipos.edit', ['id' => $tipo->id]) !!}" class="btn btn-warning">Editar</a>

				      	<form method="POST" action="{!! route('tipos.destroy', ['id' => $tipo->id]) !!}">
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

