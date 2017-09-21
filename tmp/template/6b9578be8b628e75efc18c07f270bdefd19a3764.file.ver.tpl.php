<?php /* Smarty version Smarty-3.1.8, created on 2017-08-09 04:47:46
         compiled from "C:\xampp\htdocs\mercadito\views\post\ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10965596d726ad19431-28823676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9578be8b628e75efc18c07f270bdefd19a3764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\post\\ver.tpl',
      1 => 1502246865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10965596d726ad19431-28823676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_596d726ad583e4_27305103',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'post' => 0,
    'imgs' => 0,
    'key' => 0,
    'value' => 0,
    'user' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596d726ad583e4_27305103')) {function content_596d726ad583e4_27305103($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/ajax.js'></script>
<section class="container">

	 <div class="row"> 
	 	 <div  class="col-md-12">
		  	<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="col-md-9">
						<h1 style="color: #0fb2fc;"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
					</div>
			 	<div class="col-md-1">
			 			<div class="btn btn-raised btn-info" style="cursor: default;">
						 <h3><?php echo $_smarty_tpl->tpl_vars['post']->value['tipo_moneda'];?>
<?php echo number_format($_smarty_tpl->tpl_vars['post']->value['price'],2,'.',',');?>
</h3>
						</div>
			 	</div>

			 	
				</div>
			 
		  	</div>
		</div>
	 </div>
	 <div class="row">
	 	<div class="col-md-8">
		  	<div class="well">

		  	
		  	<script type="text/javascript">
		  			$(document).ready(function(){
		  				$('#myCarousel').carousel('pause');
		  			});
		  	</script>
		  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				   			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?> 
				   				<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>
				   					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				   				<?php }else{ ?>
				   					<li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></li>
				   				<?php }?>
				   			<?php } ?>
				   
				  </ol>

				  <div class="carousel-inner" style="text-align: center;">

				  		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				  			<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>
				  				<div class="item active">
					   				<img class="imag-responsive"  style="width: 100%; height: 450px; " src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/public/img/<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['format'];?>
">
					   			</div>
				  			<?php }else{ ?>
								<div class="item">
					   				<img class="imag-responsive"  style="width: 100%; height: 450px; " src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/public/img/<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['format'];?>
">
					   			</div>
				  			<?php }?>
					   	<?php } ?>

					
				    </div>

				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		  	</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
				<h3>Vendedor</h3>
					<div class="list-group">

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >person</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Nombre:</h4>

	     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >account_circle</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Usuario:</h4>

	     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['user']->value['usuario'];?>
</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >email</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Correo:</h4>

	     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
	     					<hr>
							</div>
						</div>

						<div class="list-group-item">
							<div class="row-action-primary">
						      <i class="material-icons" >phone</i>
						    </div>
							<div class="row-content">
								 <h4 class="list-group-item-heading">Telefono:</h4>

	     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['user']->value['telefono'];?>
</p>
	     					<hr>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<?php if (Session::get('usuario')){?>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php if (isset($_smarty_tpl->tpl_vars['post']->value['favorito'])){?>
							<div class="col-md-12">
								<button class="btn btn-success btn-raised" style="width: 100%;" id="btn-fav" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="material-icons">grade</i> En Favoritos</button>
							</div>
						<?php }else{ ?>
							<button class="btn btn-success" id="btn-fav" style="width: 100%;" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="material-icons">grade</i> Agregar a Favoritos</button>
						<?php }?>
						
					</div>
				</div>
			<?php }?>
	</div>
	</div>
	 
<div class="row">
		<div class="col-md-12">
		<div class="well">
			<h3>Detalles</h3>
			<div class="list-group">
				<?php if (isset($_smarty_tpl->tpl_vars['post']->value)){?>
					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >done</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Condicion:</h4>

     						 <p class="list-group-item-text"><h4><?php echo ucwords($_smarty_tpl->tpl_vars['post']->value['state']);?>
</h4></p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >textsms</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Descripcion:</h4>

     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >room</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Ubicacion:</h4>

     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['post']->value['province'];?>
</p>
     					<hr>
						</div>
					</div>

					<div class="list-group-item">
						<div class="row-action-primary">
					      <i class="material-icons" >reorder</i>
					    </div>
						<div class="row-content">
							 <h4 class="list-group-item-heading">Categoria:</h4>

     						 <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['post']->value['subcategory'];?>
</p>
     					<hr>
						</div>
					</div>

				<?php }?>
			</div>
		</div>
	</div>
</div>
	<div class="modal fade" id="myModal" role="dialog">
	 <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><i class="material-icons" style="color: #f55549; font-size: 40px;">info</i></h4>

        </div>
        <div class="modal-body">
          <p id="mensaje">
         	 
                
          </p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
perfil/favoritos" class="alert-link">Ir a Favoritos</a>.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
</div>
</section>

<?php }} ?>