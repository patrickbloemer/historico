<?php
//CONEXÃO
include_once '../../DAO/db_connect.php';
//HEADER
include_once '../../includes/header.php';
//MENSAGEM
include_once '../../includes/message.php';
//SELECT
if(isset($_GET['id'])):
	$id_cliente = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id_cliente'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1 class="light center"><?php echo $dados["nome"]; ?></h1>
				<br>
			</div>
			<div class="col s12 m6">
				<table class="striped">
					<thead>
						<tr>
							<th colspan="2">Dados</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Nome</td>
							<td><?php echo $dados['nome']; ?></td>
						</tr>
						<tr>
							<td>CNPJ</td>
							<td><?php echo $dados['cnpj']; ?></td>
						</tr>
						<tr>
							<td>Segmento</td>
							<td><?php echo $dados['segmento']; ?></td>
						</tr>
						<tr>
							<td>Consultor</td>
							<td><?php echo $dados['consultor']; ?></td>
						</tr>
					</tbody>
				</table>
				<table class="striped">
					<thead>
						<tr>
							<th colspan="2">Serviços</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Site</td>
							<?php
							if($dados['site'] == 1){
								?>
								<td>
									<style type="text/css">
										.site:checked+span:after{
											background-color: #26a69a;
											border: #26a69a;
										}
									</style>
									<p>
										<label>
											<input class="site" name="site" type="radio" checked />
											<span>Ativo</span>
										</label>
									</p>
								</td>
								<?php 
							}else{
								?>
								<td>
									<style type="text/css">
										.site:checked+span:after{
											background-color: red;
											border: red;
										}
									</style>
									<p>
										<label>
											<input class="site" name="site" type="radio" checked />
											<span>Inativo</span>
										</label>
									</p>
								</td>
								<?php 
							}
							?>
						</tr>
						<tr>
							<td>SEO</td>
							<?php 
							if($dados['seo'] == 1){
								?>
								<td>
									<style type="text/css">
										.seo:checked+span:after{
											background-color: #26a69a;
											border: #26a69a;
										}
									</style>
									<p>
										<label>
											<input class="seo" name="seo" type="radio" checked />
											<span>Ativo</span>
										</label>
									</p>
								</td>
								<?php 
							}else{
								?>
								<td>
									<style type="text/css">
										.seo:checked+span:after{
											background-color: red;
											border: red;
										}
									</style>
									<p>
										<label>
											<input class="seo" name="seo" type="radio" checked />
											<span>Inativo</span>
										</label>
									</p>
								</td>
								<?php 
							}
							?>
						</tr>
						<tr>
							<td>ADS</td>
							<?php 
							if($dados['ads'] == 1){
								?>
								<td>
									<style type="text/css">
										.ads:checked+span:after{
											background-color: #26a69a;
											border: #26a69a;
										}
									</style>
									<p>
										<label>
											<input class="ads" name="ads" type="radio" checked />
											<span>Ativo</span>
										</label>
									</p>
								</td>
								<?php 
							}else{
								?>
								<td>
									<style type="text/css">
										.ads:checked+span:after{
											background-color: red;
											border: red;
										}
									</style>
									<p>
										<label>
											<input class="ads" name="ads" type="radio" checked />
											<span>Inativo</span>
										</label>
									</p>
								</td>
								<?php 
							}
							?>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col s12 m6">
				<div class="row">
					<div class="col s12">
						<h4 class="light">Informações Adicionais</h4>
						<div class="informacoes-adicionais">
							<?php 
							$sql = "SELECT * FROM informacao_adicional WHERE id_cliente = '$id_cliente'";
							$resultado = mysqli_query($connect, $sql);
							if(mysqli_num_rows($resultado) > 0):
								while($dados = mysqli_fetch_array($resultado)):
									?>
									<span>
										► <?php echo $dados['informacao_adicional']; ?>
									</span>
									<br>
									<?php 
								endwhile; 
								else: ?>
									<span>
										Nenhuma Informação Adicional
									</span>	
									<?php
								endif;
								?>
							</div>
							<a class="waves-effect waves-light btn modal-trigger" href="#modal-informacoes-adicionais">Adicionar Info</a>

							<!-- MODAL DE ADICIONAR INFORMAÇÕES ADICIONAIS -->
							<div id="modal-informacoes-adicionais" class="modal">
								<div class="modal-content">
									<h4>Adicionar Informação Adicional</h4>
									<hr>
									<form action="../../controller/informacoes-adicionais/cadastrar-informacao-adicional.php" method="POST">
										<input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
										<div class="input-field col s12">
											<textarea name="informacao-adicional" id="informacao-adicional" class="materialize-textarea"></textarea>
											<label for="informacao-adicional">Informação Adicional</label>
										</div>
										<button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
									</form>
								</div>
								<div class="modal-footer">
									<a href="#!" class="modal-close waves-effect waves-green btn-flat red btn white-text">Cancelar</a>
								</div>
							</div>

							<a class="waves-effect waves-light deep-orange btn modal-trigger" href="#modal-listagem-informacoes-adicionais">Ver Infos</a>

							<!-- MODAL DE LISTAR INFORMAÇÕES ADICIONAIS -->
							<div id="modal-listagem-informacoes-adicionais" class="modal">
								<div class="modal-content">
									<h4>Informações Adicionais</h4>
									<h6><?php echo $dados['nome']; ?></h6>
									<hr>
									<?php 
							$sql = "SELECT * FROM informacao_adicional WHERE id_cliente = '$id_cliente'";
							$resultado = mysqli_query($connect, $sql);
							if(mysqli_num_rows($resultado) > 0):
								while($dados = mysqli_fetch_array($resultado)):
									?>
									<span>
										► <?php echo $dados['informacao_adicional']; ?>
									</span>
									<br>
									<?php 
								endwhile; 
								else: ?>
									<span>
										Nenhuma Informação Adicional
									</span>	
									<?php
								endif;
								?>
									</div>
									<div class="modal-footer">
										<a href="#!" class="modal-close waves-effect waves-green btn-flat red btn white-text">Fechar</a>
									</div>
								</div>

							</div>
							<div class="col s12">
								<h4 class="light">Histórico de Alterações</h4>
								<div class="historico-alteracoes">
									<ul>
										<li>Listagem aqui...</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php  
		include_once '../../includes/footer.php';
		?>