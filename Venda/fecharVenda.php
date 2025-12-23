<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Venda</title>
    </head>
    <body>
        <h1>Cadastro de Venda</h1>
        <?php
        require_once '../database/Conexao.php';
        require_once '../database/DaoVenda.php';
       
        session_start();
        $codigoVenda = $_SESSION['vendaaberta'];

        $daoVenda = new DaoVenda();

        if($codigoDaVenda = $daoVenda->fecharVenda($codigoVenda)) {
            
            unset($_SESSION['vendaaberta']);
            header("location: listaVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>