<?php
class DaoVenda 
{
    public function listaTodos()
    {
        $lista = [];
        $sql = 'select * from venda;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function abrirVenda(Venda $venda)
    {
        $sql = 'insert into venda (cliente) values (?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $venda->getCliente());
        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }

    public function fecharVenda($codigovenda)
    {
        $sql = 'update venda set aberta = 0 where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigovenda);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

