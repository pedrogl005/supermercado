<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleMenu.css">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'Supermercado');

    require_once '../barra.php';

    echo '<br>';

    /*echo '<br>';
    echo "<h2>Produtos</h2>";
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/formNovoProduto.php">Cadastrar Produtos</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/listaProduto.php">Listar Produtos</a><br>';*/
?>

    <div class="titulo">
        <h2>Produtos</h2>
    </div>

    <div class="botao">
        <a href="../Produto/formNovoProduto.php"><button>Cadastrar Produtos</button></a>
        <a href="../Produto/listaProduto.php"><button>Listar Produtos</button></a>
        <!--<a href="../Produto/Procedure.php"><button>Teste</button></a>-->
    </div>

</body>
</html>