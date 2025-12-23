<?php

class DaoCliente
{


    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from Cliente;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function inclui(Cliente $cliente)
    {
        $sql = 'insert into Cliente (codigo,nome,cpf,endereco,numero) values (?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getCodigo());
        $pst->bindValue(2, $cliente->getNome());
        $pst->bindValue(3, $cliente->getCpf());
        $pst->bindValue(4, $cliente->getEndereco());
        $pst->bindValue(5, $cliente->getNumero());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function exclui($codigo)
    {
        $sql = 'delete from cliente where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigo);
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

    public function altera(Cliente $cliente)
    {
        $sql = 'update Cliente set nome = ?, cpf = ?, endereco = ?, numero = ? where codigo = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getEndereco());
        $pst->bindValue(4, $cliente->getNumero());
        $pst->bindValue(5, $cliente->getCodigo());
        if ($pst->execute()) {
            return true;
        } else{
            return false;
        }
    }

}