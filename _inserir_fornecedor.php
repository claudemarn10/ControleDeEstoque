<?php

include 'conexao.php';

$fornecedor =$_POST['fornecedor'];



$sql= "INSERT INTO `fornecedor`(`nome_forn`) VALUES ('$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	

    <center>
	<div class="container" style="width: 500px; margin: 50px">
		
		<h4>Adicionado com sucesso!</h4>
		<div style="padding-top:  20px">
			<a href="adicionar_fornecedor.php" role= "button" class="btn btn-primary" >Voltar</a>
		</div>	
	</center>
 