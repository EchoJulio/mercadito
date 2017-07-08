<div class="container">
	<div class="well well-lg">
		  <h2><?php
			 if (isset($this->mensaje)){
			 	echo $this->mensaje;
			 }
			 ?></h2>
			 <a href="<?php echo BASE_URL; ?>" class="alert-link">ir al inicio</a> |
			 <a href="javascript:history.back(1)" class="alert-link">volver a la pagina anterior</a> |
			 <a href="<?php echo BASE_URL; ?>/registro" class="alert-link">Registarse</a> |


			<?php 
				if (!Session::get('autenticado')) { ?>
				<a href="<?php echo BASE_URL . 'login'; ?>" class="alert-link">Iniciar Session</a>
				<?php
					
				}
			?>

	</div>

</div>