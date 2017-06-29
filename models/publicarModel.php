<?php

class publicarModel extends model{
	

	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){
		$post = $this->db->query('select * from posts');
		return $post->fetchAll();
	}

	public function getProvincias(){

		$provincias = $this->db->query('SELECT * FROM provinces ORDER BY title ASC');
		return $provincias->fetchAll();
	}

	public function getCategorias(){
		$categorias = $this->db->query('SELECT title as categoria, id,icon FROM category ORDER BY categoria ASC');
		$categorias = $categorias->fetchAll();
		

		return $categorias;
	}

	public function getSubCategorias(){
		
		//$id = (int) $id;
		$subCategoria = $this->db->query('SELECT * FROM subcategory  ORDER BY id_category ASC');
		//$subCategoria->bindParam(':id',$id);
		return $subCategoria->fetchall();
	}

	public function add($title,$description,$price,$state,$usuario,$subCategory,$providence,$moneda){
		$query = $this->db->prepare('INSERT INTO posts (title, description, price, state, id_user, id_subcategory,id_prividence,tipo_moneda) 
									 VALUES (:title,:description,:price,:state,:usuario,:subCategory,:providence,:moneda)')
				->execute(array(
					':title' => $title,
					':description' => $description,
					':price' => $price,
					':state' => $state,
					':usuario' => $usuario,
					':subCategory' => $subCategory,
					':providence' => $providence,
					':moneda' => $moneda)
					);

	}
}