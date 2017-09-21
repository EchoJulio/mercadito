<div class="container">
	<h3>Activacion de cuenta</h3>
	<hr>
	{if isset($mensaje) && !empty($mensaje)}
		<div class="alert alert-dismissible alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Bien!</strong> {$mensaje}
		</div>
	{/if}

	{if isset($errorUsuario) && !empty($errorUsuario)}
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong> {$errorUsuario}
		</div>
	{/if}

	{if isset($errorValidar) && !empty($errorValidar)}
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong>  {$errorValidar}
		</div>
	{/if}

	 {if isset($this->errorActivar) && !empty($this->errorActivar)}
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong>  {$errorActivar}
		</div>
	
	{/if}

	<a href="<?php echo BASE_URL; ?>">Ir al inicio</a>

	{if !Session::get('autenticado')}
		
		| <a href="{$_layoutParams.root}login">Iniciar Sesion</a>

	{/if}
	
</div>