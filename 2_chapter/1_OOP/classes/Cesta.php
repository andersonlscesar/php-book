<?php 

class Cesta 
{
    private string $time;
    private  $itens;

    public function __construct()
    {
        $this->time = date('Y-m-d H:i:s');       
    }


    public function addItem(Produto $p)
    {
        $this->itens[] = $p;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getTime()
    {
        return $this->time;
    }
}