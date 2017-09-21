
{if isset($post)}
	<script type="text/javascript" src="{$_layoutParams.root}views/post/js/post.js"></script>
<div class="container">
	<h3>{$titulo}<i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 

		{if isset($mensaje) && !empty($mensaje)}
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			{$mensaje}
			 <a href="{$_layoutParams.root}Perfil/Mis_Anuncios" class="alert-link">Ir a mis Anuncios.</a>
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
							<input class="form-control" type="text" name="title" required=""  maxlength="30" placeholder="Título" value="{$post.title}">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  required="" class="form-control" type="text" name="description" maxlength="200"  placeholder="Descripcíon" value="">{$post.description}</textarea>
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
					</div>	
						<div id="mensaje" class="col-md-6 col-lg-offset-5">	
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
															{if $post.id_subcategory == $subCategoria.id}
																<option selected value='{$subCategoria.id}'>{$subCategoria.title}</option>
															{else}
																<option  value='{$subCategoria.id}'>{$subCategoria.title}</option>
															{/if}
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
										{if $post.id_prividence == $value.id}
											<option selected value="{$value.id}">{$value.title}</option>
										{else}
											<option value="{$value.id}">{$value.title}</option>
										{/if}
											
									{/foreach}
								{/if}
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-2 control-label">Precio:</label>
							<div class="col-md-4">
								<input value="{$post.price}" class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="col-md-12">
								          <div class="radio radio-primary">
								          	<label>
								            {if $post.tipo_moneda == 'RD$'}
								            	<input type="radio" name="moneda"  value="RD$" checked="">
								            {else}
								            	<input type="radio" name="moneda"  value="RD$">
								            {/if}
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
						          	{if $post.tipo_moneda == 'USD$'}
						          		<input type="radio" name="moneda"  value="USD$" checked="" >
						          	{else}
						          		<input type="radio" name="moneda"  value="USD$">
						          	{/if}
						          	USD$
								  </label>
						        </div>
								          
								</div>
							</div>


						</div>
					</div>

					<div class="form-group"  style="margin-bottom: 26px;">

						<div class="col-md-12">
							<label class="col-md-2 control-label">Estado:</label>
							<div class="form-group">
								<div class="col-md-3">
							          <div class="radio radio-primary">
							          	<label>
							           	{if $post.state == 'usado'}
							           		 <input type="radio" name="estado"  value="usado" checked="">
							           	{else}
							           		 <input type="radio" name="estado"  value="usado">
							           	{/if}
							       		Usado
							       		</label>
							          </div>
								</div>
							

								<div class="col-md-3">
								 <div class="radio radio-primary">
								 	 <label>
								    	{if $post.state == 'nuevo'}
								    		<input type="radio" name="estado"  value="nuevo" checked="">
								    	{else}
								    		<input type="radio" name="estado"  value="nuevo">
								    	{/if}
										Nuevo
								  </label>
								 </div>
								</div>

								<div class="col-md-3">							
								  <div class="radio radio-primary">
								  	<label>
								    {if $post.state == 'reparado'}
								    	<input type="radio" name="estado"  value="reparado" checked="">
								    {else}
								    	<input type="radio" name="estado"  value="reparado">
								    {/if}
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
				<div class="panel panel-default">
					<div class="panel-body">
						<h4>Imagenes</h4>
						<div class="form-group">
							<div id="imgList">
			
								{foreach from=$imgs item=value key = key}
										<div class="col-md-2">
												<div class="col-md-12"><img class="img-thumbnail img-min" src="{$_layoutParams.root}public/img/{$value.title}{$value.format}"></div>
												{* <div class="col-md-5"><button type="button" class="close" data-dismiss="alert"><i class="material-icons">delete</i></button></div> *}
												<div class="col-md-5 col-lg-offset-1"><div class="checkbox" title="Eliminar"><label><input  type="checkbox"  name="imgToDelete{$key}" value="{$value.title}{$value.format}"></label></div></div>
											
										</div>
								{/foreach}
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
          <p>{if isset($mensaje)}
          <script type="text/javascript">
              $(document).ready(function(){
              	 $('#myModal').modal('show');
              })

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
	{else}
		<div class="well">
			<h4>No seleccionaste ningun Anuncio.</h4>
		</div>
	{/if}
	
</div>
