<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleAltera.css">
    <title>Altera Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    
<?php
require_once('../barra.php');
?>

<?php
require_once '../database/Conexao.php';
require_once '../Fornecedor/Fornecedor.php';
require_once '../database/DaoFornecedor.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$contato = $_POST['contato'];
$cidade = $_POST['cidade'];

$fornecedor = new Fornecedor(
    $codigo,
    $nome,
    $empresa,
    $contato,
    $cidade
);

$dao = new DaoFornecedor();
if($dao->altera($fornecedor)){
    echo '<p class="resultado-if">Editou.</p>';
}else {
    echo '<p class="resultado-if">Algum erro.</p>';
}
?>

<div class="botao">
    <a href="../menu/Fornecedor.php"><button>Voltar</button></a>
    <a href="../"><button>Início</button></a>
</div>

</body>
</html>
