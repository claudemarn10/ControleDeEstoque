<?php 

include 'conexao.php';

$id = $_POST['id']; 
$nome_categoria =$_POST['nome_categoria'];



// caso precise testar colocar echo na frente do $sql

 $sql= "UPDATE `categoria` SET `nome_categoria`= '$nome_categoria', `categoria` WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container" style="width:400px">
	<center>
		<h3>Categoria atualizada com successo<h3>
			<div style="margin-top: 10px">		 
				<a href="_listar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
			</div> 		
	</center>	
</div>	
