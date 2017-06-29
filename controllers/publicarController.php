<?php

class publicarController extends Controller{

	private $post;

	public function __construct(){

		parent::__construct();
		$this->post = $this->loadModel('publicar');
	}

	public function index(){
		Session::acceso('usuario');
		$this->view->titulo = 'Publicar Anuncio';
		$this->view->categorias = $this->post->getCategorias();
		$this->view->subCategorias = $this->post->getSubCategorias();
		$this->view->provincias = $this->post->getProvincias();
		
		// if ($this->getPostParam('enviar') == 1) {
		// 	$this->post->add(
		// 			$this->getPostParam('title'),
		// 			$this->getPostParam('description'),
		// 			$this->getPostParam('price'),
		// 			$this->getPostParam('estado'),
		// 			Session::get('id'),
		// 			$this->getPostParam('subCategory'),
		// 			$this->getPostParam('privince'),
		// 			$this->getPostParam('moneda')
		// 				);
		// }
		
		$this->view->renderizar('index','publicar');

	}

}