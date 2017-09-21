<?php

class indexController extends Controller{

	public function __construct(){
		//Ejecutamos en metodo constructor de la clase padre y
		//asi poder tener dispoble la vista que le pertenece a esta clase
		parent::__construct();
	}
	public function index(){

		$post = $this->loadModel('post');
		$this->view->assign('subCategorias',$post->getSubCategorias());

		$categorias = array();
		$this->view->assign('categorias',$post->getCategorias(3));
		//Llamamos la vista perteneciente a este metodo
		$this->getLibrary('paginador');
		$paginador = new Paginador();
		$limite = 6;
		$pagina = 0;
		
		$posts = $post->getPosts(6);
		$img = $post->getImg();
		$contador = 0;
		$img_filtradas =array();

		foreach ($posts as $row => $value) {

			foreach ($img as $row => $img_value) {

				if ($value['id'] == $img_value['id_post'] && $contador == 0 ) {

					$img_filtradas[]= array(
											'format' => $img_value['format'],
											'title' => $img_value['title'],
											'id_post' => $img_value['id_post']
											);
					$contador++;
				}
			}

			$contador = 0;
		}
		$this->view->assign('posts',$post->getPosts(6));
		$this->view->assign('images',$img_filtradas);

		//Enviar un el parametro titulo a la vista
		$this->view->assign('titulo','Mercadito');
		$this->view->renderizar('index','inicio');
		
	}


}