

<div class="container">

	<div class="col-md-4 col-md-offset-4">
		
<div class="well">
    <form class="form-signin" method="post" action="">
    <h3>{$titulo|default:'Sin Titulo'}</h3><hr>
        <div class="form-group">
            <label for="usuario" class="sr-only">Email address</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" style="margin-bottom: 5px;" value="{if isset($datos.user)} {$datos.user} {/if}">
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
          <p> {if isset($mensajeError)}
          <script type="text/javascript">
             $(document).ready(function(){
                $('#myModal').modal('show');
             })

          </script>
                {$mensajeError}
          {/if}
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







  




