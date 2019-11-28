<?php
//CONEXÃO
include_once '../../DAO/db_connect.php';
//HEADER
include_once '../../includes/header.php';
//SELECT
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM cliente WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Editar Cliente</h3>
		<form action="../../controller/clientes/editar-cliente.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="cnpj" id="cnpj" value="<?php echo $dados['cnpj']; ?>">
				<label for="cnpj">CNPJ</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="segmento" id="segmento" value="<?php echo $dados['segmento']; ?>">
				<label for="segmento">Segmento</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="consultor" id="consultor" value="<?php echo $dados['consultor']; ?>">
				<label for="consultor">Consultor</label>
			</div>
			<button type="submit" name="btn-editar" class="btn green">Atualizar</button>
			<a href="index.php" class="btn orange">Lista de Clientes</a>
		</form>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>