<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleCadastrar.css">
    <title>Novo Fornecedor</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    <?php
        require_once('../barra.php');
    ?>
    <div class="container">
    <!--<h1>Novo Fornecedor</h1>-->

    <form action="novoFornecedor.php" method="post">

    <div class="form">
        <div class="texto"><h1>Novo Fornecedor</h1></div>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="empresa">Endereco</label>
        <input type="text" id="empresa" name="empresa"><br>

        <label for="contato">Telefone</label>
        <input type="text" id="contato" name="contato"><br>

        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade"><br>

        <br>

    <button>Salvar</button>
    <input type="reset" value="Limpar">
    
    <!--
    <input type="button" value="Cadastrar">
    <input type="submit" value="Salvar">
    <input type="reset" value="Limpar">!-->

    <a href="../menu/Fornecedor.php"><button type="button">Voltar</button></a>
    </form>
    </div>
    </div>
</body>
</html>