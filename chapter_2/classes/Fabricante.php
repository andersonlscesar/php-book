<?php
 class Fabricante {
    private $nome;
    private $endereco;
    private $documento;


    /**
     * Método construtor
     * @param string
     * @param string
     * @param string
     * @return class
     */

    public function __construct($nome, $endereco, $documento) {
        $this->nome         = $nome;
        $this->endereco     = $endereco;
        $this->documento    = $documento;
    }

    /**
     * Método responsável por retornar o nome do produto
     * @return string
     */

    public function getNome():string {
        return $this->nome;
    }
 } 