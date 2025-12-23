<?php

class Produtost
{

        private $codigo;

        private $nome;

        private $marca;

        private $preco;

        private $dtVencimento;

        private $quantidade;

        private $produto;

        public function __construct($c, $n, $m, $p, $d, $q, $pd){
            $this->codigo = $c;
            $this->nome = $n;
            $this->marca = $m;
            $this->preco = $p;
            $this->dtVencimento = $d;
            $this->quantidade = $q;
			$this->produto = $pd;
            
    }

	/**
	 * @return mixed
	 */
	public function getCodigo() {
		return $this->codigo;
	}

	/**
	 * @param mixed $codigo 
	 * @return self
	 */
	public function setCodigo($codigo): self {
		$this->codigo = $codigo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @return mixed
	 */
	public function getMarca() {
		return $this->marca;
	}

	/**
	 * @return mixed
	 */
	public function getPreco() {
		return $this->preco;
	}

	/**
	 * @return mixed
	 */
	public function getDtVencimento() {
		return $this->dtVencimento;
	}

	/**
	 * @param mixed $dtVencimento
	 * @return self
	 */
	public function setDtVencimento($dtVencimento): self {
		$this->dtVencimento = $dtVencimento;
		return $this;
	}

	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @param mixed $marca 
	 * @return self
	 */
	public function setMarca($marca): self {
		$this->marca = $marca;
		return $this;
	}

	/**
	 * @param mixed $preco 
	 * @return self
	 */
	public function setPreco($preco): self {
		$this->preco = $preco;
		return $this;
	}

    /**
	 * @return mixed
	 */
	public function getQuantidade() {
		return $this->quantidade;
	}

	/**
	 * @param mixed $quantidade
	 * @return self
	 */
	public function setQuantidade($quantidade): self {
		$this->quantidade = $quantidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getProduto() {
		return $this->produto;
	}
	
	/**
	 * @param mixed $produto 
	 * @return self
	 */
	public function setProduto($produto): self {
		$this->produto = $produto;
		return $this;
	}
}