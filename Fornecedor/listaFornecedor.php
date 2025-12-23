<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleLista.css">
    <title>Lista Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>

<?php
        require_once('../barra.php');
    ?>

    <table border="1">
    
    <tr>
    <th>CODIGO</th>
    <th>NOME</th>
    <th>EMPRESA</th>
    <th>CONTATO</th>
    <th>CIDADE</th>
    <th colspan="2">AÇÕES</th>
</tr>

<?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/Supermercado');

require_once '../Fornecedor/Fornecedor.php';
require_once '../database/Conexao.php';
require_once '../database/DaoFornecedor.php';

$daoFornecedor = new DaoFornecedor();
$lista = $daoFornecedor ->listaTodos();

foreach ($lista as $registro){
    echo '<tr>';
    echo '<td>' . $registro['codigo'] . '</td>';
    echo '<td>' . $registro['nome'] . '</td>';
    echo '<td>' . $registro['empresa'] . '</td>';
    echo '<td>' . $registro['contato'] . '</td>';
    echo '<td>' . $registro['cidade'] . '</td>';
    
    ?>

    <td>
    <form action="excluiFornecedor.php" method="post">
        <input type="hidden" name="codigo_fornecedor" codigo="codigo_fornecedor" value="<?= $registro['codigo'] ?>">
        <div class="botaoExcluir"><button>Excluir</button></div>
    </form>
    </td>
    <td>
    <form action="formAlteraFornecedor.php" method="post">
        <input type="hidden" name="codigo_fornecedor" id="codigo_fornecedor" value="<?= $registro['codigo'] ?>">
        <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
        <input type="hidden" name="empresa" id="empresa" value="<?= $registro['empresa'] ?>">
        <input type="hidden" name="contato" id="contato" value="<?= $registro['contato'] ?>">
        <input type="hidden" name="cidade" id="cidade" value="<?= $registro['cidade'] ?>">
        <div class="botaoEditar"><button>Editar</button></div>
    </form>
    </td>

    <?php
    echo '</tr>';
}

?>

        </table>
        <div class="botaoVoltarInicio">
        <a href="../menu/Fornecedor.php"><button>Voltar</button></a>
        <a href="../"><button>Início</button></a>
        </div>
    </body>

</html>
