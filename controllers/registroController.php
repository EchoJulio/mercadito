 <?php

class registroController extends Controller{

	private $registro;

	public function __construct(){

		parent::__construct();
		$this->registro = $this->loadModel('registro');
	}

	public function index(){
		//Si el usuario esta logeado no puede entrar al registro de usuarios
		if (Session::get('autenticado')) {
			$this->redireccionar();
		}

		$this->view->assign('titulo','Registro');

		if ($this->getInt('enviar') == 1) {
			
			$this->view->assign('datos',$_POST);

			if ($this->validarNombre('nombre')) {
				$this->view->assign('errorNombre', 'Debe introducir su nombre valido patron expresion');
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

			if (!$this->validarEmail($this->getPostParam('email'))) {
				$this->view->assign('errorEmail','Debe introducir un email valido');
				$this->view->renderizar('index');
				exit;
			}

			if ($this->registro->verificarEmail($this->getPostParam('email'))) {
				//Avisamos que el registro fue exitoso
				//Enviando a la vista un mensaje de exito
				$this->view->assign('errorEmail','Este E-mail ya esta registrado');
				$this->view->renderizar('index');
				exit;
			}

			if (!$this->getSql('pass')) {
				$this->view->assign('errorPass','Debe introducir su contraseña');
				$this->view->renderizar('index');
				exit;
			}

			if ($this->getPostParam('pass') != $this->getPostParam('confirmar')) {
				$this->view->assign('errorPass','La contraseñas no coinciden');
				$this->view->renderizar('index');
				exit;
			}

			
			//Libreria para enviar correos
			$this->getLibrary('class.phpmailer');

			//Instanciamos la clase para enviar los email
			$mail = new PHPMailer();

			//Registrar el usuario
			$this->registro->registrarUsuario(
				$this->getPostParam('nombre'),
				$this->getAlphaNum('usuario'),
				$this->getPostParam('pass'),
				$this->getPostParam('email'),
				$this->getPostParam('telefono')
				);


			$usuario = $this->registro->verificarUsuario($this->getAlphaNum('usuario'));
			$mail->From = MAIL_COMPANY;
			$mail->FromName = APP_NAME;
			$mail->Subject  = 'Activacion de cuenta';
			$mail->Body = 'Hola <strong>' . $this->getSql('usuario') . '</strong>,<p>Se ha registrado en www.mercadito.com para activar su cuenta haga click sobre el siguiente enlace: <br>
				<a href="'. BASE_URL.'registro/activar/'. $usuario['id'] .'/'.$usuario['codigo'].'"><h3>Activar Cuenta</h3></a></p>';
			
			$mail->AltBody = 'Su servidor de correo no soporta HTML';
			$mail->addAddress($this->getPostParam('email'));

			if (!$mail->send()) {
			    $this->view->assign('mensaje',"Mailer Error: " . $mail->ErrorInfo);
			} else {
			    $this->view->assign('mensaje', "Muy bien! el registro fue exitoso, <b>revise su email para activar su cuenta</b>");
			}

				

				//Avisamos que el registro fue exitoso
				//Enviando a la vista un mensaje de exito
				$this->view->renderizar('index');
				exit;

				//Vaciamos el array
				$this->view->assign('datos', false);
			
		}

		$this->view->renderizar('index');

	}

	public function activar($id, $codigo){
		if (isset($id) || isset($codigo)) {
			$id = (int) $id;
			$codigo = (int) $codigo;
		}else{
			
			$this->redireccionar('error/access/1010');
		}
		if (!$this->filtrarInt($id) || !$this->filtrarInt($codigo)) {

			$this->view->assign('errorCuenta','Esta cuenta no existe');
			$this->view->renderizar('activar','registro');
			exit;
		}


		$row = $this->registro->getUsuario(
								$this->filtrarInt($id),
								 $this->filtrarInt($codigo)
								 );

		if (!$row) {
			$this->view->assign('errorUsuario','Esta cuenta no existe');
			$this->view->renderizar('activar');
			exit;
		}
		//$this->view->datos = $row;
		if ($row['validate'] == 1) {
			$this->view->assign('errorValidar','Esta cuenta ya ha sido activada');
			$this->view->renderizar('activar');
			exit;
		}

		$this->registro->activarUsuario(
						$this->filtrarInt($id),
						$this->filtrarInt($codigo)
						);

		$row = $this->registro->getUsuario(
								$this->filtrarInt($id),
								 $this->filtrarInt($codigo)
								 );

		if ($row['validate'] == 0) {
			$this->view->assign('errorActivar','Erro al activar la cuenta intente mas tarde');
			$this->view->renderizar('activar');
			exit;
		}

		$this->view->assign('mensaje','Su cuenta ha sido activada');
		$this->view->renderizar('activar');
	}
}