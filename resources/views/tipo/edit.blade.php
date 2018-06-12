@extends ('layouts.app')

@section ('content')
<div class="card text-center">
	  <div class="card-header">
	  	<h2>Tipo</h2>
	  </div>
	  <div class="card-body">
	  	<form method="post" action="{!! route('tipos.update', ['id' => $tipo->id]) !!}">
	  		{!! csrf_field() !!}
	  		{!! method_field('PUT') !!}
		  	@include('layouts._formTipo')
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
</div>	
@endsection