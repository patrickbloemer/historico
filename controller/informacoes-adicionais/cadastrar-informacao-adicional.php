<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$id = mysqli_escape_string($connect, $_POST['id_cliente']);
	$informacao_adicional = mysqli_escape_string($connect, $_POST['informacao-adicional']);

    $sql = "INSERT INTO informacao_adicional (id_cliente, informacao_adicional) VALUES ('$id', '$informacao_adicional')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Informação Adicional Inserida";
		header('Location: ../../views/clientes/informacoes-cliente.php?id='.$id);
	else:
		$_SESSION['mensagem'] = "Erro ao Inserir Informação Adicional";
		header('Location: ../../views/clientes/informacoes-cliente.php?id='.$id);
	endif;

endif;