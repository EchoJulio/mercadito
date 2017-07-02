<?php

class postController extends Controller{

	private $post;
	private $user;

	public function __construct(){

		parent::__construct();
		$this->post = $this->loadModel('post');
		$this->user = $this->loadModel('user');
	}

	public function index(){
		Session::acceso('usuario');
		$this->view->titulo = 'Publicar Anuncio';
		$this->view->categorias = $this->post->getCategorias();
		$this->view->subCategorias = $this->post->getSubCategorias();
		$this->view->provincias = $this->post->getProvincias();
		
		 if ($this->getPostParam('enviar') == 1) {
		 	$this->view->datos = $_POST;

		 	if (!$this->getPostParam('title')) {
		 		$this->view->mensaje = 'No ha ingresado ningun titulo.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('description')) {
		 		$this->view->mensaje = 'La descripcion no de la publicacion no puede estar vacia.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('price')) {
		 		$this->view->mensaje = 'La descripcion no de la publicacion no puede estar vacia.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarImg($_FILES)) {
		 		$this->view->mensaje = 'Parece que no haz agregardo ninguna imagen o haz agregado mas de 5 imagenes.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarTamanoImg($_FILES)) {
		 		$this->view->mensaje = 'Parece que alguna de las imagenes tiene un peso de 5MB, prueba con una con menor peso.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarFormatoImg($_FILES)) {
		 		$this->view->mensaje = 'Parece que alguna de las imagenes tiene un formato no permitido.';
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	$this->post->add(
					$this->getPostParam('title'),
					$this->getPostParam('description'),
					$this->getPostParam('price'),
					$this->getPostParam('estado'),
					Session::get('id'),
					$this->getPostParam('subCategory'),
					$this->getPostParam('privince'),
					$this->getPostParam('moneda')
						);

			
			$this->post->saveImg($_FILES);

			$this->view->mensajeExito = "Post publicado de manera exitosa";
		}
		 
		
		$this->view->renderizar('index','publicar');

	}

	public function ver($id = false){

		$id = (int) $id;
		$this->view->id = $id;
		$this->view->post =  $this->post->getPost($id);
		$this->view->imgs =  $this->post->getImgById($id);
		$this->view->user = $this->post->getPostUser($id);
		$this->view->renderizar('ver');
	}

	

}