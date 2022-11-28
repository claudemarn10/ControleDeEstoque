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
		<h2>Editar Categoria</h2>

		<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
			
			<?php

			$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {

				$id_categoria = $array['id_categoria'];
				$nome_categoria = $array['nome_categoria'];
				
				?>

				
				<div class="form-group">
					<label>Nome da Categoria</label>
					<input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria ?>">
					
					<!-- criado id para comparar com o valor que esta no banco de dados-->
					<input type="number" class="form-control" 
					name="id" value="<?php echo $id ?>" style = "display: none;"> 
				</div>

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