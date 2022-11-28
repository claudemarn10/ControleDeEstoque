<!DOCTYPE html>

<?php
include 'conexao.php';

$id = $_GET['id'];

?>




<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CURSO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	.header{
		margin: 20px;
	}
	.navbar{
		margin-bottom: 1rem;
	}
</style>
</head>
<body>

	

	<style type="text/css">

	#tamanhoContainer{
		width: 500px;

	}

	#tamanhoContainer01{
		width: 500px;

	}
</style>



<!--Formulario-->

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h2>Editar Cadastro</h2>

	<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
		
		<?php

		$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
		$buscar = mysqli_query($conexao,$sql);

		while ($array = mysqli_fetch_array($buscar)) {

			$id_estoque = $array['id_estoque'];
			$nroproduto = $array['nroproduto'];
			$nomeproduto = $array['nomeproduto'];
			$categoria = $array['categoria'];
			$quantidade = $array['quantidade'];
			$fornecedor = $array['fornecedor'];
			
		    ?>

		<div class="form-group">
			<label>Nro Produto</label>
			<input type="number" class="form-control" 
			     name="nroproduto" value="<?php echo $nroproduto ?>" disabled>

			 <!-- criado id para comparar com o valor que esta no banco de dados-->
			<input type="number" class="form-control" 
			     name="id" value="<?php echo $id ?>" style = "display: none;">     
		</div>

		<div class="form-group">
			<label>Nome do Produto</label>
			<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
		</div>


		<div class="form-group">
			<label>Categoria</label>
			<select class="form-control"name="categoria" value =" <?php  echo $categoria ?>">
				<option >Periférico</option>
				<option >Hardware</option>
				<option >Software</option>
				<option >Celulares</option>
				<option >Impressoras</option>
				<option >Tinclient</option>
				<option >Raspberry</option>
			</select>
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input type="number" class="form-control" name="quantidade"  value="<?php echo $quantidade ?>">
		</div>
		<div class="form-group">
			<label>Fornecedor</label>
			<select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
				<option >Fornecedor A</option>
				<option >Fornecedor B</option>
				<option >Fornecedor C</option>

			</select>
		</div>
		
		<div style="text-align: right;">        
			<!--botão de salvar -->
			<button type="submit" class="btn btn-success">Atualizar</button>
		</div>
	<?php  } ?>
</form>

</div>    

</body>
</html>