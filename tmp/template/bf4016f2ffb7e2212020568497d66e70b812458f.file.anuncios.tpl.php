<?php /* Smarty version Smarty-3.1.8, created on 2017-07-31 05:53:25
         compiled from "C:\xampp\htdocs\mercadito\views\perfil\anuncios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267265971630a345c65-59895987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf4016f2ffb7e2212020568497d66e70b812458f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\perfil\\anuncios.tpl',
      1 => 1501473204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267265971630a345c65-59895987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5971630a346355_01018973',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'titulo' => 0,
    'posts' => 0,
    'value' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971630a346355_01018973')) {function content_5971630a346355_01018973($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/ajax.js'></script>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-offset-1">
			<H1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</H1>
			<?php if (count($_smarty_tpl->tpl_vars['posts']->value)>=0){?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						
							<div class="panel panel-default" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
								<div class="panel-body">
									<a style="color: #000; text-decoration: none;"  href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
Post/Ver/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
									<h4><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h4>
										<p>
											<?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>

										</p>
									</a>
									<div class="col-md-8 col-lg-offset-9">
										<div class="modal fade" id="myModal<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" role="dialog">
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
										            <button type="button" class="btn btn-default" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-dismiss="modal" id="btn-ok">Ok</button>
										        </div>
										      </div>
										      
										    </div>
										</div>

										<button title="Borrar" class="btn btn-raised btn-danger btn-xs borrar" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="material-icons">delete</i></button>
										<a title="Editar" class="btn btn-raised btn-warning btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
Post/Editar/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="material-icons">mode_edit</i></a>
									</div>
									
								</div>
							</div>
						
				<?php } ?>
			<?php }else{ ?>
				<div class="well">
					<h4>Aqui podras ver tus anuncios.</h4>
					<p>Que esperas? Anuncia lo que quieres vender</p>
				</div>
				
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?>
           		<?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>

       		<?php }?>
		</div>
	</div>
 
	
</div>


<?php }} ?>