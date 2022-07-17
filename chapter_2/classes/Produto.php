<?php
  class Produto {

    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    /**
     * @param string
     * @param integer
     * @param float
     */

    public function __construct($descricao, $estoque, $preco) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function addCaracteristicas($nome, $valor) {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    /**
     * Retora a descrição 
     * @return string
     */

    public function getDescricao():string {
        return $this->descricao;
    }

    /**
     * Define o fabricante
     * @param class
     * @return void
     */

    public function setFabricante(Fabricante $f) {
        $this->fabricante = $f;
    }

    /**
     * Retorna o fabricante
     * @return class
    */

    public function getFabricante() {
        return $this->fabricante;
    }
  }
