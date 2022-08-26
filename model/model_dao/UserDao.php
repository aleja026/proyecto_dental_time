<?php 
class UserDao{
	private $pdo;
	public function __construct(){
		try{
			$this->pdo = Database::conexion();
		} catch (Exeption $e) {
			die ($e->getMessage());
		}
	}
	#INICIAR SESION  
	public function loginStart($userDto){		
		$sql = "SELECT * FROM usuario WHERE
		correoUsuario = :userEmailLog AND
		passwordUsuario = sha1(:userPassLog)";
		$dbh =$this->pdo->prepare($sql);		
		$dbh->bindValue ("userEmailLog", $userDto->getCorreoUsuario());
		$dbh->bindValue ("userPassLog", $userDto->getPasswordUsuario());
		$dbh->execute();
		$userDb = $dbh->fetch();		
		if ($userDb) {
			$userDto = new UserDto (
				$userDb['idUsuario'],
				$userDb['correoUsuario'],
				$userDb['estadoUsuario'],
				$userDb['passwordUsuario'],
				$userDb['nombreUsuario'],
				$userDb['apellidoUsuario'],
				$userDb['documentoUsuario'],
				$userDb['direccionUsuario'],
				$userDb['telefonoUsuario'],
				$userDb['IdRolFK']
			);
			return $userDto;
		} else{
			return false;
		}
	}
	#CREAR CONSSULTA
	public function create ($user){
		try {
			$sql = 'INSERT INTO ROL VALUES (
			:idUsuario,
			:correoUsuario,
			sha1(:passwordUsuario),
			:estadoUsuario,
			:nombreUsuario,
			:apellidoUsuario,
			:documentoUsuario,
			:direccionUsuario,
			:telefonoUsuario,
			:idRolFK,
		)';
		#Preparar la bbdd para la consulta
		$dbh = $this->pdo->prepare($sql);
		#Ejecutar la consulta
		$dbh->bindValue('idUsuario',$userDto->getidUsuario());
		$dbh->bindValue('correoUsuario',$userDto->getCorreoUsuario());
		$dbh->bindValue('passwordUsuario',$userDto->getPasswordUsuario());
		$dbh->bindValue('estadoUsuario',$userDto->getEstadoUsuario());
		$dbh->bindValue('nombreUsuario',$userDto->getNombreUsuario());
		$dbh->bindValue('apellidoUsuario',$userDto->getApellidoUsuario());
		$dbh->bindValue('documentoUsuario',$userDto->getDocumentoUsuario());
		$dbh->bindValue('direccionUsuario',$userDto->getDireccionUsuario());
		$dbh->bindValue('telefonoUsuario',$userDto->getTelefonoUsuario());
		$dbh->bindValue('idRolFK',$userDto->getIdRol());
		// ejecutar la consulta
		$dbh->execute();
		} catch (Exception $e) {
			die($e->getMessage());
		}	
	}

	// consulta o listar usuarios 
	public function read () {
		try {
			$userList = [];
			$sql = 'SELECT * FROM usuario';
			$dbh = $this->pdo->query($sql);
			foreach ($dbh->fetchAll() as $user) {
				$userList[] = new UserDto(
					$user ['idUsuario'],
					$user ['correoUsuario'],
					$user ['passwordUsuario'],
					$user ['estadoUsuario'],
					$user ['nombreUsuario'],
					$user ['apellidoUsuario'],
					$user ['documentoUsuario'],
					$user ['direccionUsuario'],
					$user ['telefonoUsuario'],
					$user ['IdRolFK'],
				);
			}			
			return $userList;
		} catch (Exeption $e) {
			die ($e -> getMessage());
		}
	}

	// capturar el id y traer el registro
	public function getById($idUsuario){
		try {
			#Consulta
			$sql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
			#Preparar la BBDD
			$dbh = $this->pdo->prepare($sql);
			#Vincular los datos
			$dbh->bindValue('idUsuario', $idUsuario);
			#Ejecutar la consulta
			$dbh->execute();
			#Crear un objeto del registro la BBDD
			$userDB = $dbh->fetch();
			#Crear el objeto del modelo
			$userDb = new UserDto(
				$userDb['idUsuario'],
				$userDb['correoUsuario'],
				$userDb['passwordUsuario'],
				$userDb['estadoUsuarios'],
				$userDb['nombreUsuario'],
				$userDb['apellidoUsuario'],
				$userDb['documentoUsuario'],
				$userDb['direccionUsuario'],
				$userDb['telefonoUsuario'],
				$userDb['idRolFK'],
			);
			return $user;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	// actualizar usuaruio
	public function update($userDto){
		try {
			// constlta
			$sql = "UPDATE usuarios SET
				idUsuario = :idUsuario,
				correoUsuario= :correoUsuario,
				passwordUsuario= sha1(:passwordUsuario),
				estadoUsuario= :estadoUsuario,
				nombreUsuario= :nombreUsuario,
				apellidoUsuario= :apellidoUsuario,
				documentoUsuario = :documentoUsuario,
				direccionUsuario = :direccionUsuario,
				telefonoUsuario = :telefonoUsuario,
				idRol = :idRolFK;
			WHERE idUsuario=idUsuario";

			// prepara la bbbdd
			$dbh= $this ->pdo->prepare($sql);
			// vincula los datos
			$dbh->bindValue('idUsuario',$userDto->getidUsuario());
			$dbh->bindValue('correoUsuario',$userDto->getCorreoUsuario());
			$dbh->bindValue('passwordUsuario',$userDto->getPasswordUsuario());
			$dbh->bindValue('estadoUsuario',$userDto->getEstadoUsuario());
			$dbh->bindValue('nombreUsuario',$userDto->getNombreUsuario());
			$dbh->bindValue('apellidoUsuario',$userDto->getApellidoUsuario());
			$dbh->bindValue('documentoUsuario',$userDto->getDocumentoUsuario());
			$dbh->bindValue('direccionUsuario',$userDto->getDireccionUsuario());
			$dbh->bindValue('telefonoUsuario',$userDto->getTelefonoUsuario());
			$dbh->bindValue('idRolFK',$userDto->getIdRol());
			// ejecuta
			$db->execute();
		}catch (Exeption $e){
			die($e-> getMessage());
		}
	}

	// eliminar usuario
	public function delete($idUsuario){
		try{
			$sql = "DELETE FROM usuario WHERE idUsuario =idUsuario";
			$bdh= $this->pdo->prepare($sql);
			$dbh ->bindValue("idUsuario",$idUsuario);
			$dbh-> execute();
		} catch (Exception $e) {
			die ($e->getMessage());
		}
	}
}

?>