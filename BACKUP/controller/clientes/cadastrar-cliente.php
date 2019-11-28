<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
	$segmento = mysqli_escape_string($connect, $_POST['segmento']);
	$consultor = mysqli_escape_string($connect, $_POST['consultor']);

    $sql = "INSERT INTO cliente (nome, cnpj, segmento, consultor) VALUES ('$nome', '$cnpj', '$segmento', '$consultor')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../../views/clientes/index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../../views/clientes/index.php');
	endif;

endif;