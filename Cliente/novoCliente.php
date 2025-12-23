<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device- width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleNovo.css">
    <title>Novo Cliente</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    
    <?php
        require_once('../barra.php');
        /* require_once('../menu/Cliente.php'); */
    ?>

    <!--<div class="titulo"><h1>Novo Cliente</h1></div>-->

    <?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '\Cliente\Cliente.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\DaoCliente.php';

$n = $_POST['nome'];
$cp = $_POST['cpf'];
$e = $_POST['endereco'];
$nu = $_POST['numero'];

$cliente = new Cliente(null, $n, $cp, $e, $nu);
$daoCliente = new DaoCliente();

if($daoCliente->inclui($cliente)) {
    echo '<p class="resultado-if">Gravou.</p>';
} else {
    echo '<p class="resultado-else">Deu Zebra.</p>';
}
?>

<div class="botao">
    <a href="../menu/Cliente.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>
