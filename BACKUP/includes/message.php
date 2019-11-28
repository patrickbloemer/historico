<?php session_start();
	//SESSÃO
	if(isset($_SESSION['mensagem'])): ?>
		<script type="text/javascript">
			window.onload = function(){
				M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
			};
		</script>
	<?php 
	endif;
	session_unset();
?>