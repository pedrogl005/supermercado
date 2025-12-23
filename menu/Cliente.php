<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleMenu.css">
    <title>Menu Cliente</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>
<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'Supermercado');

    require_once '../barra.php';

    echo '<br>';
    
    /*echo "<h2>Clientes</h2>";
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/formNovoCliente.php">Cadastrar Clientes</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/listaCliente.php">Listar Clientes</a><br>';*/
    
    /*echo '<h2>Clientes</h2>';
    echo '<a href="../Cliente/formNovoCliente.php"><button>Cadastrar Clientes</button></a>';
    echo '<a href="../Cliente/listaCliente.php"><button>Listar Clientes</button></a>';*/
?>

    <div class="titulo">
        <h2>Clientes</h2>
    </div>

    <div class="botao">
        <a href="../Cliente/formNovoCliente.php"><button>Cadastrar Clientes</button></a>
        <a href="../Cliente/listaCliente.php"><button>Listar Clientes</button></a>
    </div>

</body>
</html>