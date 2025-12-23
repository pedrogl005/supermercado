<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleCadastrar.css">
    <title>Novo Produto</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    <?php
        require_once('../barra.php');
    ?>
    <div class="container">
    <!--<h1>Novo Produto</h1>-->
    <form action="novoProduto.php" method="post">

    <div class="form">
        <div class="texto"><h1>Novo Produto</h1></div>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca"><br>

        <label for="preco">Preço</label>
        <input type="text" id="preco" name="preco"><br>

        <label for="dtVencimento">Data de Vencimento</label>
        <input type="date" id="dtVencimento" name="dtVencimento"><br>

        <label for="quantidade">Quantidade</label>
    <input type="number" id="quantidade" name="quantidade" min="0"><br>

        <!-- Trocar para data depois
        <label for="dtVencimento">Data de Vencimento</label>
        <input type="date" id="dtVencimento" name="dtVencimento"><br>-->

        <label for="codigo_fornecedor">Fornecedor</label><br>
        <select name="codigo_fornecedor" id="codigo_fornecedor">
            <option value=""></option>
            <?php 
                require_once '../database/Conexao.php';
                require_once '../database/DaoFornecedor.php';

                $daoFornecedor = new DaoFornecedor();

                $listaFornecedor = $daoFornecedor->listaTodos();
                
                foreach ($listaFornecedor as $fornecedor) {
                    /*
                    $id = $fornecedor['id'];
                    $modelo = $fornecedor['modelo'];
                    echo "<option value='$id'>$modelo</option>";
                    */
                    ?>
                        <option value="<?= $fornecedor['codigo'] ?>"><?= $fornecedor['nome'] ?></option>
                    <?php                    
                }

            ?>
        </select>
        
        <br>

    <button>Salvar</button>
    <input type="reset" value="Limpar">
    <!--
    <input type="button" value="Cadastrar">
    <input type="submit" value="Salvar">
    !-->
    <a href="../menu/Produto.php"><button type="button">Voltar</button></a>
    </form>
    </div>
    </div>

</body>
</html>