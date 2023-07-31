<?php
class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        if (is_string($descricao)) $this->descricao = $descricao;
        if (is_numeric($estoque) && $estoque >= 0) $this->estoque = $estoque;
        if (is_numeric($preco) && $preco >= 0) $this->preco = $preco;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @return float|int|string
     */
    public function getEstoque(): float|int|string
    {
        return $this->estoque;
    }

    /**
     * @return float|int|string
     */
    public function getPreco(): float|int|string
    {
        return $this->preco;
    }
}

$p1 = new Produto("Chocolate", 10, 5);
print "Descrição: {$p1->getDescricao()}" . PHP_EOL;
print "Estoque: {$p1->getEstoque()}" . PHP_EOL;
print "Preço: {$p1->getPreco()}" . PHP_EOL;
