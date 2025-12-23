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
        require_once '../Venda/Venda.php';
        require_once '../database/Conexao.php';
        require_once '../database/DaoVenda.php';

        $cliente = $_POST['cliente'];

        $venda = new Venda(null, $cliente, null, 0, null);

        $daoVenda = new DaoVenda();

        if($codigoDaVenda = $daoVenda->abrirVenda($venda)) {
            //echo 'Venda cadastrada com sucesso. Código: ';
            session_start();
            $_SESSION['vendaaberta'] = $codigoDaVenda;
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>