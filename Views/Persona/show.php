
<div class="container">
	<h2>Lista persona</h2>
	<form class="form-inline" action="?controller=persona&&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="idpersona" name="idpersona" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Idpersona</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Tipo de documento</th>
					<th>Telefono</th>
					<th>Correo electronico</th>
					<th>Direccion</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listapersona as$persona) {?>
					<tr>
						<td> <a href="?controller=persona&&action=updateshow&&idpersona=<?php  echo $persona->getIdpersona()?>"> <?php echo $persona->getIdpersona(); ?></a> </td>
						<td><?php echo $persona->getNombres(); ?></td>
						<td><?php echo $persona->getApellidos(); ?></td>
						<td><?php echo $persona->getTipodocumento(); ?></td>
						<td><?php echo $persona->getTelefono(); ?></td>
						<td><?php echo $persona->getCorreoelectronico(); ?></td>
							<td><?php echo $persona->getDireccion(); ?></td>
						<td><a href="?controller=persona&&action=delete&&idpersona=<?php echo $persona->getIdpersona() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>