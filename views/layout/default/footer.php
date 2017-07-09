
<!-- <div class="navbar navbar-dafault navbar-fixed-bottom"> -->
	<footer class="footer" style="padding-top: 19px;">
		<div class="container">
			<span style="text-align: center;"><h4>Copyright  &copy; 2017 <?php echo APP_NAME; ?> - <?php echo APP_COMPANY; ?><br>julio_vasquez06@hotmail.com</h4></span>
		</div>
	</footer>
<!-- </div> -->
<?php if (isset($layoutParams['ruta_js']) && count($layoutParams['ruta_js'])): ?>

  <script type="text/javascript" src="<?php echo $layoutParams['ruta_js']; ?>bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo $layoutParams['ruta_js']; ?>material.js"></script>
  <script type="text/javascript" src="<?php echo $layoutParams['ruta_js']; ?>ripples.js"></script>
	  <script type="text/javascript">
	  $.material.init();
	 </script>

<?php endif ?>

	
</body>
</html>