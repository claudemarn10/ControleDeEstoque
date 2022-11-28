<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title> Listagem de produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/2bcfa7a79f.js" crossorigin="anonymous"></script>
</head>
<body>
	
  <div class="container" style="margin-top: 40px">
   <h1> Lista de Produtos</h1>

   <table class="table">
    <thead  class="thead-dark">
      <tr>
        <th scope="col">Nro Produto</th>
        <th scope="col">Nome produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação      </th>

      </tr>
    </thead>

    <tr>
    	<?php
     include 'conexao.php';
     $sql = "SELECT * FROM `estoque`";
     $busca = mysqli_query($conexao,$sql);

     while ($array = mysqli_fetch_array($busca)) {

       $id_estoque = $array['id_estoque'];
       $nroproduto = $array['nroproduto'];
       $nomeproduto = $array['nomeproduto'];
       $categoria = $array['categoria'];
       $quantidade = $array['quantidade'];
       $fornecedor = $array['fornecedor'];
       ?>
       <tr>
         <td><?php  echo "$nroproduto";?></td>
         <td><?php  echo "$nomeproduto";?></td>
         <td><?php  echo "$categoria";?></td>
         <td><?php  echo "$quantidade";?></td>
         <td><?php  echo "$fornecedor";?></td>
         <td><a class="btn btn-warning"  style="color: #fff" href="editar_produtos.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i> &nbsp;Editar</a>

          <a  class="btn btn-danger"  style="color: #fff" href="deletar_produtos.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i> &nbsp;Excluir</a>

        </td>

      </tr>	
    <?php } ?> 			
    
  </tr>

  
</table>
  <div style="text-align: right;">        
      <!--botão de voltar -->
      <a href="index.php" role= "button" class="btn btn-primary">Voltar</a>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>