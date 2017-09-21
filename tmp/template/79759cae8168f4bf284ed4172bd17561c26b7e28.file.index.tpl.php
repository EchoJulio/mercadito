<?php /* Smarty version Smarty-3.1.8, created on 2017-07-12 18:33:34
         compiled from "C:\xampp\htdocs\mercadito\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375759664ca4977f67-74541887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79759cae8168f4bf284ed4172bd17561c26b7e28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\login\\index.tpl',
      1 => 1499877212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375759664ca4977f67-74541887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59664ca499ed93_35332334',
  'variables' => 
  array (
    'titulo' => 0,
    'datos' => 0,
    'mensajeError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59664ca499ed93_35332334')) {function content_59664ca499ed93_35332334($_smarty_tpl) {?>

<div class="container">

	<div class="col-md-4 col-md-offset-4">
		
<div class="well">
    <form class="form-signin" method="post" action="">
    <h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? 'Sin Titulo' : $tmp);?>
</h3><hr>
        <div class="form-group">
            <label for="usuario" class="sr-only">Email address</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" style="margin-bottom: 5px;" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['user'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['user'];?>
 <?php }?>">
        </div>
       <div class="form-group">
            <label for="pass" class="sr-only">Contraseña</label>
        <input type="password"  class="form-control" name="pass" placeholder="Contraseña" required="" >
        <div class="checkbox">
          <label>
            <input type="checkbox"> Recordarme
          </label>
          
        </div>
       </div>
       <!--  <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div> -->
        <button  class="btn btn-raised btn-lg btn-success btn-block" type="submit">Enviar</button>
        <input type="hidden" name="enviar" value="1">
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
          <p> <?php if (isset($_smarty_tpl->tpl_vars['mensajeError']->value)){?>
          <script type="text/javascript">
             $(document).ready(function(){
                $('#myModal').modal('show');
             })

          </script>
                <?php echo $_smarty_tpl->tpl_vars['mensajeError']->value;?>

          <?php }?>
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