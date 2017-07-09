<?php

class categoriaController extends Controller
{
	private $categoria;

	public function __construct()
	{
		parent::__construct();
		$this->categoria = $this->loadModel('categoria');
	}

	public function index($busqueda = false,$pagina = false){
		
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



		if ($this->getPostParam('busqueda') == 1 && $this->getPostParam('filtro') != 'todos') {
			$busqueda = str_replace("-"," - ",$busqueda);
			$this->getLibrary('paginador');
			$paginador = new Paginador();
			$limite = 10;


			 $this->view->titulo = 'Categoria';
			 $this->view->post = $paginador->paginar($post->getPostFilter($this->getPostParam('filtro')), $pagina, $limite);
			 $this->view->paginacion = $paginador->getView('prueba','categoria/index');
			 $this->view->categorias = $post->getCategorias();
			 $this->view->provincias = $post->getProvincias();
			 $this->view->subcategorias = $post->getSubCategorias();
			 $this->view->images = $post->getImg();

			//Enviar un el parametro titulo a la vista
			$this->view->titulo = 'Mercadito';
			$this->view->renderizar('index');
		}
		elseif( $this->getPostParam('busqueda') == 1 && $this->getPostParam('filtro') == 'todos'){

			$this->getLibrary('paginador');
			$paginador = new Paginador();
			$limite = 10;

			 $this->view->titulo = 'Categoria';
			 $this->view->post = $paginador->paginar($post->getPosts(), $pagina, $limite);
			 $this->view->paginacion = $paginador->getView('prueba','categoria/index');
			 $this->view->categorias = $post->getCategorias();
			 $this->view->subcategorias = $post->getSubCategorias();
			 $this->view->provincias = $post->getProvincias();
			 $this->view->images = $post->getImg();

			//Enviar un el parametro titulo a la vista
			$this->view->titulo = 'Mercadito';
			$this->view->renderizar('index');

		}
		elseif($busqueda){
			$busqueda = str_replace("-"," - ",$busqueda);
			
			$busqueda = str_replace("_"," ",$busqueda);
			
			$this->getLibrary('paginador');
			$paginador = new Paginador();
			$limite = 10;
			$this->view->b = $busqueda;

			 $this->view->titulo = 'Categoria';
			 $this->view->post = $paginador->paginar($post->getPostFilter($busqueda), $pagina, $limite);
			 $this->view->paginacion = $paginador->getView('prueba','categoria/index');
			 $this->view->categorias = $post->getCategorias();
			 $this->view->subcategorias = $post->getSubCategorias();
			 $this->view->provincias = $post->getProvincias();
			 $this->view->images = $post->getImg();

			//Enviar un el parametro titulo a la vista
			$this->view->titulo = 'Mercadito';
			$this->view->renderizar('index');

		}

		else{

			$this->getLibrary('paginador');
			$paginador = new Paginador();
			$limite = 10;

			 $this->view->titulo = 'Categoria';
			 $this->view->post = $paginador->paginar($post->getPosts(), $pagina, $limite);
			 $this->view->paginacion = $paginador->getView('prueba','categoria/index');
			 $this->view->categorias = $post->getCategorias();
			 $this->view->subcategorias = $post->getSubCategorias();
			 $this->view->provincias = $post->getProvincias();
			 $this->view->images = $post->getImg();

			//Enviar un el parametro titulo a la vista
			$this->view->titulo = 'Mercadito';
			$this->view->renderizar('index');
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
		 $this->view->titulo = 'Categoria';
		 $this->view->post = $paginador->paginar($post->getPostFilter($busqueda), $pagina, $limite);
		 $this->view->paginacion = $paginador->getView('prueba','categoria/index');
		 $this->view->categorias = $post->getCategorias();
		 $this->view->provincias = $post->getProvincias();
		 $this->view->subcategorias = $post->getSubCategorias();
		 $this->view->images = $post->getImg();

		//Enviar un el parametro titulo a la vista
		$this->view->titulo = 'Mercadito';
		$this->view->renderizar('index');
		
	}
}