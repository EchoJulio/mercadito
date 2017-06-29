<div class="container">
<h3><?php echo $this->titulo; ?></h3><hr>
	<div class="col-md-10 col-md-offset-2">
		<form class="form-horizontal" id="form-user-registrar" method="post" action="">
		
	<div class="form-group">
    </div>

		<fieldset>
    
    <div class="form-group">

      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if (isset($this->datos['name']) && !empty($this->datos['name'])) echo $this->datos['name'] ?>">
      </div>
      	  <?php
       		if (isset($this->errorNombre) && !empty($this->errorNombre)) { ?>
			  	<div class="col-md-4" >
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->errorNombre; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>
    </div>


	<div class="form-group">
      <label for="usuario" class="col-lg-2 control-label">Usuario:</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if (isset($this->datos['user']) && !empty($this->datos['user'])) echo $this->datos['user'] ?>">
      </div>

       <?php
       		if (isset($this->errorUsuario) && !empty($this->errorUsuario)) { ?>
			  	<div class="col-md-4">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->errorUsuario; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>

    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Correo</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" name="email" placeholder="Correo" value="<?php if (isset($this->datos['email']) && !empty($this->datos['email'])) echo $this->datos['email'] ?>">
      </div>

	 <?php
       		if (isset($this->errorEmail) && !empty($this->errorEmail)) { ?>
			  	<div class="col-md-4">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->errorEmail; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>


    </div>


	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-1">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
    </div>

    
  </fieldset>
  	<input type="hidden" class="form-control" name="id" value="1">
	</form>
		<?php
			// if (isset($this->datos)) {
				//print_r($this->datos);
			//}
		 ?>
	</div>


	
</div>
