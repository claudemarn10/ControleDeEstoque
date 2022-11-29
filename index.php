<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style type="text/css">
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 0px 3px 66px 4px rgba(107, 89, 107, 1);
            -moz-box-shadow: 0px 3px 66px 4px rgba(107, 89, 107, 1);
            box-shadow: 0px 3px 66px 4px rgba(107, 89, 107, 1);

        }
    </style>
</head>

<body>
    <div class="container" id="tamanho" style="margin-top: 100px;border-radius: 15px;border: 2px solid #f3f3f3;">
        <div style="padding: 10px;"></div>
        <center>
            <img src="img/cadeado.jpg" alt="cadeado" width="125px" height="125%">
        </center>
        <form>
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required>

            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off
                " required>

            </div>

        </form>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-sm btn-sucess">Entrar</button>

        </div>

    </div>
</body>

</html>