<?php 

include 'conexao.php';

$id = $_POST['id']; 
//$nroproduto = $_POST['nroproduto'];
$nomeproduto =$_POST['nomeproduto'];
$categoria  =$_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];




// caso precise testar colocar echo na frente do $sql


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE  id_estoque = $id";


$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container" style="width:400px">
	<center>
		<h3>Atualizado com successo<h3>
			<div style="margin-top: 10px">		 
				<a href="_listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
			</div> 		
	</center>	
</div>	
