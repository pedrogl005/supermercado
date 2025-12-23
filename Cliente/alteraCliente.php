<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleAltera.css">
    <title>Altera CLiente</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    
<?php
require_once('../barra.php');
?>

<?php
require_once '../database/Conexao.php';
require_once '../Cliente/Cliente.php';
require_once '../database/DaoCliente.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];

$cliente = new Cliente(
    $codigo,
    $nome,
    $cpf,
    $endereco,
    $numero
);

$dao = new DaoCliente();
if($dao->altera($cliente)){
    echo '<p class="resultado-if">Editou.</p>';
}else {
    echo '<p class="resultado-if">Algum erro.</p>';
}
?>

<div class="botao">
    <a href="../menu/Cliente.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>
