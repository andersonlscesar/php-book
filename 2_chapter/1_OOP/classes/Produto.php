<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    private $caracteristicas;

    public function addCaracteristicas($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * @param $descricao
     * @param $estoque
     * @param $preco
     */
    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setFabricante( Fabricante $f)
    {
        $this->fabricante = $f;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
}