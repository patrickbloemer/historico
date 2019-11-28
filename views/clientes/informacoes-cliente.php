<?php
//CONEXÃO
include_once '../../DAO/db_connect.php';
//HEADER
include_once '../../includes/header.php';
//SELECT
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="container">
	<div class="row">
		<div class="col s12">
			<h3 class="light">Informações Cliente</h3>
		</div>
		<div class="col s6">
			<table class="striped">
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
			<h3>Serviços Contratados</h3>
			<table class="striped">
				<tbody>
					<tr>
						<td>Site</td>
						<?php 
							if($dados['site'] == 1){
								?>
									<td class="green lighten-1">Ativo</td>
								<?php 
							}else{
								?>
									<td class="red lighten-2">Inativo</td>
								<?php 
							}
						?>
					</tr>
					<tr>
						<td>SEO</td>
						<?php 
							if($dados['seo'] == 1){
								?>
									<td class="green lighten-1">Ativo</td>
								<?php 
							}else{
								?>
									<td class="red lighten-2">Inativo</td>
								<?php 
							}
						?>
					</tr>
					<tr>
						<td>ADS</td>
						<?php 
							if($dados['ads'] == 1){
								?>
									<td class="green lighten-1">Ativo</td>
								<?php 
							}else{
								?>
									<td class="red lighten-2">Inativo</td>
								<?php 
							}
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>