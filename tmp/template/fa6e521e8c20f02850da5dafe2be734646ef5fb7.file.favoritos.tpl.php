<?php /* Smarty version Smarty-3.1.8, created on 2017-07-31 05:53:26
         compiled from "C:\xampp\htdocs\mercadito\views\perfil\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18510597163dcee3373-59773641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6e521e8c20f02850da5dafe2be734646ef5fb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\perfil\\favoritos.tpl',
      1 => 1501473197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18510597163dcee3373-59773641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597163dcee3de2_49801326',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'value' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597163dcee3de2_49801326')) {function content_597163dcee3de2_49801326($_smarty_tpl) {?>
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
						
							<div class="col-md-6">
								<div class="panel panel-default" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
								<div class="panel-body">
									<a style="color: #000; text-decoration: none;"  href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
Post/Ver/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
										<div class="col-md-12">
											<h4><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h4>
										</div>
										<div class="col-md-12">
											<p>
												<?php echo substr($_smarty_tpl->tpl_vars['value']->value['description'],0,40);?>

											</p>
										</div>
										<div class="col-md-12">
											 <label style="margin-top: 5px;">
							                  <?php echo date_format(date_create($_smarty_tpl->tpl_vars['value']->value['fecha']),'l g:ia \o\n F Y');?>

							                </label>
										</div>
									</a>
									
								</div>
							</div>
							</div>
						
				<?php } ?>
			<?php }else{ ?>
				<div class="well">
					<h4>Aqui podras ver tus anuncios favoritos.</h4>
				</div>
				
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?>
           		<?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>

       		<?php }?>
		</div>
	</div>
 
	
</div>


<?php }} ?>