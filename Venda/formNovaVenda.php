<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styleCadastrarVenda.css">
        <title>Cadastro de Venda</title>
        <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
    </head>
    <body>
        <?php
            require_once('../barra.php');
        ?>
        <div class="container">
        <form action="abrirVenda.php" method="post">

            <div class="form">
                <div class="texto"><h1>Cadastro de Venda</h1></div>

            <label for="cliente">Nome do Cliente</label><br>
            <input type="text" name="cliente" id="cliente"><br>

            <button>Abrir venda</button>
            <a href="../menu/Venda.php"><button type="button">Voltar</button></a>
    </form>
    </div>
    </div>
    </body>
</html>

