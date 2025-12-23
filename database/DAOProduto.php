<?php

class DaoProduto
{


    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from Produto;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function inclui(Produto $produto)
    {
        $sql = 'insert into Produto (codigo,nome,marca,preco,dtVencimento,quantidade,fornecedor) values (?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getCodigo());
        $pst->bindValue(2, $produto->getNome());
        $pst->bindValue(3, $produto->getMarca());
        $pst->bindValue(4, $produto->getPreco());
        $pst->bindValue(5, $produto->getDtVencimento());
        $pst->bindValue(6, $produto->getQuantidade());
        $pst->bindValue(7, $produto->getFornecedor());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function exclui($codigo)
    {
        $sql = 'delete from produto where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigo);
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function altera(Produto $produto)
    {
        $sql = 'update Produto set nome = ?, marca = ?, preco = ?, dtVencimento = ?, quantidade = ?, fornecedor = ? where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getNome());
        $pst->bindValue(2, $produto->getMarca());
        $pst->bindValue(3, $produto->getPreco());
        $pst->bindValue(4, $produto->getDtVencimento());
        $pst->bindValue(5, $produto->getQuantidade());
        $pst->bindValue(6, $produto->getFornecedor());
        $pst->bindValue(7, $produto->getCodigo());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    function getQuantidadeVendidaPorProduto($nomeProduto) {
        
        try {
            $conexao = new Conexao(); // Supondo que a classe Conexao tenha um construtor que cria a conexão PDO

            $sql = "CALL QuantidadeVendidaPorProduto(:nomeProduto)";
            $stmt = $conexao->getPreparedStatement($sql);
            $stmt->bindParam(':nomeProduto', $nomeProduto, PDO::PARAM_STR);
            $stmt->execute();

            // Recuperar o resultado da procedure
            $resultado = $stmt->fetchColumn();

            return $resultado;

        } catch (PDOException $e) {
            throw new Exception("Erro ao obter quantidade vendida: " . $e->getMessage());
        }

        /*
        try {
            $conexao = new Conexao(); // Supondo que a classe Conexao tenha um construtor que cria a conexão PDO
    
            $sql = "CALL QuantidadeVendidaPorProduto(:nomeProduto)";
            $stmt = $conexao->getPreparedStatement($sql);
            $stmt->bindParam(':nomeProduto', $nomeProduto, PDO::PARAM_STR);
            $stmt->execute();
    
            // Recuperar o resultado da procedure
            $resultado = $stmt->fetchColumn();
    
            return $resultado;
    
        } catch (PDOException $e) {
            throw new Exception("Erro ao obter quantidade vendida: " . $e->getMessage());
        }
        */
        
    }
}