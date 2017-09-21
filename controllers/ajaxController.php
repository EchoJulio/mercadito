<?php

/**
* 
*/
class ajaxController extends Controller
{
	
	private $ajax;
	public function __construct()
	{
		parent::__construct();
		$this->ajax = $this->loadModel('ajax');
	}

	public function index(){

	}

	public function deletePost(){
		if ($this->getPostParam('id')) {
			;
			echo json_encode($this->ajax->deletePost($this->getPostParam('id')));
		}
		
	}

	public function favorito(){
		$id_user = Session::get('id');
		if ($this->getPostParam('id_post')) {
			
			echo json_encode($this->ajax->favorito(
							 $this->getPostParam('id_post'),
							 $id_user
							));
		}
	}
	public function eliminar_favorito(){
		//Session::acceso('usuario');
		$id_user = Session::get('id');
		if ($this->getPostParam('id_post')) {
			
			echo json_encode($this->ajax->eliminar_favorito(
							 $this->getPostParam('id_post'),
							 $id_user
							));
		}
	}

}