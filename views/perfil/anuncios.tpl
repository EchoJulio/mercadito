<script type="text/javascript" src='{$_layoutParams.root}public/js/ajax.js'></script>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-offset-1">
			<H1>{$titulo}</H1>
			{if count($posts) >= 0}
				{foreach from=$posts item=value}
						
							<div class="panel panel-default" id="{$value.id}">
								<div class="panel-body">
									<a style="color: #000; text-decoration: none;"  href="{$_layoutParams.root}Post/Ver/{$value.id}">
									<h4>{$value.title}</h4>
										<p>
											{$value.description}
										</p>
									</a>
									<div class="col-md-8 col-lg-offset-9">
										<div class="modal fade" id="myModal{$value.id}" role="dialog">
											 <div class="modal-dialog modal-sm">
										    
										      <!-- Modal content-->
										      <div class="modal-content" >
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title" style="text-align: center;"><i class="material-icons" style="color: #f55549; font-size: 40px;">delete</i></h4>

										        </div>
										        <div class="modal-body">
										          <p>
										         	 ¿Deseas Eliminar Este Anuncio?
										                
										          </p>
										        </div>
										        <div class="modal-footer">
										        	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										            <button type="button" class="btn btn-default" name="{$value.id}" data-dismiss="modal" id="btn-ok">Ok</button>
										        </div>
										      </div>
										      
										    </div>
										</div>

										<button title="Borrar" class="btn btn-raised btn-danger btn-xs borrar" data-toggle="modal" data-target="#myModal{$value.id}"><i class="material-icons">delete</i></button>
										<a title="Editar" class="btn btn-raised btn-warning btn-xs" href="{$_layoutParams.root}Post/Editar/{$value.id}"><i class="material-icons">mode_edit</i></a>
									</div>
									
								</div>
							</div>
						
				{/foreach}
			{else}
				<div class="well">
					<h4>Aqui podras ver tus anuncios.</h4>
					<p>Que esperas? Anuncia lo que quieres vender</p>
				</div>
				
			{/if}
			{if isset($paginacion)}
           		{$paginacion}
       		{/if}
		</div>
	</div>
 
	
</div>


