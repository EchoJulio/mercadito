<?php

class categoriaController extends Controller
{
	private $categoria; 

	public function __construct()
	{
		parent::__construct();
		$this->categoria = $this->loadModel('categoria');
	}

	public function index($busqueda = false, $pagina = false){
		
		$post = $this->loadModel('post');

		//Validamos que se haya enviado un numero de pagina

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			//Parseamos la variable pagina para
			//que sea de tipo entero
			$pagina = (int) $pagina;
		}

		$busqueda = (string) $busqueda;
		// $busqueda = str_replace("-"," - ",$busqueda);
		// $busqueda = str_replace("_"," ",$busqueda);
		$this->view->assign('titulo','Categoria');
		$limite = 20;
		$this->getLibrary('paginador');
		$paginador = new Paginador();

		if(strlen($busqueda) > 3){

			
			$this->view->assign('categorias',$post->getCategorias());
			$this->view->assign('provincias',$post->getProvincias());
			$this->view->assign('subcategorias',$post->getSubCategorias());
			$posts = $paginador->paginar($post->getPostFilter($busqueda), $pagina, $limite);
			$this->view->assign('post',$paginador->paginar($posts, $pagina, $limite));
			$this->view->assign('paginacion',$paginador->getView('prueba', 'categoria/index/'.$busqueda));
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
		
			$this->view->assign('images',$img_filtradas);

			//Enviar un el parametro titulo a la vista
			$this->view->renderizar('index','Buscar Anuncio');

		}
		else{
			
			$pagina = $busqueda;
			$this->view->assign('categorias',$post->getCategorias());
			$this->view->assign('provincias',$post->getProvincias());
			$this->view->assign('subcategorias',$post->getSubCategorias());
			$posts = $paginador->paginar($post->getPosts(), $pagina, $limite);
			$this->view->assign('post',$posts);
			$this->view->assign('paginacion',$paginador->getView('prueba','categoria/index'));
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
		
			$this->view->assign('images',$img_filtradas);
		

			//Enviar un el parametro titulo a la vista
			$this->view->renderizar('index','Buscar Anuncio');
		}
		
	}

	public function buscar($busqueda, $pagina = false){

		$post = $this->loadModel('post');

		//Validamos que se haya enviado un numero de pagina

		if (!$this->filtrarInt($pagina)) {
			$pagina = false;
		}else{
			//Parseamos la variable pagina para
			//que sea de tipo entero
			$pagina = (int) $pagina;
		}

		$busqueda = (string) $busqueda;
		$this->getLibrary('paginador');
		$paginador = new Paginador();
		$limite = 10;
		 $this->view->assign('post',$paginador->paginar($post->getPostFilter($busqueda), $pagina, $limite));
		 $this->view->assign('paginacion',$paginador->getView('prueba', 'categoria/index'));
		 $this->view->assign('categorias',$post->getCategorias());
		 $this->view->assign('provincias',$post->getProvincias());
		 $this->view->assign('subcategorias',$post->getSubCategorias());
		 $this->view->assign('images',$post->getImg());

		//Enviar un el parametro titulo a la vista
		$this->view->renderizar('index');
		
	}
}