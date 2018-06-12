<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Digita el nombre" value="{!! $tipo->nombre or old('nombre') !!}" required>
</div>
<div class="form-group">
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" value="{!! $tipo->descripcion or old('descripcion') !!}" class="form-control" id="descripcion" placeholder="Digita la descripcion del tipo de bicicleta">
</div>
<div class="form-group">
	<label for="marca_id">Marca</label>
	<select class="form-control" id="marca_id" name="marca_id">
		@foreach($marcas as $marca)
			<option value="{!! $marca->id !!}" {!! $tipo->exists ? (($marca->id == $tipo->marca->id) ? 'selected' : '') : '' !!}>{!! $marca->nombre_marca !!}</option>
		@endforeach
	</select>
</div>