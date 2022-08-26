<?php 
class User{
	private $idRol = 2;
	private $estadoRol = null;
	private $idUsuario =null;
	private $correoUsuario = null;
	private $passwordUsuario = null;
	private $estadoUsuario = null;
	private $nombreUsuario = null;
	private $apellidoUsuario = null;
	private $documentoUsuario = null;
	private $direccionUsuario = null;
	private $telefonoUsuario = null;


	private $pdo;
	public function __construct(){
		try{
			$this->pdo = Database::conexion();

		} catch (Exeption $e) {
			die ($e->getMessage());
		}
	}

	// metodos set y get
		public function setIdUsuario ($idUsuario){
			$this->idUsuario = 	$idUsuario;
		}
		public function getIdUsuario (){
			return $this->idUsuario;
		}
		public function setCorreoUsuario ($correoUsuario){
			$this->correoUsuario = $correoUsuario;
		}
		public function getCorreoUsuario (){
			return $this->correoUsuario;
		}
		public function setEstadoUsuario ($estadoUsuario){
			$this->estadoUsuario = $estadoUsuario;
		}
		public function getEstadoUsuario (){
			return $this->estadoUsuario;
		}
		public function setPasswordUsuario ($passwordUsuario){
			$this->passwordUsuario = $passwordUsuario;
		}
		public function getPasswordUsuario (){
			return $this->passwordUsuario;
		}
		public function setNombreUsuario ($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getNombreUsuario (){
			return $this->nombreUsuario;
		}
		public function setApellidoUsuario ($apellidoUsuario){
			$this->apellidoUsuario = $apellidoUsuario;
		}
		public function getApellidoUsuario (){
			return $this->apellidoUsuario;
		}
		public function setDocumentoUsuario ($documentoUsuario){
			$this->documentoUsuario = $documentoUsuario;
		}
		public function getDocumentoUsuario (){
			return $this->documentoUsuario;
		}
		public function setDireccionUsuario ($direccionUsuario){
			$this->direccionUsuario = $direccionUsuario;
		}
		public function getDireccionUsuario (){
			return $this->direccionUsuario;
		}
		public function setTelefonoUsuario ($telefonoUsuario){
			$this->telefonoUsuario = $telefonoUsuario;
		}
		public function getTelefonoUsuario (){
			return $this->telefonoUsuario;
		}
		public function setIdRol ($idRol){
			$this->idRol = $idRol;
		}
		public function getIdRol (){
			return $this->idRol;
		}
// CRUD
	public function create (){
		#CREAR CONSSULTA
			$sql = 'INSERT INTO usuarios VALUES (
			null, "admin", 
			null, "seller",
			null, "customer",
		)';
		#Preparar la bbdd para la consulta
		$dbh = $this->pdo->prepare($sql);
		#Ejecutar la consulta
		$dbh->execute();
			}
	}
?>