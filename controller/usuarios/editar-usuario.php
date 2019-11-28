<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$usuario = mysqli_escape_string($connect, $_POST['usuario']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', usuario = '$usuario', senha = '$senha' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso";
		header('Location: ../../views/usuarios/index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../../views/usuarios/index.php');
	endif;

endif;