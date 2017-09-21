<?php

class errorController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->view->assign('titulo', 'Error');
		$this->view->assign('mensaje',$this->getError());

		//Mi metodo para llamar las vistas
		$this->view->renderizar('index','error');
	}

	

	public function access($codigo){
		$this->view->assign('titulo', 'Error');
		$this->view->assign('mensaje',$this->getError($codigo));

		//Mi metodo para llamar las vistas
		$this->view->renderizar('access');
	}
	
	private function getError($codigo  = false){
		//Verificamos que se haya enviado un error
		if ($codigo) {
			$codigo = $this->filtrarInt($codigo);
		}else{
			$codigo = 'default';
		}	
		//Array asoc con la lista de errores que puedo solicitar
		//por la url usado la variable codigo
		$error['default'] = 'Oops! Ha ocurrido un error y la pagina no puede mostrarse.';
		$error['5050'] = '!Acceso restringido! <br> <small>Puedes probar con uno de los links de abajo</small>';
		$error['8080'] = 'El tiempo de sesion se a agotado';
		$error['1010'] = 'La direccion no esta disponible';
		$error['2020'] = 'Parece que quieres hacer una publicacion pero, debes logearte antes o registrarte prueba con uno de los enlaces siguientes:';


		//Validamos que el error enviado exista en la lista y de ser asi lo retornamos
		if (array_key_exists($codigo, $error)) {
			return $error[$codigo];
		}else{
			//si el error no se encuentro en la lista retornamos el error por defecto
			return $error['default'];
		}
	}
}