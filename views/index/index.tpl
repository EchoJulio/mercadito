<!-- Recibimos el parametro titulo enviado desde el controlador -->

<div class="container">
	<div class="row">
			<H2>Categorias...<i class="material-icons" style="font-size: 40px; "></i></H2><hr>
	</div>

	<div class="row">
		 {if isset($categorias) && isset($subCategorias)}
			{foreach item = row from = $categorias}
					<div class="col-md-4">
						
						<div class="well" style="height: 250px;">
						

						
								<div class="col-md-12 col-lg-offset-4">
								
								 <i class="material-icons" style="color: #03a9f4; font-size: 60px;">{$row.icon}</i>
									
								</div>
								<a  style="color: #000; text-decoration: none;" href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$row.categoria)}"><div class="row-content"><h4>{$row.categoria}</h4></div></a>
								<div class="col-md-12">
									<div class="list-group">
									{foreach item = sub_categoria from = $subCategorias}
											{if $sub_categoria.id_category == $row.id}
												<div class="row-content"><a style="color: #000; " href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$sub_categoria.title)}">{$sub_categoria.title}</a></div>
											{/if}
									{/foreach}
									</div>
								</div>
						</div>
					</div>
				{/foreach}	
			{/if}
			<div class="col-md-2 col-lg-offset-9">
				<a href="categoria" class="btn btn-raised btn-success">Otras Categorias...</a>
			</div>	
	</div>

	<div class="row">
	<H2>Publicaciones Recientes</H2><hr>
		{foreach item = row from = $posts}
		<div class="col-md-6">
			<a href="{$_layoutParams.root}post/ver/{$row.id}" style="color: #1c1c1c; text-decoration: none;">

			<div class="panel panel-default">
				<div class="panel-body">
				 	<div class="row">
				 		<div class="col-md-6"><h3>{substr($row.title, 0, 20)}</h3></div>
				 		<div class="col-md-6">
						
							<h3 style="text-align: right;">{$row.tipo_moneda}{number_format($row.price,2,'.',',')}</h3>
						</div>
						
				 	</div>
					<div class="row">
						
						<div class="col-md-3" style="border-right: 2px solid #ccc;">
								{assign var = "contador" value="0"}
								{foreach item = imagen from = $images}
									{if $row.id == $imagen.id_post}
										<img style="width: 100px; height: 100px;" class="img-thumbnail" alt="$imagen.title" src="{$_layoutParams.root}public/img/{$imagen.title}{$imagen.format}">
									
									{/if}
								{/foreach}
						</div>
						
						<div class="col-md-8">
							<div class="">
								<p>
									{substr($row.description, 0, 200)}...

								</p>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						

						<div class="col-md-6">
							
								<label style="margin-top: 5px;">
									{date_format(date_create($row.fecha_creacion), 'l g:ia \o\n F Y')}
								</label>
							
						</div>
					</div>
				</div>
					

					
			</div>
			</a>
			</div>
		{/foreach}
		<div class="row">
			<div class="col-md-4 col-lg-offset-10">
			<a href="{$_layoutParams.root}categoria" class="btn btn-raised btn-success">Ver mas..</a>
		</div>
	</div>


</div>
