<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleExcluir.css">
    <title>Excluir Cliente</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    
<?php
require_once('../barra.php');
?>

<?php
require_once '../database/Conexao.php';
require_once '../database/DaoCliente.php';

$codigo = $_POST['codigo_cliente'];

$dao = new DaoCliente();
if($dao->exclui($codigo)){
    echo '<p class="resultado-if">Excluiu.</p>';
}else {
    echo '<p class="resultado-if">Zebrou.</p>';
}
?>

<div class="botao">
    <a href="../menu/Cliente.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>


