<?php if (isset($this->_paginacion)): ?>
<div class="btn-toolbar">
	<div class="btn-group">
		<?php if ($this->_paginacion['primero']): ?>
			 <a  class="btn btn-raised" href="<?php echo $link . $this->_paginacion['primero'] ?>">Inicio</a>
		<?php else: ?>
			<a class="btn btn-raised disabled" href="">Inicio</a>
		<?php endif; ?>	



		<?php if ($this->_paginacion['anterior']): ?>
			<a class="btn btn-raised" href="<?php echo $link . $this->_paginacion['anterior'] ?>">Anterior</a>
		<?php else: ?>
			<a  class="btn btn-raised disabled" href="">Anterior</a>
		<?php endif; ?>	


	<?php for ($i=0; $i < count($this->_paginacion['rango']); $i++) { ?>
			
		<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
			<a class="btn btn-raised" href=""><?php echo $this->_paginacion['rango'][$i]; ?></a>
		<?php else: ?>
			<a class="btn btn-raised" href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>">
				<?php echo $this->_paginacion['rango'][$i]; ?>
			</a>
		<?php endif; ?>	

	<?php } ?>


		<?php if ($this->_paginacion['siguiente']): ?>
			<a class="btn btn-raised" href="<?php echo $link . $this->_paginacion['siguiente'] ?>">Siguiente</a>
		<?php else: ?>
			 <a class="btn btn-raised disabled" href="#">Siguiente</a>
		<?php endif; ?>


		<?php if ($this->_paginacion['ultimo']): ?>
			<a class="btn btn-raised" href="<?php echo $link . $this->_paginacion['ultimo'] ?>">Ultimo</a>
		<?php else: ?>
			<a class="btn btn-raised disabled" href="">Ultimo</a>
		<?php endif; ?>
	</div>	
</div>
<?php endif; ?>