<?php

class Cliente
{

        private $codigo;

        private $nome;

        private $cpf;

        private $endereco;

        private $numero;

        public function __construct($c, $n, $cp, $e, $nu){
            $this->codigo = $c;
            $this->nome = $n;
            $this->cpf = $cp;
            $this->endereco = $e;
            $this->numero = $nu;
            
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
	public function getCpf() {
		return $this->cpf;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}

	/**
	 * @return mixed
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * @param mixed $numero 
	 * @return self
	 */
	public function setNumero($numero): self {
		$this->numero = $numero;
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
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}

	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
}