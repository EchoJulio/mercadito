<?php

class postModel extends model{
	

	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){
		$post = $this->db->query('SELECT * FROM posts ORDER BY fecha_creacion ASC');
		return $post->fetchAll();
	}

	public function getPost($parametro){

		$post = $this->db->prepare('SELECT posts.id as id, posts.title as title, posts.description as description, price, fecha_creacion, state,tipo_moneda, provinces.title as province, subcategory.title as subcategory  FROM posts LEFT JOIN subcategory ON posts.id_subcategory = subcategory.id LEFT JOIN provinces ON posts.id_prividence = provinces.id WHERE posts.id  = :parametro');
		$post->execute(array(':parametro' => $parametro));
		$post = $post->fetch(PDO::FETCH_ASSOC);
		return $post;
	}

	public function getProvincias(){

		$provincias = $this->db->query('SELECT * FROM provinces ORDER BY title ASC');
		return $provincias->fetchAll();
	}

	public function getImgById($id){
		$img = $this->db->prepare('SELECT * FROM images WHERE id_post = :id');
		$img->execute(array(':id'=> $id));
		$img = $img->fetchAll(PDO::FETCH_ASSOC);
		return $img;
	}

	public function getPostUser($id){
		$user = $this->db->prepare('SELECT users.name as name, email, users.user as usuario from posts LEFT JOIN users ON posts.id_user = users.id WHERE posts.id = :id');
		$user->execute(array(':id'=> $id));
		$user = $user->fetch(PDO::FETCH_ASSOC);
		return $user;

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

	public function getImg(){
		
		//$id = (int) $id;
		$subCategoria = $this->db->query('SELECT * FROM images');
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

	public function getLastId(){

		$query = $this->db->query('SELECT MAX(id) as id FROM posts');
		$query = $query->fetch();
		return $query['id'];

	}

	public function saveImg($img){
    	
    	if (!$img) {
    		return false;
    	}
    	//Obtenemos el id del post insertardo
    	$id_post = $this->getLastId();

    	//5MB exactamente
    	$tamanoMax = 5 * 1024 * 1024;

    	//Cantidad maxima de imagenes
    	$maxImg = 5;

    	//URL donde se almacenaran las imagenes de los posts
    	$destino = ROOT . 'public' . DS . 'img' . DS;

    	//Formatos permitidos
    	$formatosValidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png');

    	$formatosImg = $img['imagenes']['type'];
    	//$imagenInfo = getimagesize($img['imagenes']['tmp_name']);

    	//Validamos el tamano maximo de los imagenes
    	if (count($img['imagenes']['name']) > 0 && count($img['imagenes']['name']) > $maxImg) {
    		return false;
    	}
    	//Validamos el formato permitido de las imagenes
    	 for ($i=0; $i < count($formatosImg); $i++) { 
			if (!in_array($formatosImg[$i], $formatosValidos)) {
				return false;
			}
    	 }

    	

    	foreach ($img['imagenes']['error'] as $row => $value) {
    		
    		if ($value == UPLOAD_ERR_OK) {

	    			if ($img['imagenes']['size'][$row] > $tamanoMax) {
	    				return false;
	    			
	    			}
	    			
	    		$formato = substr($img['imagenes']['name'][$row], strrpos($img['imagenes']['name'][$row],'.'));
				$title = $id_post . '-' . $row ;
				$query = $this->db->prepare('INSERT INTO images (title, format, id_post) 
									 VALUES (:title,:formato,:id_post)')
				->execute(array(
					':title' => $title,
					':formato' => $formato,
					':id_post' => $id_post)
					);

	    		move_uploaded_file($img['imagenes']['tmp_name'][$row], $destino  . $title . $formato); 
	    			
	    		
    		}
    	}

    	return true;
    }

	public function addImg($img){
		$id_post = $this->getLastId();

		foreach ($img['imagenes']['error'] as $row => $value) {
			if ($value == 0) {
				
				$formato = substr($img['imagenes']['name'][$row], strrpos($img['imagenes']['name'][$row],'.'));
				$title = $id_post . '-' . $row ;
				$query = $this->db->prepare('INSERT INTO images (title, format, id_post) 
									 VALUES (:title,:formato,:id_post)')
				->execute(array(
					':title' => $title,
					':formato' => $formato,
					':id_post' => $id_post)
					);
			}
		}

		
	}
}