
<div class="container">
	<h3><?php echo $this->titulo; ?> <i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 
	<?php
		if (isset($this->mensaje) && !empty($this->mensaje)) {?>
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			<?php echo $this->mensaje; ?>

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
							<input class="form-control" type="text" name="title" required="" maxlength="30" placeholder="Título">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  class="form-control" type="text" name="description" maxlength="200" required=""  placeholder="Descripcíon"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputFile" class="col-md-2 control-label">Imagenes</label> 
						<div class="col-md-9">
							<input type="text" readonly="" class="form-control" style="margin-bottom: 15px;" placeholder="Seleciona un par de imagenes">
							<input type="file" name="imagenes[]" id="inputFile" multiple="">
						</div>
						
						
					</div>
					
					<input type="hidden" name="enviar" value="1">
				</div>
			</div>

			<div class="col-md-6">
				<div class="well" >
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
								<input class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
								          <label>
								            <input type="radio" name="moneda"  value="RD$" checked="">
								       		RD$
								          </label>
									</div>
							        
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
								          <label>
								            <input type="radio" name="moneda"  value="USD$" >
								       		USD$
								          </label>
								</div>
							</div>


						</div>
					</div>

					<div class="form-group">

						<div class="col-md-12">
							<label class="col-md-2 control-label">Estado:</label>
							<div class="form-group">
								<div class="col-md-3">
							          <label>
							            <input type="radio" name="estado"  value="usado" checked="">
							       		Usado
							       		</label>
								</div>
							

								<div class="col-md-3">
								  <label>
								    <input type="radio" name="estado"  value="nuevo">
										Nuevo
								  </label>
								</div>

								<div class="col-md-3">							
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
			<div class="col-md-12">
				<button type="submit"  class="btn btn-raised btn-success">Publicar</button>
			</div>
	
		</form>
	
			
		

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

