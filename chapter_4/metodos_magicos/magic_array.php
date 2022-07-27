<?php
class Titulo {
    private $data;

    public function __set($prop, $valor) {
        $this->data[$prop] = $valor;
    }

    public function __get($prop) {
        return $this->data[$prop];
    }
}

$titulo = new Titulo;
$titulo->valor = 1234;
print 'O valor é '.number_format($titulo->valor, 2, ',', '.');
