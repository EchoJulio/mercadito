<?php
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  //echo $this->b;
?>

<div class="container">

  <div class="row">
      <div class="col-md-4">
        

         <div class="col-md-12">
         <H2>Provincias</H2>
          <div class="well">
            

            <ul class="list-group">
              <?php if (isset($this->provincias)): ?>
              <?php $provincias = $this->provincias; ?>

              <?php foreach ($provincias as $row => $value): ?>
                <li class="list-group-item"><i class="material-icons " style="color: #59B75C;">room</i><a class="" href="<?php echo BASE_URL; ?>categoria/index/<?php echo str_replace(" ","_",$value['title']); ?>" style="color: #000;"><?php echo $value['title']; ?></a></li>
              <?php endforeach ?>
            <?php endif ?>
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
         
           <button type="button" data-toggle="modal" data-target="#myModal" title="Filtros" class="btn btn-raised btn-danger " ><i class="material-icons">list</i></button>

         
      </div>

     </div>

      
      <!-- <div class="well"> -->



      <?php if (isset($this->post) && isset($this->images)): ?>
              <?php $posts = $this->post; ?>
              <?php $images = $this->images; $limitarImg = 0; ?>
              <?php foreach ($posts as $row => $value): ?>
                <div class="col-md-12">
                <a href="<?php echo BASE_URL . 'post/ver/' . $value['id']; ?>" style="color: #1c1c1c; text-decoration: none;">

                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-6"><h3><?php echo substr($value['title'], 0, 20) . '...'; ?></h3></div>
                      <div class="col-md-6">
                      
                        <h3 style="text-align: right;"><?php echo  $value['tipo_moneda'] . number_format($value['price'],2,'.',','); ?></h3>
                      </div>
                      
                    </div>
                    <div class="row">
                      
                      <div class="col-md-3" style="border-right: 2px solid #ccc;">
                      
                        <?php
                          $coincidencias = 0;
                          for ($i=0; $i < count($images); $i++) { ?>

                          <?php if ($value['id'] == $images[$i]['id_post'] && $coincidencias == 0): ?>
                            <img style="width: 100px; height: 100px;" class="img-thumbnail" alt="<?php echo $images[$i]['title']; ?>" src="<?php echo BASE_URL; ?>public/img/<?php echo $images[$i]['title'] . $images[$i]['format']; ?>">
                            <?php $coincidencias = 1; ?>
                          <?php endif ?>
                            
                            <?php
                          }
                        ?>  
                      </div>
                      
                      <div class="col-md-8">
                        <div class="">
                          <p>
                            <?php echo substr($value['description'], 0, 200) . '...';  ?>

                          </p>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      

                      <div class="col-md-6">
                        
                          <label style="margin-top: 5px;">
                          <?php

                            // $timeZone = new DateTimeZone('America/New_York');
                            // $date = new DateTime($value['fecha_creacion'],$timeZone);
                            // $date->format('Y-m-d H:i:s');
                            // echo $date;
                            echo date_format(date_create($value['fecha_creacion']), 'l g:ia \o\n F Y'); 
                          ?></label>
                        
                      </div>
                    </div>
                  </div>
                    
  
                    
                </div>
                </a>
                </div>
                <?php $coincidencias = 0; ?>
                <?php endforeach ?>
              <?php endif ?>
             <?php 
              if($this->post == 0 || empty($this->post)){
                echo "<h3>No se encontron ninguna coincidencia</h3>";
                
              }
             ?>


      
       
                  
      <!-- </div> -->

      <div class="col-md-12">
        <?php if (isset($this->paginacion)): ?>
          <?php echo $this->paginacion; ?>
        <?php endif ?>
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
          <h4 class="modal-title" >Filtros de busqueda</h4>
        </div>

        <div class="modal-body">

        <div class="col-md-12">
        <label>Categorias:</label>
          <div class="row">
              
           <div class="col-md-4">
             <div class="togglebutton">
          <label>
            <input type="checkbox" name="filtro" value="todos" checked="true">Todos
          </label>
           </div>
           </div>
           <?php if (isset($this->categorias)): ?>
              <?php $categorias = $this->categorias; ?>

              <?php foreach ($categorias as $row => $value): ?>
                 <div class="col-md-4">
                   <div class="togglebutton">
                  <label>
                    <input type="checkbox" value="<?php echo $value['categoria']; ?>" name="filtro"><?php echo $value['categoria']; ?>
                  </label>
                </div>
                 </div>
              <?php endforeach ?>
            <?php endif ?>
          </div>
        </div>

        <div class="col-md-12">
         <label>Subcategorias:</label>
          <div class="row">
            
             <?php if (isset($this->subcategorias)): ?>
              <?php $subcategorias = $this->subcategorias; ?>

              <?php foreach ($subcategorias as $row => $value): ?>
                 <div class="col-md-5">
                     <div class="togglebutton">
                    <label>
                      <input  type="checkbox" value="<?php echo $value['title']; ?>" name="filtro"><?php echo $value['title']; ?>
                    </label>
                  </div>
                 </div>
              <?php endforeach ?>
            <?php endif ?>
          
          </div>
        </div>

        

        </div>

        <div class="modal-footer">
        <div class="col-md-12">
          <button type="submit" class="btn btn-raised btn-info">Aplicar filtros</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>
        </div>
        </form>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){

    //Funcion para limitar la cantidad de checkBox activados
    //Lo limitamos a solo 1 por vez en las categorias
    $('.modal-body').on('change',function(e){

      var chk =  $('.modal-body .col-md-12 .row .col-md-4').children();
      chk = chk.children().children();
      $(chk).each(function(){
        chk.prop('checked', '');
      })

      e.target.checked = true;
     

    });

    $('.modal-body').on('change',function(e){

      var chk =  $('.modal-body .col-md-12 .row .col-md-5').children();
      chk = chk.children().children();
      $(chk).each(function(){
        chk.prop('checked', '');
      })

      e.target.checked = true;
     

    });
  });
</script>

