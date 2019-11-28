<?php
session_start();
//CONEXÃO
require_once '../../DAO/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
	$segmento = mysqli_escape_string($connect, $_POST['segmento']);
	$consultor = mysqli_escape_string($connect, $_POST['consultor']);

	//SERVIÇOS
	if (isset($_POST['site']) && $_POST['site'] == 'Yes') 
	{
	    $site = 1;
	}
	else
	{
	    $site = 0;
	} 
	if (isset($_POST['seo']) && $_POST['seo'] == 'Yes') 
	{
	    $seo = 1;
	}
	else
	{
	    $seo = 0;
	} 
	if (isset($_POST['ads']) && $_POST['ads'] == 'Yes') 
	{
	    $ads = 1;
	}
	else
	{
	    $ads = 0;
	} 
	if (isset($_POST['facebook']) && $_POST['facebook'] == 'Yes') 
	{
	    $facebook = 1;
	}
	else
	{
	    $facebook = 0;
	} 

    $sql = "INSERT INTO clientes (nome, cnpj, segmento, consultor, site, seo, ads) VALUES ('$nome', '$cnpj', '$segmento', '$consultor', '$site', '$seo', '$ads')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../../views/clientes/index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../../views/clientes/index.php');
	endif;

endif;