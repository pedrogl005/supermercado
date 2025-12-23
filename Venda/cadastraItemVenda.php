<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Reserva</title>
    </head>
    <body>
        <h1>Cadastro de Reserva</h1>
        <?php
        require_once '../ItemVenda/ItemVenda.php';
        require_once '../database/Conexao.php';
        require_once '../database/DaoItemVenda.php';

        session_start();

        $codigoVenda = $_SESSION['vendaaberta'];
        $codigoProduto = $_POST['codigoproduto'];
        $quantidade = $_POST['quantidade'];

        $itemVenda = new ItemVenda(null, $codigoVenda, $codigoProduto, $quantidade, 0);

        $daoItemVenda = new DaoItemVenda();

        if($daoItemVenda->inclui($itemVenda)) {
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>