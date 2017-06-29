$(document).ready(function(){

	$('#form-user-registrar').validate({
			rules:{
				nombre:{
					required: true
				},
				usuario:{
					required: true,
					maxlength: 8
				},
				email:{
					required: true,
					email: true
				},
				pass:{
					required: true,
					maxlength: 12,
					minlength: 4,

				},
				confirmar:{
					required: true,
					maxlength: 12,
					minlength: 4,
					equalTo:'#pass'
				}
			},
			messages:{
				nombre:{
					required: 'Campo obligatorio'
				},
				usuario:{
					required: 'Campo obligatorio',
					maxlength: 'Campo solo acepta maximo 8 caracteres'
				},
				email:{
					required: 'Campo obligatorio',
					email: 'Favor ingresar un correo valido'
				},
				pass:{
					required: 'Campo obligatorio',
					maxlength: 'Campo solo acepta maximo 12 caracteres',
					minlength: 'Campo solo acepta minimo 4 caracteres'
				},
				confirmar:{
					required: 'Campo obligatorio',
					maxlength: 'Campo solo acepta maximo 12 caracteres',
					minlength: 'Campo solo acepta minimo 4 caracteres',
					equalTo: 'Contraseña no son iguales'
				}
			}
		});
});