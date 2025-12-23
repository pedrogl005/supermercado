<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleLista.css">
    <title>Listagem de Vendas</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>

<body>
    <?php
        require_once('../barra.php');
    ?>
    <h1>Listagem de Vendas</h1>
    <table border="1">
        <tr>
            <th>CÓDIGO</th>
            <th>CLIENTE</th>
            <th>DATA</th>
            <th>TOTAL</th>
        </tr>
        <?php

        require_once '../database/Conexao.php';
        require_once '../database/DaoVenda.php';

        $daoVenda = new DaoVenda();
        $lista = $daoVenda->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['codigo'] . '</td>';
            echo '<td>' . $registro['cliente'] . '</td>';
            echo '<td>' . $registro['data'] . '</td>';
            echo '<td>' . $registro['valor'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <div class="botaoVoltarInicio">
        <a href="../menu/Venda.php"><button>Voltar</button></a>
        <a href="../"><button>Início</button></a>
    </div>
</body>

</html>