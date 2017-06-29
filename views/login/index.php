<div class="container">

	<div class="col-md-4 col-md-offset-4">
		
<div class="well">
    <form class="form-signin" method="post" action="">
    <h3><?php echo $this->titulo; ?></h3><hr>
        <div class="form-group">
            <label for="usuario" class="sr-only">Email address</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" style="margin-bottom: 5px;" value="<?php if(isset($this->datos['user'])) echo $this->datos['user']; ?>">
        </div>
       <div class="form-group">
            <label for="pass" class="sr-only">Contraseña</label>
        <input type="password"  class="form-control" name="pass" placeholder="Contraseña" required="" >
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

<?php
if (isset($this->errorUsuario) &&
	isset($this->errorPass) &&
	isset($this->errorValidar) &&
	isset($this->errorLogin)) {

echo $this->errorUsuario . '<br>';
echo $this->errorPass. '<br>';
echo $this->errorValidar. '<br>';
echo $this->errorLogin. '<br>';
}
?>
	</div>
</div>


