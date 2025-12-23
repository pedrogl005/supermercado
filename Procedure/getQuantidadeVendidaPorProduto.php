<?php
// Inclua os arquivos necessários e faça as verificações necessárias
require_once BASE . '\database\Conexao.php';
require_once BASE . '\database\Procedure.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Obtém o nome do produto enviado pelo formulário
        $nomeProduto = $_POST['nomeProduto'];

        // Chama a função para obter a quantidade vendida do produto
        $quantidadeVendida = getQuantidadeVendidaPorProduto($nomeProduto);

        // Exibe o resultado
        echo "Quantidade vendida do produto '$nomeProduto': $quantidadeVendida";

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>