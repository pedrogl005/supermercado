<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device- width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleNovo.css">
    <title>Novo Produtost</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
        require_once('../barra.php');
        /*require_once('../menu/Produtost.php');*/
    ?>
    <!--<div class="titulo"><h1>Novo Produto para Troca</h1></div>-->

    <?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '\Produtost\Produtost.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\DaoProdutost.php';

$n = $_POST['nome'];
$m = $_POST['marca'];
$p = $_POST['preco'];
$d = $_POST['dtVencimento'];
$q = $_POST['quantidade'];
$pd = $_POST['codigo_produto'];

$produtost = new Produtost(null, $n, $m, $p, $d, $q, $pd);
$daoProdutost = new DaoProdutost();

if($daoProdutost->inclui($produtost)) {
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


