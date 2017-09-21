<?php /* Smarty version Smarty-3.1.8, created on 2017-07-13 01:43:04
         compiled from "C:\xampp\htdocs\mercadito\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12400596660be5a3d38-29785696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20855f99db2891c349bdc58e029a2d8df9de3e18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\index\\index.tpl',
      1 => 1499902983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12400596660be5a3d38-29785696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_596660be5eb928_91868751',
  'variables' => 
  array (
    'categorias' => 0,
    'subCategorias' => 0,
    'row' => 0,
    '_layoutParams' => 0,
    'sub_categoria' => 0,
    'posts' => 0,
    'images' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596660be5eb928_91868751')) {function content_596660be5eb928_91868751($_smarty_tpl) {?><!-- Recibimos el parametro titulo enviado desde el controlador -->

<div class="container">
	<div class="row">
			<H2>Categorias...<i class="material-icons" style="font-size: 40px; "></i></H2><hr>
	</div>

	<div class="row">
		 <?php if (isset($_smarty_tpl->tpl_vars['categorias']->value)&&isset($_smarty_tpl->tpl_vars['subCategorias']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<div class="col-md-4">
						
						<div class="well" style="height: 250px;">
						

						
								<div class="col-md-12 col-lg-offset-4">
								
								 <i class="material-icons" style="color: #03a9f4; font-size: 60px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
</i>
									
								</div>
								<a  style="color: #000; text-decoration: none;" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['row']->value['categoria']);?>
"><div class="row-content"><h4><?php echo $_smarty_tpl->tpl_vars['row']->value['categoria'];?>
</h4></div></a>
								<div class="col-md-12">
									<div class="list-group">
									<?php  $_smarty_tpl->tpl_vars['sub_categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subCategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_categoria']->key => $_smarty_tpl->tpl_vars['sub_categoria']->value){
$_smarty_tpl->tpl_vars['sub_categoria']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['sub_categoria']->value['id_category']==$_smarty_tpl->tpl_vars['row']->value['id']){?>
												<div class="row-content"><a style="color: #000; " href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['sub_categoria']->value['title']);?>
"><?php echo $_smarty_tpl->tpl_vars['sub_categoria']->value['title'];?>
</a></div>
											<?php }?>
									<?php } ?>
									</div>
								</div>
						</div>
					</div>
				<?php } ?>	
			<?php }?>
			<div class="col-md-2 col-lg-offset-9">
				<a href="categoria" class="btn btn-raised btn-success">Otras Categorias...</a>
			</div>	
	</div>

	<div class="row">
	<H2>Publicaciones Recientes</H2><hr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<div class="col-md-6">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/ver/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="color: #1c1c1c; text-decoration: none;">

			<div class="panel panel-default">
				<div class="panel-body">
				 	<div class="row">
				 		<div class="col-md-6"><h3><?php echo substr($_smarty_tpl->tpl_vars['row']->value['title'],0,20);?>
</h3></div>
				 		<div class="col-md-6">
						
							<h3 style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['row']->value['tipo_moneda'];?>
<?php echo number_format($_smarty_tpl->tpl_vars['row']->value['price'],2,'.',',');?>
</h3>
						</div>
						
				 	</div>
					<div class="row">
						
						<div class="col-md-3" style="border-right: 2px solid #ccc;">
								<?php $_smarty_tpl->tpl_vars["contador"] = new Smarty_variable("0", null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_smarty_tpl->tpl_vars['imagen']->value['id_post']){?>
										<img style="width: 100px; height: 100px;" class="img-thumbnail" alt="$imagen.title" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['imagen']->value['format'];?>
">
									
									<?php }?>
								<?php } ?>
						</div>
						
						<div class="col-md-8">
							<div class="">
								<p>
									<?php echo substr($_smarty_tpl->tpl_vars['row']->value['description'],0,200);?>
...

								</p>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						

						<div class="col-md-6">
							
								<label style="margin-top: 5px;">
									<?php echo date_format(date_create($_smarty_tpl->tpl_vars['row']->value['fecha_creacion']),'l g:ia \o\n F Y');?>

								</label>
							
						</div>
					</div>
				</div>
					

					
			</div>
			</a>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-4 col-lg-offset-10">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria" class="btn btn-raised btn-success">Ver mas..</a>
		</div>
	</div>


</div>
<?php }} ?>