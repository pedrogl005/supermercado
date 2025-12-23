<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto para Troca</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<?php
    $codigo = $_POST['codigo_produtost'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $dtVencimento = $_POST['dtVencimento'];
    $quantidade = $_POST['quantidade'];
?>
<body>
    <?php
        require_once('../menu/Produtost.php');
    ?>
    <h1>Altera Produto para Troca</h1>
    <form action="alteraProdutost.php" method="post">

        <input type="hidden" id="codigo" name="codigo" value="<?= $codigo ?>"><br>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="empresa">Marca</label>
        <input type="text" id="marca" name="marca" value="<?= $marca ?>"><br>

        <label for="contato">Preço</label>
        <input type="text" id="preco" name="preco" value="<?= $preco ?>"><br>

        <label for="cidade">Data de Vencimento</label>
        <input type="text" id="dtVencimento" name="dtVencimento" value="<?= $dtVencimento ?>"><br>

        <label for="quantidade">Quantidade</label>
        <input type="text" id="quantidade" name="quantidade" value="<?= $quantidade ?>"><br>

        <br>

    <button>Salvar</button>
    <input type="reset" value="Limpar">
    <!--
    <input type="button" value="Cadastrar">
    <input type="submit" value="Salvar">
    !-->

    </form>
</body>
</html>