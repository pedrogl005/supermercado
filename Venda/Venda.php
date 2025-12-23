<?php

class Venda
{
    private $codigo;
    private $cliente;
    private $data;
    private $valor;
    private $aberta;

    public function __construct($codigo, $cliente, $data, $valor, $aberta) {
        $this->codigo = $codigo;
        $this->cliente = $cliente;
        $this->data = $data;
        $this->valor = $valor;
        $this->aberta = $aberta;
    }
 
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo): self {
        $this->codigo = $codigo;
        return $this;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente): self {
        $this->cliente = $cliente;
        return $this;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data): self {
        $this->data = $data;
        return $this;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor): self {
        $this->valor = $valor;
        return $this;
    }

    public function getAberta() {
        return $this->aberta;
    }

    public function setAberta($aberta): self {
        $this->aberta = $aberta;
        return $this;
    }
}