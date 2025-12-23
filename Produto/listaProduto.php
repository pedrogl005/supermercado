<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleLista.css">
    <title>Lista Produto</title>
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
    <th>MARCA</th>
    <th>PRECO</th>
    <th>DT DE VENCIMENTO</th>
    <th>QUANTIDADE</th>
    <th>FORNECEDOR</th>
    <th colspan="2">AÇÕES</th>
</tr>

<?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Supermercado');

require_once BASE . '\Produto\Produto.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\DaoProduto.php';

$daoProduto = new DaoProduto();
$lista = $daoProduto ->listaTodos();

foreach ($lista as $registro){
    echo '<tr>';
    echo '<td>' . $registro['codigo'] . '</td>';
    echo '<td>' . $registro['nome'] . '</td>';
    echo '<td>' . $registro['marca'] . '</td>';
    echo '<td>' . $registro['preco'] . '</td>';
    echo '<td>' . $registro['dtVencimento'] . '</td>';
    echo '<td>' . $registro['quantidade'] . '</td>';
    echo '<td>' . $registro['fornecedor'] . '</td>';

    ?>

<td>
    <form action="excluiProduto.php" method="post">
        <input type="hidden" name="codigo_produto" codigo="codigo_produto" value="<?= $registro['codigo'] ?>">
        <div class="botaoExcluir"><button>Excluir</button></div>
    </form>
    </td>
    <td>
    <form action="formAlteraProduto.php" method="post">
        <input type="hidden" name="codigo_produto" id="codigo_produto" value="<?= $registro['codigo'] ?>">
        <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
        <input type="hidden" name="marca" id="marca" value="<?= $registro['marca'] ?>">
        <input type="hidden" name="preco" id="preco" value="<?= $registro['preco'] ?>">
        <input type="hidden" name="dtVencimento" id="dtVencimento" value="<?= $registro['dtVencimento'] ?>">
        <input type="hidden" name="quantidade" id="quantidade" value="<?= $registro['quantidade'] ?>">
        <input type="hidden" name="fornecedor" id="fornecedor" value="<?= $registro['fornecedor'] ?>">
        <div class="botaoEditar"><button>Editar</button></div>
    </form>
    </td>

    <?php
    echo '</tr>';
}

?>

        </table>
        <div class="botaoVoltarInicio">
        <a href="../menu/Produto.php"><button>Voltar</button></a>
        <a href="../"><button>Início</button></a>
        </div>
    </body>

</html>
