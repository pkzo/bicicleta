<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre_marca" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Digita el nombre" value="{!! $marca->nombre_marca or old('nombre_marca') !!}" required>
</div>
<div class="form-group">
	<label for="origen">Origen</label>
	<input type="text" name="origen" value="{!! $marca->origen or old('origen') !!}" class="form-control" id="origen" placeholder="Digita el origen de la marca">
</div>