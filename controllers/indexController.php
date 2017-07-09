<?php

class indexController extends Controller{

	public function __construct(){
		//Ejecutamos en metodo constructor de la clase padre y
		//asi poder tener dispoble la vista que le pertenece a esta clase
		parent::__construct();
	}
	public function index(){

		$post = $this->loadModel('post');
		$this->view->categorias = $post->getCategorias();
		$this->view->subCategorias = $post->getSubCategorias();
		$this->view->images = $post->getImg();

		//Llamamos la vista perteneciente a este metodo
		$this->getLibrary('paginador');
		$paginador = new Paginador();
		$limite = 6;
		$pagina = 0;
		 $this->view->post = $paginador->paginar($post->getPosts(), $pagina, $limite);
		 // $this->view->paginacion = $paginador->getView('prueba','categoria/index');
		 $this->view->images = $post->getImg();

		//Enviar un el parametro titulo a la vista
		$this->view->titulo = 'Mercadito';
		$this->view->renderizar('index','inicio');
		
	}


}