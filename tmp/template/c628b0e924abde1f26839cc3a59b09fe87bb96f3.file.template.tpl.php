<?php /* Smarty version Smarty-3.1.8, created on 2017-08-01 06:07:53
         compiled from "C:\xampp\htdocs\mercadito\views\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145535966482c33e7f4-05964379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c628b0e924abde1f26839cc3a59b09fe87bb96f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\layout\\default\\template.tpl',
      1 => 1501560371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145535966482c33e7f4-05964379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5966482c3713e6_33182028',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'row' => 0,
    '_item_style' => 0,
    'js' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966482c3713e6_33182028')) {function content_5966482c3713e6_33182028($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin Titulo" : $tmp);?>
</title>


   <!-- Material Design fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

      <link href=" //netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"
      rel="stylesheet">
<!--   Bootstrap Original -->
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/layout/default/css/estilos.css">


</head>
<body>

<div class="navbar navbar-dafault">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
       
        
           
       <!--  //**OJO LEER EXPLICACION DE CODIGO PHP**
        //Bucle para generar mi lista de enlaces del menu
        //y asi poder agregar la clase active al enlace donde
        //donde se encuentre el usurio -->
         <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu_left'])){?>

          <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
          

            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['row']->value['id']){?>

              <?php $_smarty_tpl->tpl_vars['_item_style'] = new Smarty_variable('active', null, 0);?>

            <?php }else{ ?>
              <?php $_smarty_tpl->tpl_vars['_item_style'] = new Smarty_variable('', null, 0);?>

            <?php }?>

                  <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
"><a class="text-menu" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['titulo'];?>
<span class="sr-only">(current)</span></a></li>
            

          <?php } ?>  
          <?php }?>
      </ul>
      <div class="col-lg-offset-3">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-12" name="buscar" placeholder="Buscar...">

        </div>
      </form>
      </div>

      <ul class="nav navbar-nav navbar-right">
       <?php if (Session::get('autenticado')){?>
          <li class="dropdown">
          <a href=""  class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">account_circle</i> <strong><?php echo Session::get('nombre');?>

          
          </strong>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
perfil"><i class="material-icons">person</i> Perfil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
perfil/mis_anuncios"><i class="material-icons">comment</i> Mis Anuncios</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
perfil/Favoritos"><i class="material-icons">stars</i> Favoritos</a></li>
          </ul>
        </li>
      <?php }?>

       <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu_right'])){?>

          <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
          

            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['row']->value['id']){?>

              <?php $_smarty_tpl->tpl_vars['_item_style'] = new Smarty_variable('active', null, 0);?>

            <?php }else{ ?>
              <?php $_smarty_tpl->tpl_vars['_item_style'] = new Smarty_variable('', null, 0);?>

            <?php }?>

                  <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
"><a class="text-menu" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['titulo'];?>
<span class="sr-only">(current)</span></a></li>
            

          <?php } ?>  
          <?php }?>
      </ul>
    </div>
  <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>   
  </div>
</div>

 <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&!empty($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
       
             <script src=" <?php echo $_smarty_tpl->tpl_vars['js']->value;?>
 " type="text/javascript"></script>
    <?php } ?>     
   <?php }?>

<?php if (Session::acessoView('usuario')){?>
    <div class="floating">
      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post" title='Publicar' class="btn btn-raised btn-warning btn-fab">
      <i class="material-icons">record_voice_over</i>
      </a>
    </div>
 <?php }?>

 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 





<!-- <div class="navbar navbar-dafault navbar-fixed-bottom"> -->
  <footer class="footer" style="padding-top: 19px;">
    <div class="container">
      <span style="text-align: center;"><h4>Copyright  &copy; 2017 <<?php ?>?php echo APP_NAME; ?<?php ?>> - <<?php ?>?php echo APP_COMPANY; ?<?php ?>><br>julio_vasquez06@hotmail.com</h4></span>
    </div>
  </footer>
<!-- </div> -->
<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'])){?>

  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
material.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
ripples.js"></script>
    
    <script type="text/javascript">
    $.material.init();
   </script>

<?php }?>
</body>
</html><?php }} ?>