<?php /* Smarty version Smarty-3.1.8, created on 2017-08-01 05:58:50
         compiled from "C:\xampp\htdocs\mercadito\views\categoria\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31815966bf3a865708-86991063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccab7236bcd7e986979fa207cc92008b096be4a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mercadito\\views\\categoria\\index.tpl',
      1 => 1501559929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31815966bf3a865708-86991063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5966bf3a886013_70359289',
  'variables' => 
  array (
    'provincias' => 0,
    'key' => 0,
    '_layoutParams' => 0,
    'row' => 0,
    'post' => 0,
    'images' => 0,
    'imagen' => 0,
    'paginacion' => 0,
    'categorias' => 0,
    'subcategorias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966bf3a886013_70359289')) {function content_5966bf3a886013_70359289($_smarty_tpl) {?><div class="container">

  <div class="row">
      <div class="col-md-4">
        

         <div class="col-md-12">
         <H2>Provincias</H2>
          <div class="well">
            

            <ul class="list-group">
              <?php if (isset($_smarty_tpl->tpl_vars['provincias']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['provincias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                  <?php if ($_smarty_tpl->tpl_vars['key']->value<10){?>
                    <li class="list-group-item"><i class="material-icons " style="color: #59B75C;">room</i><a class="" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['row']->value['title']);?>
" style="color: #000;"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
                    
                  <?php }else{ ?>
                    <?php break 1?>
                  <?php }?>
                <?php } ?>
              <?php }?>
              <button style="color: #000;" data-toggle="modal" data-target="#myModal2" title="Provincias" class="btn-link">Ver Mas...</button>
            </ul>
          </div>
        </div>

      </div>

 

    <div class="col-md-8">
     
     <div class="col-md-12">
        <div class="col-md-1">
        <H2>Anuncios</H2>

        
       
      </div>

      <div class="col-md-2 col-lg-offset-9">
         
           <button type="button" data-toggle="modal" data-target="#myModal" title="Categorias" class="btn btn-raised btn-danger" ><i class="material-icons">filter_list</i></button>

         
      </div>

     </div>

      
      <!-- <div class="well"> -->



      <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&isset($_smarty_tpl->tpl_vars['images']->value)){?>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <div class="col-md-12">
                

      <div class="panel panel-default">
        <div class="panel-body">
          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/ver/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="color: #1c1c1c; text-decoration: none;">
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
                    <img style="width: 100px; height: 100px;" class="img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
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
          
          </a>
          <div class="row">
            

            <div class="col-md-10">
              
                <label style="margin-top: 5px;">
                  <?php echo date_format(date_create($_smarty_tpl->tpl_vars['row']->value['fecha_creacion']),'l g:ia \o\n F Y');?>

                </label>
              
            </div>
           
          </div>
        </div>
      </div>
      </div>
    <?php } ?>
    <?php }?>
              
  <?php if (empty($_smarty_tpl->tpl_vars['post']->value)){?>
    <h3>No se encontron ninguna coincidencia</h3>
    
  <?php }?>
            


      
       
                  
      <!-- </div> -->

      <div class="col-md-12">
        <?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?>
           <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>

        <?php }?>
      </div>
    </div>
  </div>
 
 
</div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <form class="form-horizontal" method="post" id="form-filtros">
       <input type="hidden" name="busqueda" value="1">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal" arial-hidden="true">x</button>
          <h4 class="modal-title" >Buscar Por Categorias</h4>
        </div>

        <div class="modal-body">

        <div class="col-md-12">
        <h4>Categorias:</h4>
          <div class="row">
           <?php if (isset($_smarty_tpl->tpl_vars['categorias']->value)){?>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                 <div class="col-md-4">
                  <a style="color: #000;"  href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['row']->value['categoria']);?>
"><i class="material-icons" style="color: #F55549;">local_offer</i><?php echo $_smarty_tpl->tpl_vars['row']->value['categoria'];?>
</a>
                
                 </div>
              <?php } ?>
            <?php }?>
          </div>
        </div>

        <div class="col-md-12">
         <h4>Subcategorias:</h4>
          <div class="row">
            
            <?php if (isset($_smarty_tpl->tpl_vars['subcategorias']->value)){?>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                 <div class="col-md-4">
                      <a style="color: #000;"  href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['row']->value['title']);?>
"><i class="material-icons" style="color: #F55549;">local_offer</i><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
                 </div>
              <?php } ?>
            <?php }?>
          
          </div>
        </div>

        

        </div>

        <div class="modal-footer">
        <div class="col-md-12">
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <form class="form-horizontal" method="post" id="form-filtros">
       <input type="hidden" name="busqueda" value="1">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal" arial-hidden="true">x</button>
          <h4 class="modal-title" >Buscar Por Ubicacion</h4>
        </div>

        <div class="modal-body">

        <div class="col-md-12">
        <h4>Provincias:</h4>
          <div class="row">
           <?php if (isset($_smarty_tpl->tpl_vars['provincias']->value)){?>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provincias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                 <div class="col-md-4">
                  <a style="color: #000;"  href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/index/<?php echo str_replace(" ","_",$_smarty_tpl->tpl_vars['row']->value['title']);?>
"><i class="material-icons " style="color: #59B75C;">room</i><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
                
                 </div>
              <?php } ?>
            <?php }?>
          </div>
        </div>

     

        

        </div>

        <div class="modal-footer">
        <div class="col-md-12">
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>
        </div>
        </form>
      </div>
    </div>
  </div>


<?php }} ?>