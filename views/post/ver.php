<section class="container">
	<h1><?php
	// 	echo "<pre>";
	// print_r( $this->imgs);
	
	//  echo "</pre>";
	  ?></h1>
	  <div  class="col-md-12">
		  	<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-9">
						<h1 style="color: #0fb2fc;"><?php echo  $this->post['title'];?></h1>
					</div>
			 	<div class="col-md-1">
			 			
			 			<div class="btn btn-raised btn-info" style="cursor: default;">
						 <h3><?php echo  $this->post['tipo_moneda'] . number_format($this->post['price'],2,'.',','); ?></h3>
						</div>
			 	</div>

			 	<div class="col-md-4">
			 			<!-- <h4> -->
			 			<?php //echo date_format(date_create($this->post['fecha_creacion']), 'g:ia \o\n l  F Y'); ?>
			 				
			 			<!-- </h4> -->
			 	</div>
				</div>
			 
		  	</div>
		  	</div>
	  <div class="col-md-12">
	  	<div class="well">

	  	
	  	<!-- Vizor de imagenes -->
	  	<script type="text/javascript">
	  			$(document).ready(function(){
	  				$('#myCarousel').carousel('pause');
	  			});
	  	</script>
	  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li> -->
			  
			   		<?php $imgs = $this->imgs; ?>
			   		<?php
			   			for ($i=0; $i < count($imgs); $i++) { 
			   				
			   				if ($i == 0) {?>
			   					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   					<?php
			   				}else{
			   					?>
								 <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
			   				<?php
			   				}
			   			
			   				
			   			}

			   		  ?>
			   
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" style="text-align: center;">
			   		<?php $imgs = $this->imgs; $i = 0;?>

				   		<?php foreach ($imgs as $row => $value): ?>
				   			<?php
				   				if ($i == 0) { ?>
									<div class="item active">
										<img class="imag-responsive"  style="width: 100%; height: 450px; " src="<?php echo BASE_URL; ?>/public/img/<?php echo $value['title'] . $value['format']; ?>">
									</div>

				   				<?php
				   				$i++;

				   				}else{ ?>
									<div class="item">
										<img class="imag-responsive"  style="width: 100%; height: 450px;" src="<?php echo BASE_URL; ?>/public/img/<?php echo $value['title'] . $value['format']; ?>">
									</div>
								<?php

				   				}

				   			?>
				   		<?php endforeach ?>

				
			    </div>

			  

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
	  	</div>

	 
	<div class="col-md-8">
		<div class="well">
			<h3>Detalles</h3>
			<div class="list-group">
				<?php if (isset($this->post)): ?>
				<?php $post = $this->post; ?>
					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >done</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Condicion:</h4>

     						 <p class="list-group-item-text"><h4><?php echo ucwords($post['state']); ?></h4></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >textsms</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Descripcion:</h4>

     						 <p class="list-group-item-text"><?php echo $post['description']; ?></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >room</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Ubicacion:</h4>

     						 <p class="list-group-item-text"><?php echo $post['province']; ?></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >reorder</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Categoria:</h4>

     						 <p class="list-group-item-text"><?php echo $post['subcategory']; ?></p>
     					<hr>
						</div>
					</div>

			<?php endif ?>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
			<h3>Vendedor</h3>
				<div class="list-group">

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >person</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Nombre:</h4>

     						 <p class="list-group-item-text"><?php echo $this->user['name']; ?></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >account_circle</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Usuario:</h4>

     						 <p class="list-group-item-text"><?php echo $this->user['usuario']; ?></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >email</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Correo:</h4>

     						 <p class="list-group-item-text"><?php echo $this->user['email']; ?></p>
     					<hr>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

