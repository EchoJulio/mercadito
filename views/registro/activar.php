<div class="container">
	<h3>Activacion de cuenta</h3>
	<hr>
	<?php if (isset($this->mensaje) && !empty($this->mensaje)): ?>
		<div class="alert alert-dismissible alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Bien!</strong> <?php echo $this->mensaje; ?>
		</div>
	<?php endif ?>

	<?php if (isset($this->errorUsuario) && !empty($this->errorUsuario)): ?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong> <?php echo $this->errorUsuario; ?>
		</div>
	<?php endif ?>

	<?php if (isset($this->errorValidar) && !empty($this->errorValidar)): ?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong> <?php echo $this->errorValidar; ?>
		</div>
	<?php endif ?>

	<?php if (isset($this->errorActivar) && !empty($this->errorActivar)): ?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong> <?php echo $this->errorActivar; ?>
		</div>
	<?php endif ?>


	<a href="<?php echo BASE_URL; ?>">Ir al inicio</a>

	<?php if (!Session::get('autenticado')): ?>
		
		| <a href="<?php echo BASE_URL; ?>login">Iniciar Sesion</a>

	<?php endif ?>
	
</div>