<?php

class categoriaController extends Controller
{
	private $categoria;

	public function __construct()
	{
		parent::__construct();
		$this->categoria = $this->loadModel('categoria');
	}

	public function index(){
		$post = $this->loadModel('publicar');

		$this->view->titulo = 'Categoria';
		$this->view->post = $post->getPosts();
		$this->view->categorias = $post->getCategorias();

		//Enviar un el parametro titulo a la vista
		$this->view->titulo = 'Mercadito | Main';
		$this->view->renderizar('index');
	}
}