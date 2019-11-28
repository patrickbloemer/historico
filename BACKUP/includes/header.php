<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Histórico - Alper</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/historico/includes/style.css">
</head>
<body>
	<!-- Dropdown Clientes -->
	<ul id="clientes" class="dropdown-content">
		<li><a href="http://localhost/historico/views/clientes/index.php">Listagem</a></li>
		<li><a href="http://localhost/historico/views/clientes/cadastrar-cliente.php">Cadastrar</a></li>
	</ul>
	<!-- Dropdown Structure -->
	<ul id="usuarios" class="dropdown-content">
		<li><a href="http://localhost/historico/views/usuarios/index.php">Listagem</a></li>
		<li><a href="http://localhost/historico/views/usuarios/cadastrar-usuario.php">Cadastrar</a></li>
	</ul>
	<nav>
		<div class="container">
			<div class="nav-wrapper">
				<a href="http://localhost/historico/views/" class="brand-logo">Histórico Alper</a>
				<ul class="right hide-on-med-and-down">
					<li><a class="dropdown-trigger" href="#!" data-target="clientes">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="usuarios">Usuários<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
			</div>
		</div>
	</nav>