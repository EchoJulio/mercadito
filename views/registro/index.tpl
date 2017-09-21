<div class="container">
	<div class="col-md-8 col-md-offset-2" >
		<div class="well">
			<legend><h3>{$titulo}</h3></legend>	
		
	<form class="form-horizontal col-lg-offset-1" id="form-user-registrar" method="post" action="">
		
	<div class="form-group">
    	<div class="col-lg-10">
    		<button class="btn btn-default btn-lg btn-block btn-raised" style="background-color: #3B5998; color: #fff;">Registrar con Facebook</button>
    		
    	</div>

    </div>

    <div class="form-group">
    	 <div class="col-md-12"> 
       		{if isset($mensaje) && !empty($mensaje)}
			  	<div class="col-md-12">
			  		<div class="alert alert-dismissible alert-success" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$mensaje}</strong>
					</div>
			  	</div>
			{/if}
    	 </div>
    </div>

    
    <div class="form-group">

      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="{if isset($datos.nombre) && !empty($datos.nombre)}{$datos.nombre}{/if}">
      </div>
       		{if isset($errorNombre) && !empty($errorNombre)}
			  	<div class="col-md-6" >
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$errorNombre}</strong>
					</div>
			  	</div>
			{/if}
    </div>


	<div class="form-group">
      <label for="usuario" class="col-lg-2 control-label">Usuario:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="{if isset($datos.usuario) && !empty($datos.usuario)}{$datos.usuario}{/if}">
      </div>
       		{if isset($errorUsuario) && !empty($errorUsuario)}
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$errorUsuario}</strong>
					</div>
			  	</div>
			{/if}
    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Telefono:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="telefono" placeholder="809-555-5555" value="{if isset($datos.telefono) && !empty($datos.telefono)}{$datos.telefono}{/if}">
      </div>
			{if isset($errorTelefono) && !empty($errorTelefono)}
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$errorTelefono}</strong>
					</div>
			  	</div>
			 {/if}
    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Correo:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="email" placeholder="Correo" value="{if isset($datos.email) && !empty($datos.email)}{$datos.email}{/if}">
      </div>
			{if isset($errorEmail) && !empty($errorEmail)}
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$errorEmail}</strong>
					</div>
			  	</div>
			 {/if}
    </div>
    <div class="form-group">
      <label for="pass" class="col-lg-2 control-label">Contraseña:</label>
      <div class="col-lg-4">
        <input type="password" id="pass" class="form-control" name="pass" placeholder="Contraseña" value="{if isset($datos.pass) && !empty($datos.pass)} {$datos.pass}{/if}">
        

      </div>

       		{if isset($errorPass) && !empty($errorPass)}
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;">{$errorPass}</strong>
					</div>
			  	</div>

			{/if}
    </div>
   
     <div class="form-group">
      <label for="confirmar" class="col-lg-2 control-label">Confirmar:</label>
      <div class="col-lg-4">
        <input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="Confirmar" value="{if isset($datos.confirmar) && !empty($datos.confirmar)}{$datos.confirmar}{/if}">
        

      </div>

       		{if isset($errorConfirmar) && !empty($errorConfirmar)}
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger " style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"> {$errorConfirmar}</strong>
					</div>
			  	</div>
			{/if}
    </div>
	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-1">
        <button type="reset" class="btn btn-raised btn-default">Cancelar</button>
       	<button type="submit" class="btn btn-raised btn-primary">Registrar</button>
      
      </div>
    </div>

    
  	<input type="hidden" class="form-control" name="enviar" value="1">
	</form>




				
		</div>


	</div>	

	
</div>
