<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styleNovo.css">
    <meta name="viewport" content="width=device- width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
<?php
        require_once('../barra.php');
        /*require_once('../menu/Produto.php');*/
    ?>
    <!--<div class="titulo"><h1>Novo Produto</h1></div>-->

    <?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '\Produto\Produto.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\DaoProduto.php';

$n = $_POST['nome'];
$m = $_POST['marca'];
$p = $_POST['preco'];
$d = $_POST['dtVencimento'];
$q = $_POST['quantidade'];
$f = $_POST['codigo_fornecedor'];

$produto = new Produto(null, $n, $m, $p, $d, $q, $f);
$daoProduto = new DaoProduto();

if($daoProduto->inclui($produto)) {
    echo '<p class="resultado-if">Gravou.</p>';
} else {
    echo '<p class="resultado-else">Deu Zebra.</p>';
}
?>

<div class="botao">
    <a href="../menu/Produto.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>


