<?php

class userModel extends model{

	public function __construct(){
		parent::__construct();
	}

	public function add($name,$user,$pass,$email,$telefono){

		$query = $this->db->prepare("INSERT INTO users(name,user,password,email,telefono) VALUES (:name,:user,:pass,:email,:telefono)");
		$query->bindParam(':name',$name);
		$query->bindParam(':user',$user);
		$query->bindParam(':pass',$pass);
		$query->bindParam(':email',$email);
		$query->bindParam(':telefono',$telefono);
		if ($query->execute()) {
			return true;
		}
		return false;


	}

	public function edit($id,$name,$user,$email){

		$id = (int) $id;
		$query = $this->db->prepare("UPDATE users SET name = :name, user = :user, email = :email  WHERE id = :id");
		$query->bindParam(':name',$name);
		$query->bindParam(':user',$user);
		$query->bindParam(':email',$email);
		$query->bindParam(':id',$id);
		$query->execute();

	}

	public function delete($id){
		$id = (int) $id;
		$query = $this->db->prepare("DELETE FROM users  WHERE id = :id");
		$query->bindParam(':id',$id);
		$query->execute();
	}

	public function getUsers(){
		$users = $this->db->query('SELECT id,name,user,email,validate FROM users');
		return 	$users->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUser($id){
		//Lo primero es validar que el parametro id 
		//sea un numero entero
		$id = (int) $id;
		
		if ($id) {
			$user = $this->db->prepare('SELECT * FROM users WHERE id = :id');
			$user->bindParam(':id',$id);
			$user->execute();
			$row = $user->fetch(PDO::FETCH_ASSOC);
			return 	$row;
		}

	
	}

	public function login($user,$pass){

			$query = $this->db->prepare('SELECT * FROM users WHERE user = :user AND password = :pass');
			$query->bindParam(':user',$user);
			$query->bindParam(':pass',Hash::getHash('sha1',$pass,HASH_KEY));
			$query->execute();
			$row = $query->fetch(PDO::FETCH_ASSOC);
			return $row;
		
	}
}