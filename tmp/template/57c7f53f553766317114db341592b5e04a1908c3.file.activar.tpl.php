<?php /* Smarty version Smarty-3.1.8, created on 2017-08-01 06:56:48
         compiled from "C:\xampp\htdocs\mercadito\views\registro\activar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684559800a10d190d1-97990124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c7f53f553766317114db341592b5e04a1908c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\registro\\activar.tpl',
      1 => 1501563407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684559800a10d190d1-97990124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    'errorUsuario' => 0,
    'errorValidar' => 0,
    'this' => 0,
    'errorActivar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59800a10d76121_15294226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59800a10d76121_15294226')) {function content_59800a10d76121_15294226($_smarty_tpl) {?><div class="container">
	<h3>Activacion de cuenta</h3>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&!empty($_smarty_tpl->tpl_vars['mensaje']->value)){?>
		<div class="alert alert-dismissible alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Bien!</strong> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['errorUsuario']->value)&&!empty($_smarty_tpl->tpl_vars['errorUsuario']->value)){?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong> <?php echo $_smarty_tpl->tpl_vars['errorUsuario']->value;?>

		</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['errorValidar']->value)&&!empty($_smarty_tpl->tpl_vars['errorValidar']->value)){?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong>  <?php echo $_smarty_tpl->tpl_vars['errorValidar']->value;?>

		</div>
	<?php }?>

	 <?php if (isset($_smarty_tpl->tpl_vars['this']->value->errorActivar)&&!empty($_smarty_tpl->tpl_vars['this']->value->errorActivar)){?>
		<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Oops!</strong>  <?php echo $_smarty_tpl->tpl_vars['errorActivar']->value;?>

		</div>
	
	<?php }?>

	<a href="<<?php ?>?php echo BASE_URL; ?<?php ?>>">Ir al inicio</a>

	<?php if (!Session::get('autenticado')){?>
		
		| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesion</a>

	<?php }?>
	
</div><?php }} ?>