<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleExcluir.css">
    <title>Excluir Produto</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>

<?php
require_once('../barra.php');
?>
    
<?php
require_once '../database/Conexao.php';
require_once '../database/DaoProduto.php';

$codigo = $_POST['codigo_produto'];

$dao = new DaoProduto();
if($dao->exclui($codigo)){
    echo '<p class="resultado-if">Excluiu.</p>';
}else {
    echo '<p class="resultado-if">Zebrou.</p>';
}
?>

<div class="botao">
    <a href="../menu/Produto.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>
