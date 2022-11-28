<?php
	include 'conexao.php';

	$id= $_GET['id'];

	$sql="DELETE FROM `estoque` WHERE id_estoque = $id";

	$delete = mysqli_query($conexao,$sql);	

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container" style="width:400px">
	<center>
		<h3>Deletado com sucesso<h3>
			<div style="margin-top: 10px">		 
				<a href="_listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
			</div> 		
	</center>	
</div>	
