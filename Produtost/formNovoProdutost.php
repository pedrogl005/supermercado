<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleCadastrar.css">
    <title>Novo Produtost</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    <?php
        require_once('../barra.php');
    ?>

    <div class="container">
    <!--<h1>Novo Produto para Troca</h1>-->
    <form action="novoProdutost.php" method="post">

    <div class="form">
    <div class="texto"><h1>Novo Produto para Troca</h1></div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca"><br>

        <label for="preco">Preço</label>
        <input type="text" id="preco" name="preco"><br>

        <label for="dtVencimento">Data de Vencimento</label>
        <input type="date" id="dtVencimento" name="dtVencimento"><br>

        <label for="quantidade">Quantidade</label>
        <input type="text" id="quantidade" name="quantidade"><br>

        <label for="codigo_produto">Produto</label><br>
        <select name="codigo_produto" id="codigo_produto">
            <option value=""></option>
            <?php 
                require_once '../database/Conexao.php';
                require_once '../database/DaoProduto.php';

                $daoProduto = new DaoProduto();

                $listaProduto = $daoProduto->listaTodos();
                
                foreach ($listaProduto as $produto) {
                    /*
                    $id = $produto['id'];
                    $modelo = $produto['modelo'];
                    echo "<option value='$id'>$modelo</option>";
                    */
                    ?>
                        <option value="<?= $produto['codigo'] ?>"><?= $produto['nome'] ?></option>
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

    <a href="../menu/Fornecedor.php"><button type="button">Voltar</button></a>
    </form>
    </div>
    </div>
</body>
</html>