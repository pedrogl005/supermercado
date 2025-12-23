<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleLista.css">
    <title>Lista Cliente</title>
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
    <th>CPF</th>
    <th>ENDERECO</th>
    <th>NUMERO</th>
    <th colspan="2">AÇÕES</th>
</tr>

<?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/Supermercado');

require_once BASE . '/Cliente/Cliente.php';
require_once BASE . '/database/Conexao.php';
require_once BASE . '/database/DaoCliente.php';

$daoCliente = new DaoCliente();
$lista = $daoCliente ->listaTodos();

foreach ($lista as $registro){
    echo '<tr>';
    echo '<td>' . $registro['codigo'] . '</td>';
    echo '<td>' . $registro['nome'] . '</td>';
    echo '<td>' . $registro['cpf'] . '</td>';
    echo '<td>' . $registro['endereco'] . '</td>';
    echo '<td>' . $registro['numero'] . '</td>';
    ?>
    
    <td>
    <form action="excluiCliente.php" method="post">
        <input type="hidden" name="codigo_cliente" codigo="codigo_cliente" value="<?= $registro['codigo'] ?>">
        <div class="botaoExcluir"><button>Excluir</button></div>
    </form>
    </td>
    <td>
    <form action="formAlteraCliente.php" method="post">
        <input type="hidden" name="codigo_cliente" id="codigo_cliente" value="<?= $registro['codigo'] ?>">
        <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
        <input type="hidden" name="cpf" id="cpf" value="<?= $registro['cpf'] ?>">
        <input type="hidden" name="endereco" id="endereco" value="<?= $registro['endereco'] ?>">
        <input type="hidden" name="numero" id="numero" value="<?= $registro['numero'] ?>">
        <div class="botaoEditar"><button>Editar</button></div>
    </form>
    </td>
    <?php
    /*
    echo '<td>';
    echo '<form action="excluiCliente.php" method="post">';
    echo '<input type="text" name="codigo_cliente" codigo="codigo_cliente" value="' . $registro['codigo'] . '"<>';
    echo '<button>Excluir</button>';
    echo '</form>';
    echo '<td>';
    */
    echo '</tr>';
}

?>

        </table>
        <div class="botaoVoltarInicio">
        <a href="../menu/Cliente.php"><button>Voltar</button></a>
        <a href="../"><button>Início</button></a>

        <!--
        <div class="botaoVoltar"><a href="../menu/Cliente.php"><button>Voltar</button></a></div>

        <div class="botaoInicio"><a href="../"><button>Início</button></a></div>
-->

        </div>
    </body>

</html>