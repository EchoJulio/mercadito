<?php /* Smarty version Smarty-3.1.8, created on 2017-08-09 05:50:19
         compiled from "C:\xampp\htdocs\mercadito\views\post\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1902159701725f1b318-05826845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57599bd67a647c05a3a2388c7f978b2d65e656ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\post\\index.tpl',
      1 => 1502250617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1902159701725f1b318-05826845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59701726084840_38593116',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'titulo' => 0,
    'mensajeExito' => 0,
    'datos' => 0,
    'dato' => 0,
    'categorias' => 0,
    'value' => 0,
    'subCategorias' => 0,
    'subCategoria' => 0,
    'provincias' => 0,
    'this' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59701726084840_38593116')) {function content_59701726084840_38593116($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/post/js/post.js"></script>
<div class="container">
	<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<i class="material-icons" style="color: #ff5722;">new_releases</i></h3><hr>
	

	 

		<?php if (isset($_smarty_tpl->tpl_vars['mensajeExito']->value)&&!empty($_smarty_tpl->tpl_vars['mensajeExito']->value)){?>
			<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Bien!</strong> 
			<?php echo $_smarty_tpl->tpl_vars['mensajeExito']->value;?>


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
							<input class="form-control" type="text" name="title" required=""  maxlength="30" placeholder="Título" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['title'])){?><?php echo $_smarty_tpl->tpl_vars['dato']->value['title'];?>
<?php }?>">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-2 control-label">Descripcíon:</label>
						<div class="col-md-9">
							<textarea rows="6" style="resize: none;"  required="" class="form-control" type="text" name="description" maxlength="200"  placeholder="Descripcíon" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['description'])){?><?php echo $_smarty_tpl->tpl_vars['dato']->value['description'];?>
<?php }?>"></textarea>
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
						
						
						<div class="form-group">
							<div id="imgList" class="col-md-12">
							
							<div id="foto0" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto1" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto2" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto3" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
							<div id="foto4" class="img-thumbnail col-md-2" style="width: 80px; height: 80px; margin: 5px; padding:5px;"><i class="material-icons" style="font-size: 73px; opacity: .5;">photo_camera</i></div>
						</div>
						</div>
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
															<option value='<?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['subCategoria']->value['title'];?>
</option>
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

											<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</option>
									<?php } ?>
								<?php }?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-2 control-label">Precio:</label>
							<div class="col-md-4">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['price'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['price'];?>
<?php }?>" class="form-control" type="number" name="price" required="" placeholder="0,000.00">						
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div class="col-md-12">
								          <div class="radio radio-primary">
								          	<label>
								            <input type="radio" name="moneda"  value="RD$" checked="">
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
						          <input type="radio" name="moneda"  value="USD$" >USD$
								  </label>
						        </div>
								          
								</div>
							</div>


						</div>
					</div>

					<div class="form-group"  style="margin-bottom: 126px;">

						<div class="col-md-12">
							<label class="col-md-2 control-label">Estado:</label>
							<div class="form-group">
								<div class="col-md-3">
							          <div class="radio radio-primary">
							          	<label>
							            <input type="radio" name="estado"  value="usado" checked="">
							       		Usado
							       		</label>
							          </div>
								</div>
							

								<div class="col-md-3">
								 <div class="radio radio-primary">
								 	 <label>
								    <input type="radio" name="estado"  value="nuevo">
										Nuevo
								  </label>
								 </div>
								</div>

								<div class="col-md-3">							
								  <div class="radio radio-primary">
								  	<label>
								    <input type="radio" name="estado"  value="reparado">
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
					<button type="submit"  class="btn btn-raised btn-success">Publicar</button>
				</div>
		
	
		</form>
	
			
		

	</div>
</div>
<div class="container">

  <!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

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
          <p><?php if (isset($_smarty_tpl->tpl_vars['this']->value->mensaje)){?>
          <script type="text/javascript">
              $('#myModal').modal('show');

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
  
</div>


<?php }} ?>