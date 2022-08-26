<?php  session_start();

require_once"model/model_dto/UserDto.php";
require_once"model/model_dao/UserDao.php";

class Users {
	private $userDao;
	private $module;
	public function __construct(){
		$this->userDao = new UserDao;
		$this->module = $_SESSION["module"];
	}

	public function index() {
// if (isset($_SESSION['userDto']) && ($userDto->getIdRol() !=2) {}
	}

	public function login(){
		header('Location: ?c=Login');
	}

//Crear usuario

	public function create(){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==4)){
			if ($_SERVER ["REQUEST_METHOD"] == "GET"){
				require_once "view/roles/".$this->module. "/header.php";
				require_once "view/modules/1_users/crear_usuario.php";
				require_once "view/roles/".$this->module. "/footer.php";
			} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
				$userDto = new UserDto;
				$userDto -> setIdUsuario ($_POST ["idUsuario"]);
				$userDto -> setDescripcionRol ($_POST ["descripcionRol"]);
				$userDto -> setCorreoUsuario ($_POST ["correoUsuario"]);
				$userDto -> setPasswordUsuario ($_POST ["passwordUsuario"]);
				$userDto -> setEstadoUsuario ($_POST ["estadoUsuario"]);
				$userDto -> setNombreUsuario($_POST ["nombreUsuario"]);
				$userDto -> setApellidoUsuario($_POST ["apellidoUsuario"]);
				$userDto -> setDocumentoUsuario($_POST ["documentoUsuario"]);
				$userDto -> setDireccionUsuario($_POST ["direccionUsuario"]);
				$userDto -> setTelefonoUsuario($_POST ["telefonoUsuario"]);
				$userDto -> setIdRol ($_POST ["idRolFK"]);
				$this->userDao->create($userDto);
				header('Location: ?c=Users&a=read'); 
			}
		}else {
			header('Location: ?');
		}
	}

//Consultar usuario
	public function read(){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==4)){
			$users = $this->userDao->read();			
			require_once "view/roles/".$this->module. "/header.php";
			require_once "view/modules/1_users/consultar_usuarios.php";
			require_once "view/roles/".$this->module. "/footer.php";
		} else {
			header('Location: ?');
		}
	}

//Actualizar usuario

	public function update(){
		$userDto= unserialize($_SESSION ["userDto"]);
		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1 || $userDto->getIdRol()==4)){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$user = $this->userDao->getById($_GET["idUsuario"]);
				$perfil = ['admin', 'empleado', 'cliente'];
				$estado = ['inactivo', 'activo'];
				require_once "view/roles/".$this->module. "/header.php";
				require_once "view/modules/1_users/actualizar_usuario.php";
				require_once "view/roles/".$this->module. "/footer.php";
			} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$userDto = new UserDto;
				$userDto -> setIdUsuario ($_POST ["idUsuario"]);
				$userDto -> setCorreoUsuario ($_POST ["correoUsuario"]);
				$userDto -> setPasswordUsuario ($_POST ["passwordUsuario"]);
				$userDto -> setEstadoUsuario ($_POST ["estadoUsuario"]);
				$userDto -> setNombreUsuario($_POST ["nombreUsuario"]);
				$userDto -> setApellidoUsuario($_POST ["apellidoUsuario"]);
				$userDto -> setDocumentoUsuario($_POST ["documentoUsuario"]);
				$userDto -> setDireccionUsuario($_POST ["direccionUsuario"]);
				$userDto -> setTelefonoUsuario($_POST ["telefonoUsuario"]);
				$userDto -> setIdRol ($_POST ["idRolFK"]);
				$this->userDao->update($userDto);
				header ("Location: ?c=Users&a=read");
			}
		} else {
			header('Location: ?');
		}

	}

// // Eliminar usuario

// 	public function delete (){
// 		$userDto= unserialize($_SESSION ["userDto"]);
// 		if (isset($_SESSION["userDto"]) && ($userDto->getIdRol()==1) {
// 			$this ->userDao->delete($_GET["idUsuario"]);
// 			header("Location: ?c=Users&a=read");
// 		} else {
// 			header('Location: ?');
// 		}
// 	}

//Registrar usuario

// 	public function regist(){
// 		require_once "view/roles/admin/header.php";
// 		require_once "view/modules/1_users/registrar.usuarios.php";
// 		require_once "view/roles/admin/footer.php";
// 	}

// 	public function logout(){}
 

 }
?>