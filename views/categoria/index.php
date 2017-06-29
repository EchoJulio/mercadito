<div class="container">
  <div class="row">
    <div class="col-md-3">
      <H2>Categorias</H2><hr>
    </div>
    <div class="col-md-9">
      <h2>Publicaciones </h2>
    </div>
  </div>
  <div class="row">

    <div class="col-md-3">
      <div class="well">
        

        <ul class="list-group">
          <?php if (isset($this->categorias)): ?>
          <?php $categorias = $this->categorias; ?>

          <?php foreach ($categorias as $row => $value): ?>
            <li class="list-group-item"><a href="#" style="color: #000;"><?php echo $value['categoria']; ?></a></li>
          <?php endforeach ?>
        <?php endif ?>
        </ul>
      </div>
    </div>

    <div class="col-md-9">
    
      <!-- <div class="well"> -->
      
        <?php if (isset($this->post)): ?>
              <?php $posts = $this->post; ?>
              <?php foreach ($posts as $row => $value): ?>
                <div class="col-md-6">
                <a href="#" style="color: #1c1c1c; text-decoration: none;">

                <div class="well">
                
                <h3><?php echo substr($value['title'], 0, 30); ?></h3>
                
                
                <img style="width: 100px; height: 100px;" alt="imagen1" src="<?php echo BASE_URL; ?>/public/img/1.jpg">
                
                
                <p>
                  <?php echo substr($value['description'],0,55) .'...';  ?>

                </p>
                <h3><?php echo  $value['tipo_moneda'].number_format($value['price'],2,'.',','); ?></h3>
                <small style="text-align: left;"><?php echo date_format(date_create($value['fecha_creacion']), 'g:ia \o\n l  F Y'); ?></small>
                

                
                </div>
                </a>
                </div>
                <?php endforeach ?>
              <?php endif ?>  
                  
      <!-- </div> -->
    </div>
  </div>
</div>
