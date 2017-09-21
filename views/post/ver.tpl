<script type="text/javascript" src='{$_layoutParams.root}public/js/ajax.js'></script>
<section class="container">

	 <div class="row"> 
	 	 <div  class="col-md-12">
		  	<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="col-md-9">
						<h1 style="color: #0fb2fc;">{$post.title}</h1>
					</div>
			 	<div class="col-md-1">
			 			<div class="btn btn-raised btn-info" style="cursor: default;">
						 <h3>{$post.tipo_moneda}{number_format($post.price,2,'.',',')}</h3>
						</div>
			 	</div>

			 	
				</div>
			 
		  	</div>
		</div>
	 </div>
	 <div class="row">
	 	<div class="col-md-8">
		  	<div class="well">

		  	
		  	<script type="text/javascript">
		  			$(document).ready(function(){
		  				$('#myCarousel').carousel('pause');
		  			});
		  	</script>
		  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				   			{foreach key = key  item = value from = $imgs} 
				   				{if $key == 0}
				   					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				   				{else}
				   					<li data-target="#myCarousel" data-slide-to="{$key}"></li>
				   				{/if}
				   			{/foreach}
				   
				  </ol>

				  <div class="carousel-inner" style="text-align: center;">

				  		{foreach key = key item = value from = $imgs}
				  			{if $key == 0}
				  				<div class="item active">
					   				<img class="imag-responsive"  style="width: 100%; height: 450px; " src="{$_layoutParams.root}/public/img/{$value.title}{$value.format}">
					   			</div>
				  			{else}
								<div class="item">
					   				<img class="imag-responsive"  style="width: 100%; height: 450px; " src="{$_layoutParams.root}/public/img/{$value.title}{$value.format}">
					   			</div>
				  			{/if}
					   	{/foreach}

					
				    </div>

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

	     						 <p class="list-group-item-text">{$user.name}</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >account_circle</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Usuario:</h4>

	     						 <p class="list-group-item-text">{$user.usuario}</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >email</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Correo:</h4>

	     						 <p class="list-group-item-text">{$user.email}</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >phone</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Telefono:</h4>

	     						 <p class="list-group-item-text">{$user.telefono}</p>
	     					<hr>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			{if Session::get('usuario')}
				<div class="panel panel-default">
					<div class="panel-body">
						{if isset($post.favorito)}
							<div class="col-md-12">
								<button class="btn btn-success btn-raised" style="width: 100%;" id="btn-fav" name="{$id}"><i class="material-icons">grade</i> En Favoritos</button>
							</div>
						{else}
							<button class="btn btn-success" id="btn-fav" style="width: 100%;" name="{$id}"><i class="material-icons">grade</i> Agregar a Favoritos</button>
						{/if}
						
					</div>
				</div>
			{/if}
	</div>
	</div>
	 
<div class="row">
		<div class="col-md-12">
		<div class="well">
			<h3>Detalles</h3>
			<div class="list-group">
				{if isset($post)}
					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >done</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Condicion:</h4>

     						 <p class="list-group-item-text"><h4>{ucwords($post.state)}</h4></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >textsms</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Descripcion:</h4>

     						 <p class="list-group-item-text">{$post.description}</p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >room</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Ubicacion:</h4>

     						 <p class="list-group-item-text">{$post.province}</p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >reorder</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Categoria:</h4>

     						 <p class="list-group-item-text">{$post.subcategory}</p>
     					<hr>
						</div>
					</div>

				{/if}
			</div>
		</div>
	</div>
</div>
	<div class="modal fade" id="myModal" role="dialog">
	 <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><i class="material-icons" style="color: #f55549; font-size: 40px;">info</i></h4>

        </div>
        <div class="modal-body">
          <p id="mensaje">
         	 
                
          </p><a href="{$_layoutParams.root}perfil/favoritos" class="alert-link">Ir a Favoritos</a>.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
</div>
</section>

