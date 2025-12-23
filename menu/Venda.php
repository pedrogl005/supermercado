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
    
    /*echo "<h2>Vendas</h2>";
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Venda/formNovaVenda.php">Cadastrar Venda</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Venda/listaVenda.php">Listar Vendas</a><br>';*/
?>

    <div class="titulo">
        <h2>Vendas</h2>
    </div>

    <div class="botao">
        <a href="../Venda/formNovaVenda.php"><button>Cadastrar Venda</button></a>
        <a href="../Venda/listaVenda.php"><button>Listar Venda</button></a>
    </div>

</body>
</html>