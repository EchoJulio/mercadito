<?php
require_once ROOT. 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';
class View extends Smarty{

	private $controlador;
	private $js;

	public function __construct(Request $peticion){
		//Obtenemos el nombre controlador solicitado via url
		parent::__construct();
		$this->controlador = $peticion->getControlador();
		$this->js = array();
	}

	public function renderizar($vista, $item = false){

		//directorios de configuracion de la lib smarty
		$this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
		$this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
		$this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
		$this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;

		//Metodo para llamar a las vistas.
		//El parametro item es usado para saber cambiar la clase active en el menu

		$js = array();
		$menu_right = array();

		//Array de las opciones del menu
		$menu_left = array(

			array(
					'id' => 'inicio',
					'titulo' => 'Inicio',
					'enlace' => BASE_URL
				),
			array(
					'id' => 'publicar',
					'titulo' => 'Publicar',
					'enlace' => BASE_URL . 'post'
				),
			array(
					'id' => 'buscar',
					'titulo' => 'Buscar Anuncio',
					'enlace' => BASE_URL . 'categoria'
				)
			
		);

		//Cuando el usuario esta autenticado
		//Generamos este menu
		if (Session::get('autenticado')) {
			$menu_right[] = array(
					'id' => 'login',
					'titulo' => 'Cerrar Sesion',
					'enlace' => BASE_URL . 'login/cerrar'
				);
		}else{
			//Si no esta autenticado
			//Generamos este menu
			$menu_right[] = array(
					'id' => 'login',
					'titulo' => 'Iniciar Sesion',
					'enlace' => BASE_URL . 'login'
				);
			$menu_right[] = array(
					'id' => 'registro',
					'titulo' => 'Registro',
					'enlace' => BASE_URL . 'registro'
				);
		}
		
		//array con los pluggins
		if (count($this->js)) {
			$js = $this->js;
		}
			$_params = array(
				
				'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/' . 'css/',
				'ruta_img' =>BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/' . 'img/',
				'ruta_js' =>BASE_URL . 'public/' . 'js/',
				'plugins' =>BASE_URL . 'plugins/',
				'menu_left' => $menu_left,
				'menu_right' => $menu_right,
				'item' => $item,
				'js' => $js,
				'root' => BASE_URL,
				'configs' => array(
					'app_name' => APP_NAME,
					'app_slogan' => APP_SLOGAN,
					'app_company' => APP_COMPANY
					)

			);
		
		

		//Aqui generemos el nombre del archivo que contiene la vista solicitada
		$rutaView = ROOT . 'views' . DS . $this->controlador . DS . $vista . '.tpl';
		
		//Verificamos si el archivo  existe o puede user ejecutado
		if (is_readable($rutaView)) {

			if ($rutaView == ROOT . 'views' . DS . 'index'. DS . 'index' . '.tpl') {

				$this->assign('_contenido', $rutaView);
				$this->assign('_layoutParams', $_params);
				$this->display('template_portada.tpl');

				

			}else{
				$this->assign('_contenido', $rutaView);
				$this->assign('_layoutParams', $_params);
				$this->display('template.tpl');
			}
				

		}else{
			throw new Exception("Error: con la vista solicitada");
			
		}

		
	}

	public function setJs(array $js){

		if (is_array($js) && count($js)) {
			
			for ($i=0; $i < count($js); $i++) { 

				$this->js[] = BASE_URL . 'views/' . $this->controlador . '/js/' . $js[$i] . '.js';
			}
		}else{
			throw new Exception("Error: Al cargar el archivo J");
			
		}
	}
}