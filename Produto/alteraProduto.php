<?php
require_once '../database/Conexao.php';
require_once '../Produto/Produto.php';
require_once '../database/DaoProduto.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$dtVencimento = $_POST['dtVencimento'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$produto = new Produto(
    $codigo,
    $nome,
    $marca,
    $preco,
    $dtVencimento,
    $quantidade,
    $fornecedor
);

$dao = new DaoProduto();
if($dao->altera($produto)){
    echo 'Editou.';
} else{
    echo 'Algum erro.';
}