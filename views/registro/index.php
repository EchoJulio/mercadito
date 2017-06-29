<div class="container">
	<div class="col-md-8 col-md-offset-2" >
		<div class="well">
			<legend><h3><?php echo $this->titulo; ?></h3></legend>	
		
	<form class="form-horizontal col-lg-offset-1" id="form-user-registrar" method="post" action="">
		
	<div class="form-group">
    	<div class="col-lg-10">
    		<button class="btn btn-default btn-lg btn-block btn-raised" style="background-color: #3B5998; color: #fff;">Registrar con Facebook</button>
    		
    	</div>

    </div>

    <div class="form-group">
    	 <div class="col-md-12"> 
    	 	<?php
       		if (isset($this->mensaje) && !empty($this->mensaje)) { ?>
			  	<div class="col-md-12">
			  		<div class="alert alert-dismissible alert-success" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->mensaje; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>
    	 </div>
    </div>

		<fieldset>
    
    <div class="form-group">

      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="<?php if (isset($this->datos['nombre']) && !empty($this->datos['nombre'])) echo $this->datos['nombre'] ?>">
      </div>
      	  <?php
       		if (isset($this->errorNombre) && !empty($this->errorNombre)) { ?>
			  	<div class="col-md-6" >
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
      <div class="col-lg-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if (isset($this->datos['usuario']) && !empty($this->datos['usuario'])) echo $this->datos['usuario'] ?>">
      </div>

       <?php
       		if (isset($this->errorUsuario) && !empty($this->errorUsuario)) { ?>
			  	<div class="col-md-6">
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
      <div class="col-lg-4">
        <input type="text" class="form-control" name="email" placeholder="Correo" value="<?php if (isset($this->datos['email']) && !empty($this->datos['email'])) echo $this->datos['email'] ?>">
      </div>

	 <?php
       		if (isset($this->errorEmail) && !empty($this->errorEmail)) { ?>
			  	<div class="col-md-6">
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
      <label for="pass" class="col-lg-2 control-label">Contraseña:</label>
      <div class="col-lg-4">
        <input type="password" id="pass" class="form-control" name="pass" placeholder="Contraseña" value="<?php if (isset($this->datos['pass']) && !empty($this->datos['pass'])) echo $this->datos['pass'] ?>">
        

      </div>

		<?php
       		if (isset($this->errorPass) && !empty($this->errorPass)) { ?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->errorPass; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>

    </div>
   
     <div class="form-group">
      <label for="confirmar" class="col-lg-2 control-label">Confirmar:</label>
      <div class="col-lg-4">
        <input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="Confirmar" value="<?php if (isset($this->datos['confirmar']) && !empty($this->datos['confirmar'])) echo $this->datos['confirmar'] ?>">
        

      </div>

		<?php
       		if (isset($this->errorConfirmar) && !empty($this->errorConfirmar)) { ?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger " style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $this->errorConfirmar; ?></strong>
					</div>
			  	</div>

		<?php
			  } 
        ?>

    </div>
	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-1">
        <button type="reset" class="btn btn-raised btn-default">Cancelar</button>
       	<button type="submit" class="btn btn-raised btn-primary">Registrar</button>
      
      </div>
    </div>

    
  </fieldset>
  	<input type="hidden" class="form-control" name="enviar" value="1">
	</form>




				
		</div>


	</div>	
</div>
