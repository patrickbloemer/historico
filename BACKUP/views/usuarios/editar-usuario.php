<?php
//CONEXÃO
include_once '../../DAO/db_connect.php';
//HEADER
include_once '../../includes/header.php';
//SELECT
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM usuario WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Editar Cliente</h3>
		<form action="../../controller/usuarios/editar-usuario.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="usuario" id="usuario" value="<?php echo $dados['usuario']; ?>">
				<label for="usuario">Usuário</label>
			</div>
			<div class="input-field col s12">
				<input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
				<label for="senha">Senha</label>
			</div>
			<button type="submit" name="btn-editar" class="btn green">Atualizar</button>
			<a href="index.php" class="btn orange">Lista de Usuários</a>
		</form>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>