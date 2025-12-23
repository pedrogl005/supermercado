<?php
    define('HOST', $_SERVER['HTTP_HOST']);
    define('FOLDER', 'Supermercado');

    echo  <<<END
    Fornecedores<br><br>
    END;

    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/listaFornecedor.php">Listar Fornededores</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Fornecedor/formNovoFornecedor.php">Cadastrar Fornecedores</a><br>';
    echo <<<END
    <br>
    <br>
    END;

    echo <<<END
    Clientes<br><br>
    END;
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/listaCliente.php">Listar Clientes</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Cliente/formNovoCliente.php">Cadastrar Clientes</a><br>';
    echo <<<END
    <br>
    <br>
    END;

    echo <<<END
    Produtos<br><br>
    END;
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/listaProduto.php">Listar Produtos</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produto/formNovoProduto.php">Cadastrar Produtos</a><br>';
    echo <<<END
    <br>
    <br>
    END;

    echo <<<END
    Produtos para Troca<br><br>
    END;
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/listaProdutost.php">Listar Produtos para Troca</a><br>';
    echo '<a href="http://'.HOST.'/'.FOLDER.'/Produtost/formNovoProdutost.php">Cadastrar Produtos para Troca</a><br>';

?>
