<?php
//HEADER
include_once '../../includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Cliente</h3>
		<form action="../../controller/clientes/cadastrar-cliente.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" required="required">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="cnpj" id="cnpj" required="required">
				<label for="cnpj">CNPJ</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="segmento" id="segmento" required="required">
				<label for="segmento">Segmento</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="consultor" id="consultor" required="required">
				<label for="consultor">Consultor</label>
			</div>
			<h5>Serviços Contratados</h5>
			<div class="input-field col s12">
				<p>
      				<label>
      					<input type="checkbox" name="site" value="Yes" />
	        			<span>Possui Site?</span>
      				</label>
				</p>
			</div>
			<div class="input-field col s12">
				<p>
      				<label>
      					<input type="checkbox" name="seo" value="Yes" />
	        			<span>Possui SEO?</span>
      				</label>
				</p>
			</div>
			<div class="input-field col s12">
				<p>
      				<label>
      					<input type="checkbox" name="ads" value="Yes" />
	        			<span>Possui ADS?</span>
      				</label>
				</p>
			</div>
			<button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
			<a href="index.php" class="btn orange">Lista de Clientes</a>
		</form>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>