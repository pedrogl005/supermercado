<?php
class DaoItemVenda
{
    public function listaPorVenda($codigoVenda)
    {
        $lista = [];
        $sql = 'select codigo, codigoVenda, codigoProduto, quantidade, precoVenda, quantidade*precoVenda as subtotal from itemvenda where codigoVenda = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigoVenda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
    public function inclui(ItemVenda $itemVenda)
    {
        $sql = 'insert into itemvenda (codigoVenda, codigoProduto, quantidade, precoVenda) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemVenda->getCodigoVenda());
        $pst->bindValue(2, $itemVenda->getCodigoProduto());
        $pst->bindValue(3, $itemVenda->getQuantidade());
        $pst->bindValue(4, $itemVenda->getPrecoVenda());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

