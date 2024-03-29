<?php

class Orcamento implements OrcavelInterface
{
    private $itens;
    public function adiciona(OrcavelInterface $produto, $qtde)
    {
        $this->itens[] = array($qtde, $produto);
    }

    public function calculaTotal()
    {
        $total = 0;
        foreach($this->itens as $item) {
            $total += ($item[0] * $item[1]->getPreco());
        }
        return $total;
    }

    public function getPreco() {}
}