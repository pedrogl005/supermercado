<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleFormAltera.css">
    <title>Novo Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<?php
    $codigo = $_POST['codigo_fornecedor'];
    $nome = $_POST['nome'];
    $empresa = $_POST['empresa'];
    $contato = $_POST['contato'];
    $cidade = $_POST['cidade'];
?>
<body>
    <?php
        require_once('../barra.php');
    ?>

    <div class="container">
    <form action="alteraFornecedor.php" method="post">

        <div class="form">
        <div class="texto"><h1>Altera Fornecedor</h1></div>

        <input type="hidden" id="codigo" name="codigo" value="<?= $codigo ?>"><br>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="empresa">Empresa</label>
        <input type="text" id="empresa" name="empresa" value="<?= $empresa ?>"><br>

        <label for="contato">Contato</label>
        <input type="text" id="contato" name="contato" value="<?= $contato ?>"><br>

        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" value="<?= $cidade ?>"><br>

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