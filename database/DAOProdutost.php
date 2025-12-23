<?php

class DaoProdutost
{


    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from Produtost;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function inclui(Produtost $produtost)
    {
        $sql = 'insert into Produtost (codigo,nome,marca,preco,dtVencimento, quantidade, produto) values (?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtost->getCodigo());
        $pst->bindValue(2, $produtost->getNome());
        $pst->bindValue(3, $produtost->getMarca());
        $pst->bindValue(4, $produtost->getPreco());
        $pst->bindValue(5, $produtost->getDtVencimento());
        $pst->bindValue(6, $produtost->getQuantidade());
        $pst->bindValue(7, $produtost->getProduto());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function exclui($codigo)
    {
        $sql = 'delete from produtost where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigo);
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function altera(Produtost $produtost)
    {
        $sql = 'update Produtost set nome = ?, marca = ?, preco = ?, dtVencimento = ?, quantidade = ? where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produtost->getNome());
        $pst->bindValue(2, $produtost->getMarca());
        $pst->bindValue(3, $produtost->getPreco());
        $pst->bindValue(4, $produtost->getDtVencimento());
        $pst->bindValue(5, $produtost->getQuantidade());
        $pst->bindValue(6, $produtost->getCodigo());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }
}