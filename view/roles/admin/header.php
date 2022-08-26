<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/styles_dasboard.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Dashboard Administrador</title>
    <style type="text/css" media="screen">
		A:link {text-decoration: none }
		A:hover { color: black; font-family: arial; text-decoration: none }
		A:visited {color: black;  font-family: arial; text-decoration: none }
		*{outline:none !important;}*:focus {outline: none !important;}textarea:focus, input:focus{outline: none !important;}	a{text-decoration: none !important;outline: none !important;}
	</style>
</head>
<body>
		<!-- Navegación -->
		<nav>
			<nav class="row navbar navbar-expand-lg admin sticky-top">
				<a class="navbar-brand" href="#">
					<img src="assets/img/logo.png">
				</a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			      </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ">
						<li class="nav-item active ">
							<a class="nav-link" href="0_mains/principal.html" target="area">Principal <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="0_mains/calendario.html"target="area">Calendario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="0_mains/actividad.html"target="area">Actividad</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="0_mains/contactenos.html"target="area">Contáctenos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="0_mains/administrador.html"target="area">Administrador</a>
						</li>
					</ul>
				</div>
			</nav>
		</nav>
		<!-- sección -->
		<div class="row">
			<div class="col">
				<section class="row">
			<!-- panel lateral -->
			<aside class="col-lg-3">
				<div class="borde modulo">
				<div class="card">
					<div class="card-body media">
						<img src="assets/img/icono.jpg" class="mr-3" alt="...">
						<div class="media-body" style="color: white;">
							<h6 class="card-subtitle mb-1 text-muted p-1"><a href="view/modules/2_mod_main/consultar_agenta.html"target="area">Nombre</a></h6>
							<h6 class="card-subtitle mb-1 text-muted p-1"><a href="view/modules/2_mod_main/consultar_agenta.html"target="area">Perfil</a></h6>
							<h6 class="card-subtitle mb-1 text-muted p-1"><a href="view/modules/2_mod_main/consultar_agenta.html"target="area">Configuración</a></h6>
						</div>
					</div>
				</div>
				<div class="card" >
						<div class="card-body" style="background-color: #8ABCDC;">
							<p>
								<h5 class="card-title">Gestión Usuarios</h5>
								<ul style="color: white;">
									<li class="card-text"><a href="?c=Users&a=create" target="area" style="text-decoration-style: none;">Crear Usuario</a></li>
									<li class="card-text"><a href="?c=Users&a=read"target="area">Consultar Usuarios </a></li>
								</ul>
							</p>
							<p>
								<h5 class="card-title">Gestión Citas</h5>
								<ul>
									<li class="card-text"><a href="view/modules/2_mod_main/consultar_agenta.html"target="area">Consultar Agenda</a></li>
									<li class="card-text"><a href="view/modules/2_mod_main/asignar_cita.html"target="area">Agendar cita</a></li>
									<li class="card-text"><a href="view/modules/2_mod_main/cancelar_cita.html"target="area">Cancelar Cita</a></li>
									<li class="card-text"><a href="view/modules/2_mod_main/reagendar_cita.html"target="area">Reagendar cita</a></li>
									<li class="card-text"><a href="view/modules/2_mod_main/consultar_cita.html"target="area">Consultar Cita</a></li>
									<li class="card-text"><a href="view/modules/2_mod_main/registrar_asistencia.html"target="area"> Registrar Asistencia del Paciente</a></li>
								</ul>
							</p>					
						</div>
					</div>
			</aside>
			<main class="col-9">