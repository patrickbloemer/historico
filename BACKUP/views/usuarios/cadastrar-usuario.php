<?php
//HEADER
include_once '../../includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Usuário</h3>
		<form action="../../controller/usuarios/cadastrar-usuario.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="usuario" id="usuario">
				<label for="usuario">Usuário</label>
			</div>
			<div class="input-field col s12">
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>
			<button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
			<a href="index.php" class="btn orange">Lista de Clientes</a>
		</form>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>