<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecluir Produto para Troca</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>

<?php
require_once('../barra.php');
?>

<?php
require_once '../database/Conexao.php';
require_once '../database/DaoProdutost.php';

$codigo = $_POST['codigo_produtost'];

$dao = new DaoProdutost();
if($dao->exclui($codigo)){
    echo '<p class="resultado-if">Excluiu.</p>';
}else {
    echo '<p class="resultado-if">Zebrou.</p>';
}
?>

<div class="botao">
    <a href="../menu/Produtost.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>

