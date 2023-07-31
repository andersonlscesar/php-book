<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }

    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque): void
    {
        if (is_numeric($estoque) && $estoque >= 0) {
            $this->estoque = $estoque;
        }

    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        if (is_numeric($preco) && $preco >= 0) {
            $this->preco = $preco;
        }

    }
}


$p1 = new Produto();
$p1->setDescricao("Chocolate");
$p1->setEstoque(10);
print "Descrição: {$p1->getDescricao()}" . PHP_EOL;
print "Estoque: {$p1->getEstoque()}" . PHP_EOL;