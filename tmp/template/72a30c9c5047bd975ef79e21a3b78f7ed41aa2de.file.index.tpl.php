<?php /* Smarty version Smarty-3.1.8, created on 2017-08-09 05:44:28
         compiled from "C:\xampp\htdocs\mercadito\views\perfil\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2968059701c0a4fd3c0-96827910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a30c9c5047bd975ef79e21a3b78f7ed41aa2de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\perfil\\index.tpl',
      1 => 1502250256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2968059701c0a4fd3c0-96827910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59701c0a5138a1_47287321',
  'variables' => 
  array (
    'titulo' => 0,
    'user' => 0,
    'errorNombre' => 0,
    'errorUsuario' => 0,
    'errorTelefono' => 0,
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59701c0a5138a1_47287321')) {function content_59701c0a5138a1_47287321($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-offset-3 col-md-5">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-offset-1 col-md-10">
						<form class="form-horizontal" method="post">
						<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><hr>
						<input type="text" name="enviar" value="1" style="display: none;">
						<div class="form-group">
					      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
					      <div class="col-lg-12">
					        <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
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
						      <div class="col-lg-12">
						        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user'];?>
">
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
						      <div class="col-lg-12">
						        <input type="text" class="form-control" name="telefono" placeholder="809-555-5555" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['telefono'];?>
">
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
							<div class="col-md-12">
								<input type="submit" name="guardar" class="btn btn-raised btn-primary"  value="Guardar Cambios">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
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
          <p> <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
          <script type="text/javascript">
             $(document).ready(function(){
                $('#myModal').modal('show');
             })

          </script>
                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

          <?php }?>
           <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
perfil/mis_anuncios">Ir a Mis Anuncios</a>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</div>
<?php }} ?>