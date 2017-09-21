<div class="container">
	<div class="well well-lg">
		  <h2>
			 {if isset($mensaje)}
			 	{$mensaje}
			{/if}
			 </h2>
			 <a href="{$_layoutParams.root}" class="alert-link">ir al inicio</a> |
			 <a href="javascript:history.back(1)" class="alert-link">volver a la pagina anterior</a> |
			 <a href="{$_layoutParams.root}/registro" class="alert-link">Registarse</a> |


			
				{if !Session::get('autenticado')}
				<a href="{$_layoutParams.root}login" class="alert-link">Iniciar Session</a>
				{/if}
					

	</div>

</div>