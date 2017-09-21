<?php /* Smarty version Smarty-3.1.8, created on 2017-07-23 16:06:03
         compiled from "C:\xampp\htdocs\mercadito\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445974ad3e9d3d03-21892201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772deb07a4a52fb8305fc8434143cb4c27f8ca11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\error\\access.tpl',
      1 => 1500818760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445974ad3e9d3d03-21892201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5974ad3e9fd3a5_44517696',
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5974ad3e9fd3a5_44517696')) {function content_5974ad3e9fd3a5_44517696($_smarty_tpl) {?><div class="container">
	<div class="well well-lg">
		  <h2>
			 <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
			 	<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

			<?php }?>
			 </h2>
			 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="alert-link">ir al inicio</a> |
			 <a href="javascript:history.back(1)" class="alert-link">volver a la pagina anterior</a> |
			 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/registro" class="alert-link">Registarse</a> |


			
				<?php if (!Session::get('autenticado')){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" class="alert-link">Iniciar Session</a>
				<?php }?>
					

	</div>

</div><?php }} ?>