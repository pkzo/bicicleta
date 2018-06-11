@extends('layouts.app')

@section('content')
	<div class="card text-center">
	  <div class="card-header">
	  	<h2><a href="{!! route('bicicletas.index') !!}">Crear Bicicleta</a></h2>
	  </div>
	  <div class="card-body">
	  	@if($bicicletas->isNotEmpty())
	  		<p>Hay datos</p>
	  	@else
	  		<p>No hay datos</p>
		@endif
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
	</div>	
@endsection