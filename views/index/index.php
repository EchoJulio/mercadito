<!-- Recibimos el parametro titulo enviado desde el controlador -->
<?php
	// echo "<pre>";
	// 	print_r($this->categorias);
	// echo "</pre>";
  ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<H2>Categorias...<i class="material-icons" style="font-size: 40px; "></i></H2><hr>
		</div>
		
	</div>

	<div class="row">
		<?php if (isset($this->categorias) && isset($this->subCategorias)): ?>
					<?php $categorias = $this->categorias; ?>
					<?php $subCategorias = $this->subCategorias; ?>
					

					<div class="col-md-4">
						
						<div class="well" style="height: 250px;">
								<div class="col-md-12 col-lg-offset-4">
								<i class="material-icons" style="color: #03a9f4; font-size: 60px;"> <?php echo $categorias[8]['icon']; ?> </i>
									
								</div>
								
								<div class="col-md-12">
									<a href="<?php echo BASE_URL; ?>categoria/index/<?php echo $categorias[8]['categoria']; ?>" style="color: #000; "><h4><?php echo $categorias[8]['categoria']; ?></h4></a>
									<div class="list-group">
									<?php
										for ($i=0; $i < count($subCategorias) ; $i++) { 
											if ($categorias[8]['id'] == $subCategorias[$i]['id_category']) {?>
												
												<a  style="color: #000; " href="<?php echo BASE_URL; ?>categoria/index/<?php echo str_replace(" ","_",$subCategorias[$i]['title']); ?>"><div class="row-content"><i class="material-icons">chevron_right</i><?php echo $subCategorias[$i]['title']; ?></div></a>
											<?php
											}
										}
									 ?>

									</div>
								</div>
						</div>
						
					</div>

					<div class="col-md-4">
						
						<div class="well" style="height: 250px;">
								<div class="col-md-12 col-lg-offset-4">

								<i class="material-icons" style="color: #03a9f4; font-size: 60px;"> <?php echo $categorias[7]['icon']; ?> </i>
									
								</div>
								
								<div class="col-md-12">
								<a href="<?php echo BASE_URL; ?>categoria/index/<?php echo $categorias[7]['categoria']; ?>" style="color: #000; "><h4><?php echo $categorias[7]['categoria']; ?></h4></a>
									<div class="list-group">
									<?php
										for ($i=0; $i < count($subCategorias) ; $i++) { 
											if ($categorias[7]['id'] == $subCategorias[$i]['id_category']) {?>
												
												<a  style="color: #000; " href="<?php echo BASE_URL; ?>categoria/index/<?php echo  str_replace(" ","_",$subCategorias[$i]['title']); ?>"><div class="row-content"><i class="material-icons">chevron_right</i><?php echo $subCategorias[$i]['title']; ?></div></a>
											<?php
											}
										}
									 ?>

									</div>
								</div>
						</div>
						
					</div>

					<div class="col-md-4">
						
						<div class="well" style="height: 250px;">
								<div class="col-md-12 col-lg-offset-4">
								<i class="material-icons" style="color: #03a9f4; font-size: 60px;"> <?php echo $categorias[6]['icon']; ?> </i>
									
								</div>
								
								<div class="col-md-12">
									<a href="<?php echo BASE_URL; ?>categoria/index/<?php echo $categorias[6]['categoria']; ?>" style="color: #000; "><h4><?php echo $categorias[6]['categoria']; ?></h4></a>
									<div class="list-group">
									<?php
										for ($i=0; $i < count($subCategorias) ; $i++) { 
											if ($categorias[6]['id'] == $subCategorias[$i]['id_category']) {?>
												
												<a  style="color: #000; " href="<?php echo BASE_URL; ?>categoria/index/<?php echo str_replace(" ","_",$subCategorias[$i]['title']); ?>"><div class="row-content"><i class="material-icons">chevron_right</i><?php echo $subCategorias[$i]['title']; ?></div></a>
											<?php
											}
										}
									 ?>

									</div>
								</div>
						</div>
						
					</div>
				<?php endif ?>
			<div class="col-md-2 col-lg-offset-9">
				<a href="<?php echo BASE_URL; ?>categoria" class="btn btn-raised btn-success">Otras Categorias...</a>
			</div>
				
	</div>



	<div class="row">
		<div class="col-md-12">
		<H2>Publicaciones Recientes:</H2><hr>
			<!-- <div class="well"> -->
			
				<?php if (isset($this->post) && isset($this->images)): ?>
							<?php $posts = $this->post; ?>
							<?php $images = $this->images; $limitarImg = 0; ?>
							<?php foreach ($posts as $row => $value): ?>
								<div class="col-md-6">
								<a href="<?php echo BASE_URL . 'post/ver/' . $value['id']; ?>" style="color: #1c1c1c; text-decoration: none;">

								<div class="panel panel-default">
									<div class="panel-body">
									 	<div class="row">
									 		<div class="col-md-6"><h3><?php echo substr($value['title'], 0, 20) . '...'; ?></h3></div>
									 		<div class="col-md-6">
											
												<h3 style="text-align: right;"><?php echo  $value['tipo_moneda'] . number_format($value['price'],2,'.',','); ?></h3>
											</div>
											
									 	</div>
										<div class="row">
											
											<div class="col-md-3" style="border-right: 2px solid #ccc;">
											
												<?php
													$coincidencias = 0;
													for ($i=0; $i < count($images); $i++) { ?>

													<?php if ($value['id'] == $images[$i]['id_post'] && $coincidencias == 0): ?>
														<img style="width: 100px; height: 100px;" class="img-thumbnail" alt="<?php echo $images[$i]['title']; ?>" src="<?php echo BASE_URL; ?>public/img/<?php echo $images[$i]['title'] . $images[$i]['format']; ?>">
														<?php $coincidencias = 1; ?>
													<?php endif ?>
														
														<?php
													}
												?>	
											</div>
											
											<div class="col-md-8">
												<div class="">
													<p>
														<?php echo substr($value['description'], 0, 200) . '...';  ?>

													</p>
												</div>
											</div>
										</div>
										
										
										<div class="row">
											

											<div class="col-md-6">
												
													<label style="margin-top: 5px;">
													<?php

														// $timeZone = new DateTimeZone('America/New_York');
														// $date = new DateTime($value['fecha_creacion'],$timeZone);
														// $date->format('Y-m-d H:i:s');
														// echo $date;
														echo date_format(date_create($value['fecha_creacion']), 'l g:ia \o\n F Y'); 
													?></label>
												
											</div>
										</div>
									</div>
										
	
										
								</div>
								</a>
								</div>
								<?php $coincidencias = 0; ?>
								<?php endforeach ?>
							<?php endif ?>	
									
			<!-- </div> -->
			<div class="row">
				<div class="col-md-4 col-lg-offset-10">
				<a href="<?php echo BASE_URL; ?>categoria" class="btn btn-raised btn-success">Ver mas..</a>
			</div>
			</div>
		</div>
	</div>
</div>
