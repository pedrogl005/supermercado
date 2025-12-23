<?php
class ItemVenda 
{
    private $codigo;
    private $codigoVenda;
    private $codigoProduto;
    private $quantidade;
    private $precoVenda;

    public function __construct($codigo, $codigoVenda, $codigoProduto, $quantidade, $precoVenda) {
        $this->codigo = $codigo;
        $this->codigoVenda = $codigoVenda;
        $this->codigoProduto = $codigoProduto;
        $this->quantidade = $quantidade;
        $this->precoVenda = $precoVenda;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): self {
        $this->codigo = $codigo;
        return $this;
    }

    public function getCodigoVenda() {
        return $this->codigoVenda;
    }

    public function setCodigoVenda($codigoVenda): self {
        $this->codigoVenda = $codigoVenda;
        return $this;
    }

    public function getCodigoProduto() {
        return $this->codigoProduto;
    }

    public function setCodigoProduto($codigoProduto): self {
        $this->codigoProduto = $codigoProduto;
        return $this;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda): self {
        $this->precoVenda = $precoVenda;
        return $this;
    }
}