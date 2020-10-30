<div class="container">
	<h2>Actualizar Persona</h2>
	<form action="?controller=persona&&action=update" method="POST">
		<input type="hidden" name="idpersona" value="<?php echo $persona->getIdpersona() ?>" >
		<div class="form-group">
			<label for="text">Documento</label>
			<input type="text" name="idpersona2" id="idpersona2"  disabled="true" class="form-control" value="<?php echo $persona->getIdpersona() ?>">
		</div>
		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $persona->getNombres() ?>">
		</div>
		<div class="form-group">
			<label for="text">Apellidos</label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $persona->getApellidos(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Tipo de documento</label>
			<input type="text" name="tipodocumento" id="tipodocumento" class="form-control" value="<?php echo $persona->getTipodocumento(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Telefono</label>
			<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $persona->getTelefono(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Correo electronico</label>
			<input type="text" name="correoelectronico" id="correoelectronico" class="form-control" value="<?php echo $persona->getCorreolectronico(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Direccion</label>
			<input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $persona->getDireccion(); ?>">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>