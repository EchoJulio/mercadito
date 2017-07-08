<?php 

class registroModel extends Model{

	public function __construct(){

		parent::__construct();
	}

	public function verificarUsuario($usuario){
		//Metodo para impedir duplicidad en los usuarios

		$id = $this->db->prepare("select id, codigo from users where user = :usuario");
		$id->bindParam(':usuario',$usuario);
		$id->execute();
		$row = $id->fetch();
		
		return $row;	
	}

	public function verificarEmail($email){
		//Metodo para impedir duplicidad en los email

		$id = $this->db->query("select id from users where email ='".$email."'");
		if($id->fetch()){
			return true;
		}else{
			return false;
		}
	}

	public function registrarUsuario($nombre,$usuario,$pass,$email){
		//funcion para generar un codigo aleatorio para usarlo al validar el usuario via email
		$random = rand(1278954545, 9999999999) ;
		$random += rand(0, 9);
		$pass = Hash::getHash('sha1',$pass,HASH_KEY);
		$perfil = 'usuario';
		$usuario = strtolower($usuario);

		$this->db->prepare("INSERT INTO users (name,user,password,email,perfil,codigo)
					VALUES (:nombre,:usuario,:pass,:email,:perfil,:codigo)
					")->execute(array(
				':nombre' =>$nombre,
				':usuario' => $usuario,
				':pass' => $pass,
				':email' => $email,
				':perfil' => $perfil,
				':codigo' => $random
				));
	}

	public function getUsuario($id, $codigo){
		$id = (int) $id;
		$codigo = (int) $codigo;
		$query = $this->db->prepare('SELECT id, validate FROM users WHERE id = :id AND codigo = :codigo');
		$query->bindParam(':id', $id);
		$query->bindParam(':codigo', $codigo);
		$query->execute();
		$usuario = $query->fetch(PDO::FETCH_ASSOC);

		return $usuario;
	}

	public function activarUsuario($id, $codigo){
		$id = (int) $id;
		$codigo = (int) $codigo;
		$this->db
			->prepare('UPDATE users SET validate = 1 WHERE id = :id AND codigo = :codigo')
			->execute(array(
				':id' => $id,
				':codigo' => $codigo
				));
	}

	
}