<div class="container">

  <div class="row">
      <div class="col-md-4">
        

         <div class="col-md-12">
         <H2>Provincias</H2>
          <div class="well">
            

            <ul class="list-group">
              {if isset($provincias)}
                {foreach item= row key=key from= $provincias}
                  {if $key < 10}
                    <li class="list-group-item"><i class="material-icons " style="color: #59B75C;">room</i><a class="" href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$row.title)}" style="color: #000;">{$row.title}</a></li>
                    
                  {else}
                    {break}
                  {/if}
                {/foreach}
              {/if}
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



      {if isset($post) && isset($images)}
              {foreach item = row from = $post}
                <div class="col-md-12">
                

      <div class="panel panel-default">
        <div class="panel-body">
          <a href="{$_layoutParams.root}post/ver/{$row.id}" style="color: #1c1c1c; text-decoration: none;">
          <div class="row">
            <div class="col-md-6"><h3>{substr($row.title, 0, 20)}</h3></div>
            <div class="col-md-6">
            
              <h3 style="text-align: right;">{$row.tipo_moneda}{number_format($row.price,2,'.',',')}</h3>
            </div>
            
          </div>
          <div class="row">
            
            <div class="col-md-3" style="border-right: 2px solid #ccc;">
                {assign var = "contador" value="0"}
                {foreach item = imagen from = $images}
                  {if $row.id == $imagen.id_post}
                    <img style="width: 100px; height: 100px;" class="img-thumbnail" alt="{$imagen.title}" src="{$_layoutParams.root}public/img/{$imagen.title}{$imagen.format}">
                  
                  {/if}
                {/foreach}
            </div>
            
            <div class="col-md-8">
              <div class="">
                <p>
                  {substr($row.description, 0, 200)}...

                </p>
              </div>
            </div>
          </div>
          
          </a>
          <div class="row">
            

            <div class="col-md-10">
              
                <label style="margin-top: 5px;">
                  {date_format(date_create($row.fecha_creacion), 'l g:ia \o\n F Y')}
                </label>
              
            </div>
           
          </div>
        </div>
      </div>
      </div>
    {/foreach}
    {/if}
              
  {if empty($post)}
    <h3>No se encontron ninguna coincidencia</h3>
    
  {/if}
            


      
       
                  
      <!-- </div> -->

      <div class="col-md-12">
        {if isset($paginacion)}
           {$paginacion}
        {/if}
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
           {if isset($categorias)}
              {foreach item = row from = $categorias}
                 <div class="col-md-4">
                  <a style="color: #000;"  href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$row.categoria)}"><i class="material-icons" style="color: #F55549;">local_offer</i>{$row.categoria}</a>
                
                 </div>
              {/foreach}
            {/if}
          </div>
        </div>

        <div class="col-md-12">
         <h4>Subcategorias:</h4>
          <div class="row">
            
            {if isset($subcategorias)}
              {foreach item = row from = $subcategorias}
                 <div class="col-md-4">
                      <a style="color: #000;"  href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$row.title)}"><i class="material-icons" style="color: #F55549;">local_offer</i>{$row.title}</a>
                 </div>
              {/foreach}
            {/if}
          
          </div>
        </div>

        

        </div>

        <div class="modal-footer">
        <div class="col-md-12">
          {* <button type="submit" class="btn btn-raised btn-info">Aplicar filtros</button> *}
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
           {if isset($provincias)}
              {foreach item = row from = $provincias}
                 <div class="col-md-4">
                  <a style="color: #000;"  href="{$_layoutParams.root}categoria/index/{str_replace(" ","_",$row.title)}"><i class="material-icons " style="color: #59B75C;">room</i>{$row.title}</a>
                
                 </div>
              {/foreach}
            {/if}
          </div>
        </div>

     

        

        </div>

        <div class="modal-footer">
        <div class="col-md-12">
          {* <button type="submit" class="btn btn-raised btn-info">Aplicar filtros</button> *}
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        </div>
        </div>
        </form>
      </div>
    </div>
  </div>


