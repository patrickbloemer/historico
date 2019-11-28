<?php
//HEADER
include_once '../../includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Cliente</h3>
		<form action="../../controller/clientes/cadastrar-cliente.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="cnpj" id="cnpj">
				<label for="cnpj">CNPJ</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="segmento" id="segmento">
				<label for="segmento">Segmento</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="consultor" id="consultor">
				<label for="consultor">Consultor</label>
			</div>
			<button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
			<a href="index.php" class="btn orange">Lista de Clientes</a>
		</form>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>