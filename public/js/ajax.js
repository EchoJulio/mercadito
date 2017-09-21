$(document).ready(function(){


	$('.modal-footer button#btn-ok').on('click',function(e){
		e.preventDefault();
		var elemento = e.target;
		elemento = $(elemento);
		var padre = elemento.parent().parent().parent().parent().parent().parent().parent();
		//Cambiar direcciones absolutas al momento de subir al servidor web
		var direccion = '/mercadito/perfil/deletePost';
		var id = elemento.attr('name');
		$.ajax({
			type:"POST",
			content: padre,
			url:direccion,
			data:{'id':id},
			success:function(datos){
				var respuesta = JSON.parse(datos);
				if (respuesta.mensaje == 'ok') {
					padre.fadeOut('300',function(){(this).remove();});
					
				}
			},
			datatype: 'json'
		});



	});

	$('#btn-fav').on('click',function(e){

		e.preventDefault();
		var btn = e.target;
		//var id_user = $('#id_user').text();
		btn = $(btn);
		var id_post = btn.attr('name');
		//alert('Click'+btn.attr('name')+id_user);
		var texto = btn.text();
		if (texto == 'grade Agregar a Favoritos') {
			//Cambiar direcciones absolutas al momento de subir al servidor web
			var direccion = '/mercadito/ajax/favorito';
				$.ajax({
				type:"POST",
				url:direccion,
				data:{'id_post':id_post},
				success:function(datos){
					var respuesta = JSON.parse(datos);
					if (respuesta.mensaje == 'ok') {
						btn.addClass('btn-raised');
						btn.text('');
						btn.append("<i class='material-icons'>grade</i> En Favoritos");
						$('#mensaje').text('Este Anuncio se sido agregado a tus favoritos');
						$('#myModal').modal('show');
						//btn.text('En Favoritos');
					
					}
				},
				datatype: 'json'
			});
		}
		if (texto == 'highlight_off Eliminar De Favoritos'){
			//Cambiar direcciones absolutas al momento de subir al servidor web
			var direccion = '/mercadito/ajax/eliminar_favorito';
			$.ajax({
				type:"POST",
				url:direccion,
				data:{'id_post':id_post},
				success:function(datos){
					var respuesta = JSON.parse(datos);
					if (respuesta.mensaje == 'ok') {
						$('#mensaje').text('Este Anuncio se sido eliminado de tus favoritos');
						$('#myModal').modal('show');
						
						btn.text('');
						btn.append("<i class='material-icons'>grade</i> Agregar a Favoritos");
						btn.removeClass('btn-raised btn-danger').addClass('btn-success');
						
						//btn.text('En Favoritos');
						
					}
				},
				datatype: 'json'
			});
		}
	});

	$('#btn-fav').on('mouseover',function(e){
		//alert('por arriba');

		var btn = e.target;
		btn = $(btn);
		var texto = btn.text();
		//alert(texto);
		if (texto == 'grade En Favoritos') {
			btn.text('');
			btn.append("<i class='material-icons'>highlight_off</i> Eliminar De Favoritos");
			btn.removeClass('btn-success').addClass('btn-danger');
			//alert(btn.text());
		}else{
			return;
		 }
		
	});

	$('#btn-fav').on('mouseout',function(e){
		//alert('por arriba');

		var btn = e.target;
		btn = $(btn);
		var texto = btn.text();
		if (texto == 'highlight_off Eliminar De Favoritos') {
			btn.text('');
			btn.append("<i class='material-icons'>grade</i> En Favoritos");
			btn.removeClass('btn-danger').addClass('btn-success');
		}else{ return;}
	});

})
