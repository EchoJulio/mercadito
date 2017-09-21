<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title> {$titulo|default:"Sin Titulo"}</title>
<!--   Bootstrap Original -->
  <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/layout/default/css/estilos.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
     


 
</head>
<body>

<div class="navbar navbar-dafault costum-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="{$_layoutParams.root}">{$_layoutParams.configs['app_name']}</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <!--  //**OJO LEER EXPLICACION DE CODIGO PHP**
        //Bucle para generar mi lista de enlaces del menu
        //y asi poder agregar la clase active al enlace donde
        //donde se encuentre el usurio -->
         {if isset($_layoutParams.menu_left)}

          {foreach item = row from = $_layoutParams.menu_left}
          

            {if isset($_layoutParams.item) && $_layoutParams.item == $row.id}

              {assign var = '_item_style' value='active'}

            {else}
              {assign var = '_item_style' value=''}

            {/if}

                  <li class="{$_item_style}"><a class="text-menu" href="{$row.enlace}">{$row.titulo}<span class="sr-only">(current)</span></a></li>
            

          {/foreach}  
          {/if}
        
           

      </ul>
      <div class="col-lg-offset-3">
        <form class="navbar-form navbar-left"  >
        <div class="form-group">
          <input type="text" class="form-control col-md-12"  placeholder="Buscar...">

        </div>
      </form>
      </div>

      <ul class="nav navbar-nav navbar-right">
        {if Session::get('autenticado')}
          <li class="dropdown">
          <a href=""  class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">account_circle</i> <strong>{Session::get('nombre')}</strong>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{$_layoutParams.root}perfil"><i class="material-icons">person</i> Perfil</a></li>
             <li><a href="{$_layoutParams.root}perfil/mis_anuncios"><i class="material-icons">comment</i> Mis Anuncios</a></li>
            <li><a href="{$_layoutParams.root}perfil/Favoritos"><i class="material-icons">stars</i> Favoritos</a></li>
          
          </ul>
        </li>
      {/if}

       {if isset($_layoutParams.menu_right)}

          {foreach item = row from = $_layoutParams.menu_right}
          

            {if isset($_layoutParams.item) && $_layoutParams.item == $row.id}

              {assign var = '_item_style' value='active'}

            {else}
              {assign var = '_item_style' value=''}

            {/if}

                  <li class="{$_item_style}"><a class="text-menu" href="{$row.enlace}">{$row.titulo}<span class="sr-only">(current)</span></a></li>
            

          {/foreach}  
          {/if}
      </ul>
    </div>
     
  </div>
</div>


  <div id="myCarousel" class="carousel slide container-portada" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 500px;">
    <div class="item active" >
      
        <img class="img-portada" src="{$_layoutParams.root}views/layout/default/img/portada.jpg" alt="Portada">
      
      
    </div>

  
    
  </div>

  <!-- Left and right controls -->
  

</div>




   <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>   
  </div>
</div>

 {if isset($_layoutParams.js) && count($_layoutParams.js) && !empty($_layoutParams.js)}
    {foreach item = js from = $_layoutParams.js}
       
             <script src=" {$js} " type="text/javascript"></script>
    {/foreach}     
   {/if}

{if Session::acessoView('usuario') }
    <div class="floating">
      <a href="{$_layoutParams.root}post" title='Publicar' class="btn btn-raised btn-warning btn-fab">
      <i class="material-icons">record_voice_over</i>
      </a>
    </div>
 {/if}

   <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery.js"></script>

{include file = $_contenido }

<!-- <div class="navbar navbar-dafault navbar-fixed-bottom"> -->
  <footer class="footer" style="padding-top: 19px;">
    <div class="container">
      <span style="text-align: center;"><h4>Copyright  &copy; 2017 <?php echo APP_NAME; ?> - <?php echo APP_COMPANY; ?><br>julio_vasquez06@hotmail.com</h4></span>
    </div>
  </footer>
<!-- </div> -->
{if isset($_layoutParams.ruta_js) && count($_layoutParams.ruta_js) }

  <script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.js"></script>
  <script type="text/javascript" src="{$_layoutParams.ruta_js}material.js"></script>
  <script type="text/javascript" src="{$_layoutParams.ruta_js}ripples.js"></script>
    
    <script type="text/javascript">
    $.material.init();
   </script>

{/if}
</body>
</html>