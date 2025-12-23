<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleMenu.css">
    <title>Menu Produtos Para Troca</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'Supermercado');

    require_once '../barra.php';

    echo '<br>';
    
    /*echo "<h2>Produtos para Troca</h2>";
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/formNovoProdutost.php">Cadastrar Produtos para Troca</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/listaProdutost.php">Listar Produtos para Troca</a><br>';*/
?>

    <div class="titulo">
        <h2>Produtos para Troca</h2>
    </div>

    <div class="botao">
        <a href="../Produtost/formNovoProdutost.php"><button>Cadastrar Produtos para Troca</button></a>
        <a href="../Produtost/listaProdutost.php"><button>Listar Produtos para Troca</button></a>
    </div>

</body>
</html>