<?php
/**
 * Esses métodos mágicos executados automaticamente sempre que o programador invoca as funções isset() e unset() sobre o objeto
 */

class Titulo {
    private $data;

    public function __set($prop, $valor) {
        $this->data[$prop] = $valor;
    }

    public function __get($prop) {
        return $this->data[$prop];
    }

    public function __isset($prop) {
        return isset($this->data[$prop]);
    }

    public function __unset($prop) {
        unset($this->data[$prop]);
    }
}

$titulo = new Titulo;
$titulo->valor = 1234;

if(isset($titulo->valor)) {
    print "Valor definido";
} else {
    print "Valor Indefinido";
}

unset($titulo->valor);
// print 'O valor é '.number_format($titulo->valor, 2, ',', '.');
