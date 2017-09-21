
<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-offset-1">
			<H1>{$titulo}</H1>
			{if count($posts) >= 0}
				{foreach from=$posts item=value}
						
							<div class="col-md-6">
								<div class="panel panel-default" id="{$value.id}">
								<div class="panel-body">
									<a style="color: #000; text-decoration: none;"  href="{$_layoutParams.root}Post/Ver/{$value.id}">
										<div class="col-md-12">
											<h4>{$value.title}</h4>
										</div>
										<div class="col-md-12">
											<p>
												{substr($value.description,0,40)}
											</p>
										</div>
										<div class="col-md-12">
											 <label style="margin-top: 5px;">
							                  {date_format(date_create($value.fecha), 'l g:ia \o\n F Y')}
							                </label>
										</div>
									</a>
									
								</div>
							</div>
							</div>
						
				{/foreach}
			{else}
				<div class="well">
					<h4>Aqui podras ver tus anuncios favoritos.</h4>
				</div>
				
			{/if}
			{if isset($paginacion)}
           		{$paginacion}
       		{/if}
		</div>
	</div>
 
	
</div>


