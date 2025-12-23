<?php

class Fornecedor
{

        private $codigo;

        private $nome;

        private $empresa;

        private $contato;

		private $cidade;

        public function __construct($c, $n, $e, $co, $ci){
            $this->codigo = $c;
            $this->nome = $n;
            $this->empresa = $e;
            $this->contato = $co;
			$this->cidade = $ci;
            
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
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmpresa() {
		return $this->empresa;
	}

	/**
	 * @param mixed $empresa 
	 * @return self
	 */
	public function setEmpresa($empresa): self {
		$this->empresa = $empresa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getContato() {
		return $this->contato;
	}

	/**
	 * @param mixed $contato 
	 * @return self
	 */
	public function setContato($contato): self {
		$this->contato = $contato;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}
}