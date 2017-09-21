$(document).ready(function(){

	$('#imagenes').change(function(e){
		var files = e.target.files;
		var output = [];

		

		for (var i = 0, f; f = files[i]; i++) {
  			
  			if (!f.type.match('image.*')) {
  				continue;
  			}
  			if (files.length  > 5) {
  				var mensaje = '<p class="text-warning">Solo puedes Agregar 5 imagenes</p>';
  				//mensaje.attr('text','Solo puedes Agregar 5 imagenes';
  				$('#mensaje').append(mensaje);
  				return false;
  			}
  			var reader = new FileReader();
  			$('#foto'+i+'').remove();
  			reader.onload = (function(theFile){

  				return function(e){

  					var span = document.createElement('span');
  					span.innerHTML = ['<div class="col-md-2"><img class="img-thumbnail" style="width: 80px; height: 80px; margin: 5px;" src="' , e.target.result, '"title="', escape(theFile.name), '"/></div>'].join('');
  					
  					document.getElementById('imgList').insertBefore(span, null);
  				};
  			})(f);

  			reader.readAsDataURL(f);

  		}
	});

  $('.close').on('click',function(e){
    e.preventDefault();
    var buton = e.target;
    buton = $(buton);
    buton = buton.parent().parent().parent();
    buton.remove();

  });

})