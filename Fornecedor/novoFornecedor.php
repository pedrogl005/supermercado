<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device- width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleNovo.css">
    <title>Novo Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
        require_once('../barra.php');
        /*require_once('../menu/Fornecedor.php');*/
    ?>
    <!--<div class="titulo"><h1>Novo Fornecedor</h1></div>-->

    <?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '\Fornecedor\Fornecedor.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\DaoFornecedor.php';

$n = $_POST['nome'];
$e = $_POST['empresa'];
$co = $_POST['contato'];
$ci = $_POST['cidade'];

$fornecedor = new Fornecedor(null, $n, $e, $co, $ci);
$daoFornecedor = new DaoFornecedor();

if($daoFornecedor->inclui($fornecedor)) {
    echo '<p class="resultado-if">Gravou.</p>';
} else {
    echo '<p class="resultado-else">Deu Zebra.</p>';
}
?>

<div class="botao">
    <a href="../menu/Fornecedor.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>
