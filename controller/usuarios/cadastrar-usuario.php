<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$usuario = mysqli_escape_string($connect, $_POST['usuario']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senha = md5($senha);
    $sql = "INSERT INTO usuario (nome, sobrenome, usuario, senha) VALUES ('$nome', '$sobrenome', '$usuario', '$senha')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Usuário Cadastrado com sucesso";
		header('Location: ../../views/usuarios/index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar usuário";
		header('Location: ../../views/usuarios/index.php');
	endif;

endif;