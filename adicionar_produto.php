<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HACCR</title>
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
	</style>



	<!--Formulario-->

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h2>Formulario de Cadastro</h2>

		<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label>Nro Produto</label>
				<input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
			</div>

			<div class="form-group">
				<label>Nome do Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto">
			</div>


			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="categoria">
					<?php 
					include 'conexao.php';
					$sql = "SELECT * FROM  categoria order by nome_categoria ASC";
					$buscar = mysqli_query($conexao,$sql);

					while ($array = mysqli_fetch_array($buscar)) {

						$id_categoria = $array['id_categoria'];
						$nome_categoria = $array['nome_categoria'];
						?>

						<option> <?php   echo $nome_categoria ?></option>

					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto">
			</div>
			<div class="form-group">
				<label>Fornecedor</label>
				<select class="form-control" name="fornecedor">

					<?php
					include 'conexao.php';
					$sql2 = "SELECT * FROM fornecedor order by nome_forn ASC";
					$buscar2 = mysqli_query($conexao, $sql2);

					while ($array2 = mysqli_fetch_array($buscar2)) {
						$id_fornecedor = $array2['id_forn'];
						$nome_fornecedor = $array2['nome_forn'];				


						?>
						<option ><?php  echo $nome_fornecedor; ?></option>
					<?php } ?> 	

				</select>
			</div>

			<!--botão de salvar 
				
			<div style="text-align: right;">        
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		    -->
			<div>
				<button type="submit" class="btn btn-success">Cadastrar</button>
				<a href="index.php" role= "button" class="btn btn-primary">Voltar</a>
		    </div>

			
		</form>

		
	</div>    

</body>
</html>