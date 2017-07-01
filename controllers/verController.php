<?php

/**
* 
*/
class verController extends Controller
{
	private $post;

	public function __construct()
	{
		parent::__construct();
		$this->post = $this->loadModel('post');

	}

	public function index($id = false){
		Session::acceso('usuario');
		$id = (int) $id;
		$this->view->id = $id;
		
		//$this->view->post =  $this->post->getPost($id);
		$this->view->renderizar('index');
	}

	// public function ver($id = false){
	// 	Session::acceso('usuario');

	// 	$id = (int) $id;
	// 	$this->view->id = $id;
	// 	//$this->view->post =  $this->post->getPost($id);
	// 	$this->view->renderizar('ver');
	// }

}