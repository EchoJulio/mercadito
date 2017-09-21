<div class="container">
	<div class="row">
		<div class="col-lg-offset-3 col-md-5">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-offset-1 col-md-10">
						<form class="form-horizontal" method="post">
						<h1>{$titulo}</h1><hr>
						<input type="text" name="enviar" value="1" style="display: none;">
						<div class="form-group">
					      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
					      <div class="col-lg-12">
					        <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="{$user.name}">
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
						      <div class="col-lg-12">
						        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="{$user.user}">
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
						      <div class="col-lg-12">
						        <input type="text" class="form-control" name="telefono" placeholder="809-555-5555" value="{$user.telefono}">
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
							<div class="col-md-12">
								<input type="submit" name="guardar" class="btn btn-raised btn-primary"  value="Guardar Cambios">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container">

  <!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><i class="material-icons" style="color: #ff6736; font-size: 40px;">error</i></h4>
        </div>
        <div class="modal-body">
          <p> {if isset($mensaje)}
          <script type="text/javascript">
             $(document).ready(function(){
                $('#myModal').modal('show');
             })

          </script>
                {$mensaje}
          {/if}
           <a class="alert-link" href="{$_layoutParams.root}perfil/mis_anuncios">Ir a Mis Anuncios</a>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</div>
