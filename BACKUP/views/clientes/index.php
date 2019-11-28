<?php
//CONEXÃO
include_once '../../DAO/db_connect.php';
//HEADER
include_once '../../includes/header.php';
//MENSAGEM
include_once '../../includes/message.php';

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Clientes</h3>
		<table>
			<thead>
				<tr>
					<th>Nome Fantasia</th>
					<th>CNPJ</th>
					<th>Segmento</th>
					<th>Consultor</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM cliente";
				$resultado = mysqli_query($connect, $sql);
				if(mysqli_num_rows($resultado) > 0):
				while($dados = mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['cnpj']; ?></td>
						<td><?php echo $dados['segmento']; ?></td>
						<td><?php echo $dados['consultor']; ?></td>
						<td><a href="editar-cliente.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						<td><a href="informacoes-cliente.php?id=<?php echo $dados['id']; ?>" class="btn">Detalhes</a></td>

						<!-- Modal Structure -->
						<div id="modal<?php echo $dados['id']; ?>" class="modal">
							<div class="modal-content">
								<p>Tem certeza que deseja excluir o cliente <?php echo $dados['nome']; ?><b></b></p>
							</div>
							<div class="modal-footer">
								

								<form action="../../controller/clientes/deletar-cliente.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
									<button type="submit" name="btn-deletar" class="btn red">SIM, TENHO CERTEZA</button>
									<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
								</form>

							</div>
						</div>
					</tr>
				<?php 
				endwhile; 
				else: ?>
					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>	
				<?php
				endif;
				?>
			</tbody>
		</table>
		<br>
		<a href="cadastrar-cliente.php" class="btn">Adicionar Cliente</a>
	</div>
</div>

<?php  
include_once '../../includes/footer.php';
?>