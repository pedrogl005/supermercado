<?php

class DaoFornecedor
{


    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from Fornecedor;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function inclui(Fornecedor $fornecedor)
    {
        $sql = 'insert into Fornecedor (codigo,nome,empresa,contato,cidade) values (?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getCodigo());
        $pst->bindValue(2, $fornecedor->getNome());
        $pst->bindValue(3, $fornecedor->getEmpresa());
        $pst->bindValue(4, $fornecedor->getContato());
        $pst->bindValue(5, $fornecedor->getCidade());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function exclui($codigo)
    {
        $sql = 'delete from fornecedor where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigo);
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function altera(Fornecedor $fornecedor)
    {
        $sql = 'update Fornecedor set nome = ?, empresa = ?, contato = ?, cidade = ? where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $fornecedor->getNome());
        $pst->bindValue(2, $fornecedor->getEmpresa());
        $pst->bindValue(3, $fornecedor->getContato());
        $pst->bindValue(4, $fornecedor->getCidade());
        $pst->bindValue(5, $fornecedor->getCodigo());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }
}