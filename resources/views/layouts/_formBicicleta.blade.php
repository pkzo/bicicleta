<div class="form-group">
	<label for="tamaño_rin">Tamaño Rin</label>
	<input type="text" name="tamaño_rin" class="form-control" id="tamaño_rin" aria-describedby="emailHelp" placeholder="Digita el tamaño del rin" value="{!! $bicicleta->tamaño_rin or old('tamaño_rin') !!}" required>
</div>
<div class="form-group">
	<label for="tamaño_marco">Tamaño Marco</label>
	<input type="text" name="tamaño_marco" value="{!! $bicicleta->tamaño_marco or old('tamaño_marco') !!}" class="form-control" id="tamaño_marco" placeholder="Digita tamaño del marco">
</div>
<div class="form-group">
	<label for="color">Color</label>
	<input type="text" name="color" value="{!! $bicicleta->color or old('color') !!}" class="form-control" id="color" placeholder="Digita el color">
</div>
<div class="form-group">
	<label for="tipo_id">Tipo</label>
	<select class="form-control" id="tipo_id" name="tipo_id">
		@foreach($tipos as $tipo)
			<option value="{!! $tipo->id !!}" {!! $bicicleta->exists ? (($tipo->id == $bicicleta->tipo->id) ? 'selected' : '') : '' !!}>{!! $tipo->nombre !!}</option>
		@endforeach
	</select>
</div>