<?php

class indexController extends Controller{

	public function __construct(){
		//Ejecutamos en metodo constructor de la clase padre y
		//asi poder tener dispoble la vista que le pertenece a esta clase
		parent::__construct();
	}
	public function index(){

		$post = $this->loadModel('publicar');
		
		$this->view->post = $post->getPosts();
		$this->view->categorias = $post->getCategorias();
		$this->view->subCategorias = $post->getSubCategorias();

		//Enviar un el parametro titulo a la vista
		$this->view->titulo = 'Mercadito | Main';

		//Llamamos la vista perteneciente a este metodo
		$this->view->renderizar('Index','inicio');
	}
}