<?php 
	class UserDto{
		private $idUsuario;
		private $correoUsuario;
		private $estadoUsuario;
		private $passwordUsuario;		
		private $nombreUsuario;
		private $apellidoUsuario;
		private $documentoUsuario;
		private $direccionUsuario;
		private $telefonoUsuario;		
		private $idRol;

		// constructor
		public function __construct(){
			$a= func_get_args();
			$i=func_num_args();
			if (method_exists($this,  $f="__construct".$i))	{
				call_user_func_array(array($this, $f), $a);
			}
		}
		public function __construct2($userEmailLog,$userPassLog){
			$this->correoUsuario =$userEmailLog;
			$this->passwordUsuario=$userPassLog;
		}
		public function __construct10($idUsuario,$correoUsuario,$estadoUsuario,$passwordUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$direccionUsuario,$telefonoUsuario,$idRol){
			$this->idUsuario= $idUsuario;
			$this->correoUsuario= $correoUsuario;
			$this->estadoUsuario= $estadoUsuario;
			$this->passwordUsuario = $passwordUsuario;
			$this->nombreUsuario = $nombreUsuario;
			$this->apellidoUsuario = $apellidoUsuario;
			$this->documentoUsuario = $documentoUsuario;
			$this->direccionUsuario = $direccionUsuario;
			$this->telefonoUsuario = $telefonoUsuario;
			$this->idRol= $idRol;

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
	}
?>