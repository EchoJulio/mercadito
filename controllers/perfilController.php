<?php

class perfilController extends Controller
{
	
	private $post;
	private $ajax;
	private $user;
	private $registro;

	public function __construct(){
		parent::__construct();
		$this->post  = $this->loadModel('post');
		$this->user = $this->loadModel('user');
		$this->ajax = $this->loadModel('ajax');
		$this->registro = $this->loadModel('registro');
		$this->getLibrary('paginador');
	}

	public function index(){

		Session::acceso('usuario');
		$this->view->assign('titulo','Perfil');
		$this->view->assign('user',$this->user->getUser(Session::get('id')));

		if ($this->getInt('enviar') == 1) {
			

			if ($this->validarNombre('nombre')) {
				$this->view->assign('errorNombre', 'Debe introducir su nombre valido');
				$this->view->renderizar('index');
				exit;
			}

			if (!$this->getSql('nombre')) {
				$this->view->assign('errorNombre', 'Debe introducir su nombre');
				$this->view->renderizar('index');
				exit;
			}

			if ($this->noEspacio('usuario')) {
				$this->view->assign('errorUsuario','El usuario no puede tener espacios en blanco');
				$this->view->renderizar('index');
				exit;
			}

			if ($this->validarUsuario('usuario')) {
				$this->view->assign('errorUsuario','El usuario tiene caracteres invalidos');
				$this->view->renderizar('index');
				exit;
			}
			
			if (!$this->getAlphaNum('usuario')) {
				$this->view->assign('errorUsuario','Debe introducir su usuario: ' . $this->getAlphaNum('usuario'));
				$this->view->renderizar('index');
				exit;
			}

			if (!$this->validarTelefono('telefono')) {
				$this->view->assign('errorTelefono','Debe introducir un Telefono Valido');
				$this->view->renderizar('index');
				exit;
			}

			
			if ($this->registro->verificarUsuario($this->getAlphaNum('usuario'))) {
				$this->view->assign('errorUsuario','El usuario: ' . $this->getAlphaNum('usuario') . ' ya existe');
				$this->view->renderizar('index');
				exit;
			}



			
			//Libreria para enviar correos
			$this->getLibrary('class.phpmailer');

			//Instanciamos la clase para enviar los email
			$mail = new PHPMailer();
			$id = Session::get('id');
			//Registrar el usuario
			$this->registro->editarUsuario(
				$this->getPostParam('nombre'),
				$this->getAlphaNum('usuario'),
				$this->getPostParam('telefono'),
				$id
				);


			// $usuario = $this->registro->verificarUsuario($this->getAlphaNum('usuario'));
			// $mail->From = MAIL_COMPANY;
			// $mail->FromName = APP_NAME;
			// $mail->Subject  = 'Activacion de cuenta';
			// $mail->Body = 'Hola <strong>' . $this->getSql('usuario') . '</strong>,<p>Se ha registrado en www.mercadito.com para activar su cuenta haga click sobre el siguiente enlace: <br>
			// 	<a href="'. BASE_URL.'registro/activar/'. $usuario['id'] .'/'.$usuario['codigo'].'"><h3>Activar Cuenta</h3></a></p>';
			
			// $mail->AltBody = 'Su servidor de correo no soporta HTML';
			// $mail->addAddress($this->getPostParam('email'));

			// if (!$mail->send()) {
			//     $this->view->assign('mensaje',"Mailer Error: " . $mail->ErrorInfo);
			// } else {
			//     $this->view->assign('mensaje', "Muy bien! el registro fue exitoso, <b>revise su email para activar su cuenta</b>");
			// }
			$this->view->assign('mensaje','Perfil Actualizado');
				

				//Avisamos que el registro fue exitoso
				//Enviando a la vista un mensaje de exito
			$this->view->renderizar('index');
				exit;

			
		}



		$this->view->renderizar('index');
	}

	public function mis_anuncios($pagina = false){

		if ($pagina) {
			$pagina = (string) $pagina;
		}else{
			$pagina =false;
		}
		Session::acceso('usuario');
		$paginador = new Paginador();
		$this->view->assign('titulo','Mis Anuncios');
		$limite = 5;
		$this->view->assign('posts', $paginador->paginar($this->post->getPostByUser(Session::get('id')), $pagina, $limite));
		$this->view->assign('paginacion',$paginador->getView('prueba', 'perfil/mis_anuncios'));


		$this->view->renderizar('anuncios');
	}

	public function favoritos($pagina = false){
		if ($pagina) {
			$pagina = (string) $pagina;
		}else{
			$pagina =false;
		}
		
		Session::acceso('usuario');
		$paginador = new Paginador();
		$this->view->assign('titulo','Favoritos');
		$limite = 5;
		$this->view->assign('posts', $paginador->paginar($this->post->getFavPostByUser(Session::get('id')), $pagina, $limite));
		$this->view->assign('paginacion',$paginador->getView('prueba', 'perfil/Favoritos'));


		$this->view->renderizar('favoritos');
	}

	public function deletePost(){
		if ($this->getPostParam('id')) {
			;
			echo json_encode($this->ajax->deletePost($this->getPostParam('id')));
		}
		
	}
}