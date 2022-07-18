<?php

class Cesta {
    private $time;
    private $itens;

    public function __construct() {
        $this->time = date('Y-m-d H:i:s');
        $this->itens = array();
    }

    /**
     * Função que realizada a agregação
     * @param Produto
     * @return void
     */

    public function addItem(Produto $p):void {
        $this->itens[] = $p;
    }

    /**
     * Função que retorna os Itens Agregados
     * @return array
     */

    public function getItens():array {
        return $this->itens;
    }

    /**
     * função que retorna a hora atual
     * @return string
     */

     public function getTime():string {
        date_default_timezone_set('America/Sao_Paulo');
        return $this->time;
     }

}