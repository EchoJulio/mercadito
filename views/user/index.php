<!-- Recibimos el parametro titulo enviado desde el controlador -->
<div class="container">
	<h2><?php echo $this->titulo; ?></h2><hr>
	<?php 
		$users = $this->users;

		if (!isset($users) && count($users) == 0) {?>
				<div class="alert alert-dismissible alert-danger">
					  <strong>Oops!</strong> No se encontró ningún usuario registrado aún.
				</div>
		<?php
			
		}else{
	?>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Usuario</th>
				<th>Correo</th>
				<th>Validado</th>
				<th style="text-align: center;">Accion</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				
				foreach ($users as $row => $value) {?>
					<tr>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['user']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td ><?php if($value['validate'] == 1){
						  ?>
						  	<span class="badge">Si</span>
						 <?php 
						}else{
							?>
							<span class="badge">No</span>
						<?php
						}
							?>
						</td>
						<td style="text-align:  center;">
							<a href="<?php echo BASE_URL . 'user/editar/' .  $value['id']; ?>" class="btn btn-warning">Editar</a>
							<a href="<?php echo BASE_URL . 'user/eliminar/' .  $value['id']; ?>" class="btn btn-danger">Borrar</a>
						</td>

					</tr>
					<?php
				}
			}	
			  ?>
			
		</tbody>
	</table>

</div>
