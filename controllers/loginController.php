<?php 

/**
* 
*/
class LoginController extends Controller
{
	private $login;
	
	public function __construct()
	{
		parent::__construct();
		$this->login = $this->loadModel('user');
	}

	public function index(){
		if (Session::get('autenticado')) {
			$this->redireccionar();
		}
		$this->view->assign('titulo', 'Iniciar Sesion');
		if ($this->getInt('enviar') == 1) {
			$this->view->assign('datos',$_POST);

			if (!$this->getAlphaNum('usuario')) {
				$this->view->assign('mensajeError','Debe introducir un usuario');
				$this->view->renderizar('index','login');
				exit;
			}

			if (!$this->getSql('pass')) {
				$this->view->assign('mensajeError','Debe introducir una contraseña');
				$this->view->renderizar('index','login');
				exit;
			}

			$row = array();
			$row = $this->login->login($this->getAlphaNum('usuario'),$this->getSql('pass'));


			if (count($row) <= 1) {
				$this->view->assign('mensajeError','Usuario y/o Contraseña incorrectos');
				$this->view->renderizar('index','login');
				exit;
			}
			//**VALIDACION SIN TERMINAR**
			// if ($row['validate'] != 1) {
			// 	$this->view->errorValidar = 'Usuario un no ha sido validado';
			// 	$this->view->renderizar('index','login');
			// 	exit;
			// }

			//variables de sessiones
			Session::set('autenticado',true);
			Session::set('level',$row['perfil']);
			Session::set('usuario',$row['user']);
			Session::set('nombre',$row['name']);
			Session::set('id',$row['id']);
			Session::set('tiempo',time());

			$this->redireccionar();
		}

		$this->view->renderizar('index','login');
	}

	public function cerrar(){
		Session::destroy();
		$this->redireccionar();
	}

}