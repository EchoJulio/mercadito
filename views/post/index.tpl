<script type="text/javascript" src="{$_layoutParams.root}views/post/js/post.js"></script>
<div class="container">
	<h3>{$titulo}<i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 

		{if isset($mensajeExito) && !empty($mensajeExito)}
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			{$mensajeExito}

			 </div>
		{/if}

	<div class="col-md-12">
		<form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">
			<div class="col-md-6">
				<div class="well">
					<legend>Paso: 1</legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Título:</label>
						<div class="col-lg-10">
							<input class="form-control" type="text" name="title" required=""  maxlength="30" placeholder="Título" value="{if isset($datos.title)}{$dato.title}{/if}">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  required="" class="form-control" type="text" name="description" maxlength="200"  placeholder="Descripcíon" value="{if isset($datos.description)}{$dato.description}{/if}"></textarea>
						</div>
					</div>
					<div class="form-group" style="margin-bottom: 62px;">
						<label for="inputFile" class="col-md-2 control-label">Imagenes</label> 
						<div class="col-md-10">
							<input type="file" id="imagenes" name="imagenes[]" multiple="">
							<div class="input-group">
							    <input type="text" readonly="" class="form-control" placeholder="Selecciona unas cuantas imagenes">
							      <span class="input-group-btn input-group-sm">
							        <button type="button" class="btn btn-fab btn-fab-mini">
							          <i class="material-icons">attach_file</i>
							        </button>
							      </span>
							  </div>

						</div>
						
						{* <div id="mensaje" class="col-md-6 col-lg-offset-5">
							
						</div> *}
						<div class="form-group">
							<div id="imgList" class="col-md-12">
							
							<div id="foto0" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto1" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto2" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto3" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto4" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
						</div>
						</div>
					</div>
					<input type="hidden" name="enviar" value="1">
				</div>
			</div>

			<div class="col-md-6">
				<div class="well">
					<legend>Paso: 2</legend>
					<div class="form-group">
						<label class="col-md-2 control-label">Categoria:</label>
						<div class="col-md-10">
							<select name="subCategory" class="form-control">
								{if isset($categorias)}
									{foreach  from = $categorias item  = value}
											<optgroup label="{$value.categoria}">
													{foreach item = subCategoria from = $subCategorias} 
														{if $value.id == $subCategoria.id_category}
															<option value='{$subCategoria.id}'>{$subCategoria.title}</option>
														{/if}
													{/foreach}
											</optgroup>
									{/foreach}
								{/if}
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Provincias:</label>
						<div class="col-md-10">
							<select name="privince" class="form-control">
								{if isset($provincias)}
									{foreach from = $provincias item =value }

											<option value="{$value.id}">{$value.title}</option>
									{/foreach}
								{/if}
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-2 control-label">Precio:</label>
							<div class="col-md-4">
								<input value="{if isset($datos.price)}{$datos.price}{/if}" class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="col-md-12">
								          <div class="radio radio-primary">
								          	<label>
								            <input type="radio" name="moneda"  value="RD$" checked="">
								       		RD$
								          </label>
								          </div>
									</div>
							        
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">

								<div class="radio radio-primary">
						          <label>
						          <input type="radio" name="moneda"  value="USD$" >USD$
								  </label>
						        </div>
								          
								</div>
							</div>


						</div>
					</div>

					<div class="form-group"  style="margin-bottom: 126px;">

						<div class="col-md-12">
							<label class="col-md-2 control-label">Estado:</label>
							<div class="form-group">
								<div class="col-md-3">
							          <div class="radio radio-primary">
							          	<label>
							            <input type="radio" name="estado"  value="usado" checked="">
							       		Usado
							       		</label>
							          </div>
								</div>
							

								<div class="col-md-3">
								 <div class="radio radio-primary">
								 	 <label>
								    <input type="radio" name="estado"  value="nuevo">
										Nuevo
								  </label>
								 </div>
								</div>

								<div class="col-md-3">							
								  <div class="radio radio-primary">
								  	<label>
								    <input type="radio" name="estado"  value="reparado">
										Reparado	
								  </label>	    
								  </div>   		
								</div>


							</div>
						</div>

										
					</div>



				</div>
			</div>
				<div class="col-md-12">
					<button type="submit"  class="btn btn-raised btn-success">Publicar</button>
				</div>
		
	
		</form>
	
			
		

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
          <p>{if isset($this->mensaje)}
          <script type="text/javascript">
              $('#myModal').modal('show');

          </script>
                {$mensaje}
          {/if}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


