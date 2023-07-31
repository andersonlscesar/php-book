<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->estoque = $estoque;

        print "CONTRUÍDO: Objeto {$descricao}, estoque {$estoque}, preço {$preco}" . PHP_EOL;
    }

    public function __destruct()
    {
        print "DESTRUÍNDO: Objeto: {$this->descricao}, estoque {$this->estoque}, preço {$this->preco}" . PHP_EOL;
    }
}


$p1 = new Produto("Chocolate", 10, 5);
unset($p1);