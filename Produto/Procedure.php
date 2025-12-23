<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantidadeVendidaPorProduto</title>
</head>
<body>
<?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '..\Produto\Produto.php';
require_once BASE . '..\database\Conexao.php';
require_once BASE . '..\database\DaoProduto.php';
?>


    <form action="getQuantidadeVendidaPorProduto.php" method="post">
        <label for="nomeProduto">Nome do Produto:</label>
        <input type="text" id="nomeProduto" name="nomeProduto">
        <button type="submit">Obter Quantidade Vendida</button>
    </form>
</body>
</html>