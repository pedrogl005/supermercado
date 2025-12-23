<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleProcedure.css">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/favicon1.png" type="image/x-icon">
</head>
<body>

    <?php
        require_once('../barra.php');
    ?>
    <br>
    <form action="./listaProdutoFornecedor.php" method="post">

        <select name="Fornecedor" id="fornecedor">
            <option value=""></option>
            <?php
                require_once '../database/Conexao.php';
                require_once '../database/DaoFornecedor.php';
    
                $dao = new DaoFornecedor();
    
                foreach ($dao->listaTodos() as $fornecedor) {
                    echo '<option value = "'.$fornecedor['codigo'].'">'.$fornecedor['codigo']. ' - ' .$fornecedor['nome'].'</option>';
                }
            ?>
        </select>

        <div class="voltar"><button> Pesquisar </button></div>
    </form>

    <table>
        <tr>
            <th>NOME DO PRODUTO</th>
            <th>MARCA DO PRODUTO</th>
            <th>PREÇO DO PRODUTO</th>
        </tr>

        <tbody>
            <?php
                
                
                if (array_key_exists('Fornecedor', $_POST)) {
                    
                    if (empty($_POST['Fornecedor'])) {
                        echo '<p class="resultado-if">*Selecione um fornecedor</p>';
                    }
                    else {
                        
                        require_once '../database/Conexao.php';
                        
                        $pst = Conexao::getPreparedStatement('CALL ListarFornecedoresEProdutos(?)');
                        $idfornecedor = $_POST['Fornecedor'];
                        $pst ->bindValue(1,$idfornecedor);
                        $pst ->execute();
                        $data = $pst->fetchAll(PDO::FETCH_ASSOC);
        
                        foreach ($data as $register) {
                            echo '<tr>';
                            echo '<td>'. $register['produto'] .'</td>';
                            echo '<td>'. $register['marca'] .'</td>';
                            echo '<td>'. $register['preco'] .'</td>';
                            echo '</tr>';
                        }
                    }
                }

            ?>
        </tbody>
    </table>

    <div class="botaoVoltarInicio">
        <a href="../menu/Fornecedor.php"><button>Voltar</button></a>
        <a href="../"><button>Início</button></a>
        </div>

</body>
</html>