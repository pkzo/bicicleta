@extends ('layouts.app')

@section ('content')
<div class="card text-center">
	  <div class="card-header">
	  	<h2>Bicicleta</h2>
	  </div>
	  <div class="card-body">
	  	<form method="post" action="{!! route('bicicletas.store') !!}">
	  		{!! csrf_field() !!}
		  	@include('layouts._formBicicleta')
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
</div>	
@endsection