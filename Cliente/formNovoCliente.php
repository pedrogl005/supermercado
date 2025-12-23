<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleCadastrar.css">
    <title>Novo Cliente</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
    <?php
        require_once('../barra.php');
    ?>
    <div class="container">
    <!--<h1>Novo Cliente</h1>-->
    <form action="novoCliente.php" method="post">

    <div class="form">
        <div class="texto"><h1>Novo Cliente</h1></div>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="123.456.789-01" required><br>

        <!-- Metodo 2
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf">-->

        <label for="endereco">Endereco</label>
        <input type="text" id="endereco" name="endereco"><br>

        <label for="numero">Numero</label>
        <input type="text" id="numero" name="numero"><br>

        <!-- Metodo 1
        <script>
        document.getElementById('cpf').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            } else {
                value = value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
            }
            e.target.value = value;
        });
        </script>-->

        <!-- Metodo 2
        <script>
            $(document).ready(function() {
            $('#cpf').inputmask("999.999.999-99"); 
            });
        </script>-->

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