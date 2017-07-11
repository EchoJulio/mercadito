<script type="text/javascript" src="<?php echo BASE_URL; ?>views/post/js/post.js"></script>
<?php

	// echo "<pre>";
	// print_r($_FILES);
	// echo "<br>" . count($_FILES['imagenes']);
	// echo "</pre>";
  ?>
<div class="container">
	<h3><?php echo $this->titulo; ?> <i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 
	<?php
		if (isset($this->mensajeExito) && !empty($this->mensajeExito)) {?>
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			<?php echo $this->mensajeExito; ?>

			 </div>
	<?php
		}
	 ?>

	<div class="col-md-12">
		<form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">
			<div class="col-md-6">
				<div class="well">
					<legend>Paso: 1</legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Título:</label>
						<div class="col-lg-10">
							<input class="form-control" type="text" name="title" required=""  maxlength="30" placeholder="Título" value="<?php if(isset($this->datos['title'])) echo $this->datos['title']; ?>">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  required="" class="form-control" type="text" name="description" maxlength="200"  placeholder="Descripcíon" value="<?php if(isset($this->datos['description'])) echo $this->datos['description']; ?>"></textarea>
						</div>
					</div>
					<div class="form-group" style="margin-bottom: 32px;">
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
						
						<div id="mensaje" class="col-md-6 col-lg-offset-5">
							
						</div>
						<div id="imgList" class="col-md-12">
							
							<div id="foto0" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto1" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto2" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto3" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto4" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
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
								<?php if (isset($this->categorias)): ?>
									<?php $categorias = $this->categorias ?>
									<?php $subCategorias = $this->subCategorias; ?>
									<?php foreach ($categorias as $row => $value): ?>

											<optgroup label="<?php echo $value['categoria']; ?>">
												<?php
													for ($i=0; $i < count($subCategorias); $i++) { 
														if ($value['id'] == $subCategorias[$i]['id_category']) {
															echo "<option value='".$subCategorias[$i]['id']."'>".$subCategorias[$i]['title']."</option>";
														}
													}
												 ?>
											</optgroup>
									<?php endforeach ?>
								<?php endif ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Provincias:</label>
						<div class="col-md-10">
							<select name="privince" class="form-control">
								<?php if (isset($this->provincias)): ?>
									<?php $provincias = $this->provincias ?>
									<?php foreach ($provincias as $row => $value): ?>

											<option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
									<?php endforeach ?>
								<?php endif ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-2 control-label">Precio:</label>
							<div class="col-md-4">
								<input value="<?php if(isset($this->datos['price'])) echo $this->datos['price']; ?>" class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
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
          <p><?php if (isset($this->mensaje)): ?>
          <script type="text/javascript">
              $('#myModal').modal('show');

          </script>
                <?php echo $this->mensaje; ?>
          <?php endif ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
// $("#input-dim-1").fileinput({
//     language: 'es',
//     uploadAsync:true,
//     uploadUrl: false,
//     allowedFileExtensions: ["jpg", "png", "gif"],
//     minImageWidth: 250,
//     minImageHeight: 250,
//     minFileCount: 1,
//     maxFileCount: 5,
//     validateInitialCount: true,
//     showRemove: false,
//     showUpload: false,
//     layoutTemplates: {
//     				actionUpload: '<button style="display:none;" type="button" class="kv-file-upload {uploadClass}" title="{uploadTitle}">{uploadIcon}</button>\n'
//     			}

// });
</script>

