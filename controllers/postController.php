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

			if (isset($_FILES)) {
					if ($this->post->saveImg($_FILES)) {

					$this->view->mensaje = "fotos guardadas";

				}else{
					$this->view->mensaje = "Error fotos guardadas";
				}
			}
			
			$this->view->mensaje = "Post publicado de manera exitosa";
		 }
		
		$this->view->renderizar('index','publicar');

	}

	public function ver($id = false){
		Session::acceso('usuario');

		$id = (int) $id;
		$this->view->id = $id;
		$this->view->post =  $this->post->getPost($id);
		$this->view->imgs =  $this->post->getImgById($id);
		$this->view->user = $this->post->getPostUser($id);
		$this->view->renderizar('ver');
	}

	

}