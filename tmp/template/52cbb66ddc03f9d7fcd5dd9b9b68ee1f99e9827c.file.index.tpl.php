<?php /* Smarty version Smarty-3.1.8, created on 2017-08-09 03:59:06
         compiled from "C:\xampp\htdocs\mercadito\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227905980019076dc24-31167335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52cbb66ddc03f9d7fcd5dd9b9b68ee1f99e9827c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\registro\\index.tpl',
      1 => 1502243935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227905980019076dc24-31167335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59800190799824_23155743',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
    'datos' => 0,
    'errorNombre' => 0,
    'errorUsuario' => 0,
    'errorTelefono' => 0,
    'errorEmail' => 0,
    'errorPass' => 0,
    'errorConfirmar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59800190799824_23155743')) {function content_59800190799824_23155743($_smarty_tpl) {?><div class="container">
	<div class="col-md-8 col-md-offset-2" >
		<div class="well">
			<legend><h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3></legend>	
		
	<form class="form-horizontal col-lg-offset-1" id="form-user-registrar" method="post" action="">
		
	<div class="form-group">
    	<div class="col-lg-10">
    		<button class="btn btn-default btn-lg btn-block btn-raised" style="background-color: #3B5998; color: #fff;">Registrar con Facebook</button>
    		
    	</div>

    </div>

    <div class="form-group">
    	 <div class="col-md-12"> 
       		<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&!empty($_smarty_tpl->tpl_vars['mensaje']->value)){?>
			  	<div class="col-md-12">
			  		<div class="alert alert-dismissible alert-success" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</strong>
					</div>
			  	</div>
			<?php }?>
    	 </div>
    </div>

    
    <div class="form-group">

      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['nombre'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['nombre'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
<?php }?>">
      </div>
       		<?php if (isset($_smarty_tpl->tpl_vars['errorNombre']->value)&&!empty($_smarty_tpl->tpl_vars['errorNombre']->value)){?>
			  	<div class="col-md-6" >
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['errorNombre']->value;?>
</strong>
					</div>
			  	</div>
			<?php }?>
    </div>


	<div class="form-group">
      <label for="usuario" class="col-lg-2 control-label">Usuario:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['usuario'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['usuario'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
<?php }?>">
      </div>
       		<?php if (isset($_smarty_tpl->tpl_vars['errorUsuario']->value)&&!empty($_smarty_tpl->tpl_vars['errorUsuario']->value)){?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['errorUsuario']->value;?>
</strong>
					</div>
			  	</div>
			<?php }?>
    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Telefono:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="telefono" placeholder="809-555-5555" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['telefono'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['telefono'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['telefono'];?>
<?php }?>">
      </div>
			<?php if (isset($_smarty_tpl->tpl_vars['errorTelefono']->value)&&!empty($_smarty_tpl->tpl_vars['errorTelefono']->value)){?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['errorTelefono']->value;?>
</strong>
					</div>
			  	</div>
			 <?php }?>
    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Correo:</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="email" placeholder="Correo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['email'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['email'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
<?php }?>">
      </div>
			<?php if (isset($_smarty_tpl->tpl_vars['errorEmail']->value)&&!empty($_smarty_tpl->tpl_vars['errorEmail']->value)){?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['errorEmail']->value;?>
</strong>
					</div>
			  	</div>
			 <?php }?>
    </div>
    <div class="form-group">
      <label for="pass" class="col-lg-2 control-label">Contraseña:</label>
      <div class="col-lg-4">
        <input type="password" id="pass" class="form-control" name="pass" placeholder="Contraseña" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['pass'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['pass'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['pass'];?>
<?php }?>">
        

      </div>

       		<?php if (isset($_smarty_tpl->tpl_vars['errorPass']->value)&&!empty($_smarty_tpl->tpl_vars['errorPass']->value)){?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger" style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['errorPass']->value;?>
</strong>
					</div>
			  	</div>

			<?php }?>
    </div>
   
     <div class="form-group">
      <label for="confirmar" class="col-lg-2 control-label">Confirmar:</label>
      <div class="col-lg-4">
        <input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="Confirmar" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['confirmar'])&&!empty($_smarty_tpl->tpl_vars['datos']->value['confirmar'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['confirmar'];?>
<?php }?>">
        

      </div>

       		<?php if (isset($_smarty_tpl->tpl_vars['errorConfirmar']->value)&&!empty($_smarty_tpl->tpl_vars['errorConfirmar']->value)){?>
			  	<div class="col-md-6">
			  		<div class="alert alert-dismissible alert-danger " style="margin-bottom: 0;">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong style="font-size: 14px;"> <?php echo $_smarty_tpl->tpl_vars['errorConfirmar']->value;?>
</strong>
					</div>
			  	</div>
			<?php }?>
    </div>
	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-1">
        <button type="reset" class="btn btn-raised btn-default">Cancelar</button>
       	<button type="submit" class="btn btn-raised btn-primary">Registrar</button>
      
      </div>
    </div>

    
  	<input type="hidden" class="form-control" name="enviar" value="1">
	</form>




				
		</div>


	</div>	

	
</div>
<?php }} ?>