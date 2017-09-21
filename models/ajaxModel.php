<?php

 class ajaxModel extends Model{

 
 	public function __construct(){
 		parent::__construct();
 	}

 	public function deletePost($id){
 		$id = (int) $id;
 		$post = $this->db->prepare('DELETE FROM posts WHERE posts.id = :id')->execute(array(':id' => $id));
 		return $mensaje = array("mensaje" => 'ok');
 		
 	}

 	public function favorito($id_post,$id_user){

 		$id_post = (int) $id_post;
 		$id_user = (int) $id_user;

 		$fav = $this->db->prepare('INSERT INTO favorite (id_user, id_post, status) VALUES (:id_user,:id_post,:status)')
 						->execute(array(":id_post" => $id_post,
 										":id_user" => $id_user,
 										":status" => 1
 						));
 		return array("mensaje" => "ok");
 	}
 	public function eliminar_favorito($id_post,$id_user){

 		$id_post = (int) $id_post;

 		$fav = $this->db->prepare('DELETE FROM favorite WHERE favorite.id_user = :id_user AND favorite.id_post = :id_post')
 						->execute(array(":id_user" => $id_user,
 									":id_post" => $id_post));
 		return array("mensaje" => "ok");
 	}
 }