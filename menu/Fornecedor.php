<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleMenu.css">
    <title>Menu Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'Supermercado');

    require_once '../barra.php';

    echo '<br>';

    /*echo '<br>';
    echo "<h2>Fornecedores</h2>";
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/formNovoFornecedor.php">Cadastrar Fornecedores</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/listaFornecedor.php">Listar Fornededores</a><br>';*/
?>

    <div class="titulo">
        <h2>Fornecedores</h2>
    </div>

    <div class="botao">
        <a href="../Fornecedor/formNovoFornecedor.php"><button>Cadastrar Fornecedores</button></a>
        <a href="../Fornecedor/listaFornecedor.php"><button>Listar Fornecedores</button></a>
        <a href="../Fornecedor/listaProdutoFornecedor.php"><button>Listar Produtos por Fornecedor</button></a>
    </div>

</body>
</html>