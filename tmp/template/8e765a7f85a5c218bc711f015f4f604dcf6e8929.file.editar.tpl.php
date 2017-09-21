<?php /* Smarty version Smarty-3.1.8, created on 2017-07-24 00:24:05
         compiled from "C:\xampp\htdocs\mercadito\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77045972b9685717b1-31912814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e765a7f85a5c218bc711f015f4f604dcf6e8929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\post\\editar.tpl',
      1 => 1500848641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77045972b9685717b1-31912814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5972b9685723b7_88381872',
  'variables' => 
  array (
    'post' => 0,
    '_layoutParams' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'categorias' => 0,
    'value' => 0,
    'subCategorias' => 0,
    'subCategoria' => 0,
    'provincias' => 0,
    'imgs' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5972b9685723b7_88381872')) {function content_5972b9685723b7_88381872($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['post']->value)){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/post/js/post.js"></script>
<div class="container">
	<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 

		<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&!empty($_smarty_tpl->tpl_vars['mensaje']->value)){?>
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

			 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
Perfil/Mis_Anuncios" class="alert-link">Ir a mis Anuncios.</a>
			 </div>
		<?php }?>

	<div class="col-md-12">
		<form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">
			<div class="col-md-6">
				<div class="well">
					<legend>Paso: 1</legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Título:</label>
						<div class="col-lg-10">
							<input class="form-control" type="text" name="title" required=""  maxlength="30" placeholder="Título" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  required="" class="form-control" type="text" name="description" maxlength="200"  placeholder="Descripcíon" value=""><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
						</div>
					</div>
					<div class="form-group" style="margin-bottom: 62px;">
						<label for="inputFile" class="col-md-2 control-label">Imagenes</label> 
						<div class="col-md-10">
							<input type="file" id="imagenes" name="imagenes[]" multiple="">
							<div class="input-group">
							    <input type="text" readonly="" class="form-control" placeholder="Selecciona unas cuantas imagenes">
							      <span class="input-group-btn input-group-sm">
							        <button type="button" class="btn btn-fab btn-fab-mini">
							          <i class="material-icons">attach_file</i>
							        </button>
							      </span>
							  </div>

						</div>
					</div>	
						<div id="mensaje" class="col-md-6 col-lg-offset-5">	
						</div>

					<input type="hidden" name="enviar" value="1">
				</div>
			</div>

			<div class="col-md-6">
				<div class="well">
					<legend>Paso: 2</legend>
					<div class="form-group">
						<label class="col-md-2 control-label">Categoria:</label>
						<div class="col-md-10">
							<select name="subCategory" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['categorias']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
											<optgroup label="<?php echo $_smarty_tpl->tpl_vars['value']->value['categoria'];?>
">
													<?php  $_smarty_tpl->tpl_vars['subCategoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subCategoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subCategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subCategoria']->key => $_smarty_tpl->tpl_vars['subCategoria']->value){
$_smarty_tpl->tpl_vars['subCategoria']->_loop = true;
?> 
														<?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['subCategoria']->value['id_category']){?>
															<?php if ($_smarty_tpl->tpl_vars['post']->value['id_subcategory']==$_smarty_tpl->tpl_vars['subCategoria']->value['id']){?>
																<option selected value='<?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['title'];?>
</option>
															<?php }else{ ?>
																<option  value='<?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['title'];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
											</optgroup>
									<?php } ?>
								<?php }?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Provincias:</label>
						<div class="col-md-10">
							<select name="privince" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['provincias']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provincias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['id_prividence']==$_smarty_tpl->tpl_vars['value']->value['id']){?>
											<option selected value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</option>
										<?php }else{ ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</option>
										<?php }?>
											
									<?php } ?>
								<?php }?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-2 control-label">Precio:</label>
							<div class="col-md-4">
								<input value="<?php echo $_smarty_tpl->tpl_vars['post']->value['price'];?>
" class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="col-md-12">
								          <div class="radio radio-primary">
								          	<label>
								            <?php if ($_smarty_tpl->tpl_vars['post']->value['tipo_moneda']=='RD$'){?>
								            	<input type="radio" name="moneda"  value="RD$" checked="">
								            <?php }else{ ?>
								            	<input type="radio" name="moneda"  value="RD$">
								            <?php }?>
								       		RD$
								          </label>
								          </div>
									</div>
							        
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">

								<div class="radio radio-primary">
						          <label>
						          	<?php if ($_smarty_tpl->tpl_vars['post']->value['tipo_moneda']=='USD$'){?>
						          		<input type="radio" name="moneda"  value="USD$" checked="" >
						          	<?php }else{ ?>
						          		<input type="radio" name="moneda"  value="USD$">
						          	<?php }?>
						          	USD$
								  </label>
						        </div>
								          
								</div>
							</div>


						</div>
					</div>

					<div class="form-group"  style="margin-bottom: 26px;">

						<div class="col-md-12">
							<label class="col-md-2 control-label">Estado:</label>
							<div class="form-group">
								<div class="col-md-3">
							          <div class="radio radio-primary">
							          	<label>
							           	<?php if ($_smarty_tpl->tpl_vars['post']->value['state']=='usado'){?>
							           		 <input type="radio" name="estado"  value="usado" checked="">
							           	<?php }else{ ?>
							           		 <input type="radio" name="estado"  value="usado">
							           	<?php }?>
							       		Usado
							       		</label>
							          </div>
								</div>
							

								<div class="col-md-3">
								 <div class="radio radio-primary">
								 	 <label>
								    	<?php if ($_smarty_tpl->tpl_vars['post']->value['state']=='nuevo'){?>
								    		<input type="radio" name="estado"  value="nuevo" checked="">
								    	<?php }else{ ?>
								    		<input type="radio" name="estado"  value="nuevo">
								    	<?php }?>
										Nuevo
								  </label>
								 </div>
								</div>

								<div class="col-md-3">							
								  <div class="radio radio-primary">
								  	<label>
								    <?php if ($_smarty_tpl->tpl_vars['post']->value['state']=='reparado'){?>
								    	<input type="radio" name="estado"  value="reparado" checked="">
								    <?php }else{ ?>
								    	<input type="radio" name="estado"  value="reparado">
								    <?php }?>
										Reparado	
								  </label>	    
								  </div>   		
								</div>


							</div>
						</div>

										
					</div>



				</div>
			</div>

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4>Imagenes</h4>
						<div class="form-group">
							<div id="imgList">
			
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
										<div class="col-md-2">
												<div class="col-md-12"><img class="img-thumbnail img-min" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['format'];?>
"></div>
												
												<div class="col-md-5 col-lg-offset-1"><div class="checkbox" title="Eliminar"><label><input  type="checkbox"  name="imgToDelete<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['format'];?>
"></label></div></div>
											
										</div>
								<?php } ?>
							</div>
					</div>
					</div>
				</div>
			</div>
				<div class="col-md-12">
					<button type="submit"  class="btn btn-raised btn-success">Publicar</button>
				</div>
		
	
		</form>
	
			
		

	</div>
</div>
<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><i class="material-icons" style="color: #ff6736; font-size: 40px;">error</i></h4>
        </div>
        <div class="modal-body">
          <p><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
          <script type="text/javascript">
              $(document).ready(function(){
              	 $('#myModal').modal('show');
              })

          </script>
                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

          <?php }?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  
  
</div>
	<?php }else{ ?>
		<div class="well">
			<h4>No seleccionaste ningun Anuncio.</h4>
		</div>
	<?php }?>
	
</div>
<?php }} ?>