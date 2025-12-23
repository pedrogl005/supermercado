<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleFormAltera.css">
    <title>Novo Cliente</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<?php
    $codigo = $_POST['codigo_cliente'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
?>
<body>
    <?php
        require_once('../barra.php');
    ?>

    <div class="container">
    <form action="alteraCliente.php" method="post">

        <div class="form">
        <div class="texto"><h1>Altera Cliente</h1></div>

        <input type="hidden" id="codigo" name="codigo" value="<?= $codigo ?>"><br>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="<?= $cpf ?>"><br>

        <label for="endereco">Endereco</label>
        <input type="text" id="endereco" name="endereco" value="<?= $endereco ?>"><br>

        <label for="numero">Numero</label>
        <input type="text" id="numero" name="numero" value="<?= $numero ?>"><br>

        <br>

    <button>Salvar</button>
    <input type="reset" value="Limpar">
    <!--
    <input type="button" value="Cadastrar">
    <input type="submit" value="Salvar">
    !-->

    <a href="../menu/Cliente.php"><button type="button">Voltar</button></a>
    </form>
    </div>
    </div>
    
</body>
</html>