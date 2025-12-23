<?php
require_once '../database/Conexao.php';
require_once '../Produtost/Produtost.php';
require_once '../database/DaoProdutost.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$dtVencimento = $_POST['dtVencimento'];
$quantidade = $_POST['quantidade'];

$produtost = new Produtost(
    $codigo,
    $nome,
    $marca,
    $preco,
    $dtVencimento,
    $quantidade
);

$dao = new DaoProdutost();
if($dao->altera($produtost)){
    echo 'Editou.';
} else{
    echo 'Algum erro.';
}