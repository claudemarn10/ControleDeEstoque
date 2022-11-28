<!DOCTYPE html>
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
		#botao {
			background-color: #FF1168; /*cor de fundo*/
			color: #ffffff; /*cor da letra*/
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
	    
	    

	<h4>Cadastro de Categoria</h4>

	<form action="_inserir_categoria.php" method="post" style="margin-top: 20px">
	
		<div class="form-group">
			<input type="text" class="form-control" name="nome_categoria" placeholder="Digite o nome da Categoria" >
		
		<!-- criado id para comparar com o valor que esta no banco de dados-->
			<input type="number" class="form-control" 
			     name="id" value="<?php echo $id ?>" style = "display: none;"> 
		</div>

		
		<div style="text-align: right;">        
			<!--botão de salvar -->

			<button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
					<a href="index.php" role= "button" class="btn btn-primary">Voltar</a>
	
		</div>
	</form>

</div>    

</body>
</html>