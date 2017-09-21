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
		$this->view->assign('titulo','Publicar Anuncio');
		$this->view->assign('categorias',$this->post->getCategorias());
		$this->view->assign('subCategorias', $this->post->getSubCategorias());
		$this->view->assign('provincias',$this->post->getProvincias());
		
		 if ($this->getPostParam('enviar') == 1) {
		 	

		 	if (!$this->getPostParam('title')) {
		 		$this->view->assign(mensaje,'No ha ingresado ningun titulo.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('description')) {
		 		$this->view->assign('mensaje','La descripcion no de la publicacion no puede estar vacia.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('price')) {
		 		$this->view->assign('mensaje','La descripcion no de la publicacion no puede estar vacia.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarImg($_FILES)) {
		 		$this->view->assign('mensaje','Parece que no haz agregardo ninguna imagen o haz agregado mas de 5 imagenes.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarTamanoImg($_FILES)) {
		 		$this->view->assign('mensaje','Parece que alguna de las imagenes tiene un peso de 5MB, prueba con una con menor peso.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->validarFormatoImg($_FILES)) {
		 		$this->view->assign('mensaje','Parece que alguna de las imagenes tiene un formato no permitido.');
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

			$this->view->assign('mensajeExito', "Post publicado de manera exitosa.");
		}
		 
		
		$this->view->renderizar('index','publicar');

	}

	public function ver($id = false){

		$id = (int) $id;
		$this->view->assign('titulo','Ver');
		$this->view->assign('id', $id);
		$this->view->assign('post', $this->post->getPost($id));
		$this->view->assign('imgs', $this->post->getImgById($id));
		$this->view->assign('user', $this->post->getPostUser($id));
		$this->view->renderizar('ver');
	}

	public function editar($id){
		Session::acceso('usuario');
		$id = (int) $id;
		$imgsToDelete = array();
		$this->view->assign('titulo', 'Edicion de anuncio');
		$this->view->assign('id', $id);
		$this->view->assign('categorias',$this->post->getCategorias());
		$this->view->assign('subCategorias', $this->post->getSubCategorias());
		$this->view->assign('provincias',$this->post->getProvincias());
		$this->view->assign('post', $this->post->getPost($id));
		$this->view->assign('imgs', $this->post->getImgById($id));
		$this->view->assign('user', $this->post->getPostUser($id));

		 if ($this->getPostParam('enviar') == 1) {
		 	//$this->view->assign('datos', $_POST);

		 	if (!$this->getPostParam('title')) {
		 		$this->view->assign(mensaje,'No ha ingresado ningun titulo.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('description')) {
		 		$this->view->assign('mensaje','La descripcion no de la publicacion no puede estar vacia.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (!$this->getPostParam('price')) {
		 		$this->view->assign('mensaje','La descripcion no de la publicacion no puede estar vacia.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	// if (!$this->validarImg($_FILES)) {
		 	// 	$this->view->assign('mensaje','Parece que no haz agregardo ninguna imagen o haz agregado mas de 5 imagenes.');
		 	// 	$this->view->renderizar('index','publicar');
		 	// 	exit;
		 	// }

		 	if (!$this->validarTamanoImg($_FILES) && isset($_FILES)) {
		 		$this->view->assign('mensaje','Parece que alguna de las imagenes tiene un peso de 5MB, prueba con una con menor peso.');
		 		$this->view->renderizar('index','publicar');
		 		exit;
		 	}

		 	if (isset($_FILES) && count($_FILES) > 1) {
		 		if (!$this->validarFormatoImg($_FILES)) {
			 		$this->view->assign('mensaje','Parece que alguna de las imagenes tiene un formato no permitido.');
			 		$this->view->renderizar('index','publicar');
			 		exit;
		 		}
		 	}

		 	//print_r($_POST);

		 	$this->post->edit(
		 			$id,
					$this->getPostParam('title'),
					$this->getPostParam('description'),
					$this->getPostParam('price'),
					$this->getPostParam('estado'),
					$this->getPostParam('subCategory'),
					$this->getPostParam('privince'),
					$this->getPostParam('moneda')
						);
		 	$i = 0;
		 	foreach ($_POST as $key => $value) {

		 		if (isset($_POST['imgToDelete' . $i])) {
		 			array_push($imgsToDelete, substr($_POST['imgToDelete' . $i], 0, strrpos($_POST['imgToDelete' . $i],'.')));
		 			array_push($imgsToDelete, substr($_POST['imgToDelete' . $i],strrpos($_POST['imgToDelete' . $i],'.')));
		 		}
		 		$i++;

		 	}

		 	$this->post->saveImg($_FILES, $id);
			$this->post->deleteImg($imgsToDelete);
			$this->redireccionar('perfil/mis_anuncios');
			//$this->view->assign('mensaje', "Tu anuncio a sido actualizado.");
		}

		$this->view->renderizar('editar');
	}

	

}