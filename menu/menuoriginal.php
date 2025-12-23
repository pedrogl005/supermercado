<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'projetoaulai3b2023');

    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/listaFornecedor.php">Listar fornededores</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/formNovoFornecedor.php">Cadastrar fornecedores</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/listaCliente.php">Listar clientes</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/formNovoCliente.php">Cadastrar clientes</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/listaProduto.php">Listar produtos</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/formNovoProduto.php">Cadastrar produtos</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/listaProdutost.php">Listar produtost</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/formNovoProdutost.php">Cadastrar produtost</a><br>';

?>

