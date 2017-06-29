<?php

class userController extends Controller{

	private $user;

	public function __construct(){
		//Ejecutamos en metodo constructor de la clase padre y
		//asi poder tener dispoble la vista que le pertenece a esta clase
		parent::__construct();
		$this->user = $this->loadModel('user');
	}

	public function index(){
		//limitamos el acceso solo a los usuarios con el nivel 
		//de administrador para acceder a este metodo
		Session::acceso('admin');
		//
		$this->view->users = $this->user->getUsers();
		//Enviar un el parametro titulo a la vista
		$this->view->titulo = 'Lista de Usuarios Registrados';

		//Llamamos la vista perteneciente a este metodo
		$this->view->renderizar('Index','usuarios');
	}

	public function registrar(){
		//le enviamos el arreglo de los ni
	 	//Session::accesoEstricto(array('usuario'));

			//Enviar un el parametro titulo a la vista
				$this->view->titulo = 'Registrar';

				//Enviamos el archivo .js correspondiente a la vista
				$this->view->setJs(array('registrar'));
				 
			 	if ($this->getInt('id') == 1) {

			 		$this->view->datos = $_POST;
			 		if (!$this->getTexto('nombre')) {
					 	$this->view->errorNombre = 'Ops! Ingrese un nombre valido';
						$this->view->renderizar('registrar','usuarios');
						exit;
					}
			 	

				 if (!$this->getTexto('usuario')) {
				 	$this->view->errorUsuario = 'Ops! Ingrese un usuario valido';
					$this->view->renderizar('registrar','usuarios');
					exit;
				 }

				 if (!$this->getEmail('email')) {
				 	$this->view->errorEmail = 'Ops! Ingrese un email valido';
					$this->view->renderizar('registrar','usuarios');
					exit;
				 }

				 if (!$this->getTexto('pass')) {
				 	$this->view->errorPass = 'Ops! Ingrese una contrseña valida';
					$this->view->renderizar('registrar','usuarios');
					exit;
				 }

				 if (!$this->getTexto('confirmar') ) {

				 	$this->view->errorConfirmar = 'Ops! Ingrese una contrseña valida';
					$this->view->renderizar('registrar','usuarios');
					exit;
				 }

				 if ($this->getTexto('pass') != $this->getTexto('confirmar')) {
					$this->view->errorConfirmar = 'Ops! las contrseña no coinciden';
					$this->view->renderizar('registrar','usuarios');
					exit;
				}

				$pass = $this->getTexto('pass');
				$pass_hash = password_hash($pass,PASSWORD_BCRYPT);
				//Consultamos la pass con la funcion:
				//password_verify()
				
					if($this->user->add(
									$this->getTexto('nombre'),
									$this->getTexto('usuario'),
									$pass_hash,
									$this->getEmail('email')
									)){
						
						$this->redireccionar('user');
					
					}


			}
				
			//Llamamos la vista perteneciente a este metodo
			$this->view->renderizar('registrar','usuarios');
			
			
	}


	public function editar($id){
		//limitamos el acceso solo a los usuarios con el nivel 
		//de administrador
		Session::acceso('admin');
		//

		//Metodo para editar al usuario

		//Primero validamos que el parametro recibido
		//el que se recibe via URL sea entero
		if (!$this->filtrarInt($id)) {
			$this->redireccionar('user');
			//De no ser un entero se redirecciona a la lista de 
			//usuarios
		}

		//en este paso varificamos que el metodo getUser
		//nos devuelva un usuario de lo contrario redireccionamos a 
		// la lista
		if (!$this->user->getUser($this->filtrarInt($id))) {
			$this->redireccionar('user');
		}
		//Establecemos el titulo de la vista
		$this->view->titulo = 'Editar Usuario';

		//Establecemos el archivo .js para la vista
		//que en este caso sera el mismo que para registrar
		$this->view->setJs(array('registrar'));

		if ($this->getInt('id') == 1) {

		 	

		 		if (!$this->getTexto('nombre')) {
				 	$this->view->errorNombre = 'Ops! Ingrese un nombre valido';
					$this->view->renderizar('editar','usuarios');
					exit;
				}
			 	

				 if (!$this->getTexto('usuario')) {
				 	$this->view->errorUsuario = 'Ops! Ingrese un usuario valido';
					$this->view->renderizar('editar','usuarios');
					exit;
				 }

				 if (!$this->getEmail('email')) {
				 	$this->view->errorEmail = 'Ops! Ingrese un email valido';
					$this->view->renderizar('editar','usuarios');
					exit;
				 }

				 if($this->user->edit(
									$this->filtrarInt($id),
									$this->getTexto('nombre'),
									$this->getTexto('usuario'),
									$this->getEmail('email')
									)){
						
						$this->redireccionar('user');
					
					}

		}

					


			//Enviamos el Array con los datos del usuario
			//que consultamos desde la BD
			$this->view->datos = $this->user->getUser($this->filtrarInt($id));

			//Llamamos la vista perteneciente a este metodo
			$this->view->renderizar('editar','usuarios');



		}

		public function eliminar($id){
		//limitamos el acceso solo a los usuarios con el nivel 
		//de administrador
		Session::acceso('admin');
		//

			//Metodo para eliminar al usuario

			//Primero validamos que el parametro recibido
			//el que se recibe via URL sea entero
			if (!$this->filtrarInt($id)) {
				$this->redireccionar('user');
				//De no ser un entero se redirecciona a la lista de 
				//usuarios
			}

			//en este paso varificamos que el metodo getUser
			//nos devuelva un usuario de lo contrario redireccionamos a 
			// la lista
			if (!$this->user->getUser($this->filtrarInt($id))) {
				$this->redireccionar('user');
			}

			$this->user->delete($this->filtrarInt($id));
			$this->redireccionar('user');
		
		}
			


			
}