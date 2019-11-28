<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
	$segmento = mysqli_escape_string($connect, $_POST['segmento']);
	$consultor = mysqli_escape_string($connect, $_POST['consultor']);
	$id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE cliente SET nome = '$nome', cnpj = '$cnpj', segmento = '$segmento', consultor = '$consultor' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso";
		header('Location: ../../views/clientes/index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../../views/clientes/index.php');
	endif;

endif;