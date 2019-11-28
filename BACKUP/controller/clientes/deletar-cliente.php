<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM cliente WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso";
		header('Location: ../../views/clientes/index.php');
	else:
		$_SESSION['mensagem'] = "Deletado ao atualizar";
		header('Location: ../../views/clientes/index.php');
	endif;
endif;