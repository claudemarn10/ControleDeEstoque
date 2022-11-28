<?php

include 'conexao.php';

$nome_categoria =$_POST['nome_categoria'];



$sql= "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$nome_categoria')";

$inserir = mysqli_query($conexao, $sql);

?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	

    <center>
	<div class="container" style="width: 500px; margin: 50px">
		
		<h4> Produto adicionado com sucesso!</h4>
		<div style="padding-top:  20px">
			<a href="index.php" role= "button" class="btn btn-primary" >Cadastrar novo Item</a>
		</div>	
	</center>
 