<?php
require_once __DIR__.'/../classes/Cesta.php';
require_once __DIR__.'/../classes/Produto.php';

// Criação  da cesta
$c1 = new Cesta;

//Agregação dos produtos

$c1->addItem($p1 = new Produto('Chocolate', 10, 5));
$c1->addItem($p1 = new Produto('Café', 100, 7));
$c1->addItem($p1 = new Produto('Mostarda', 50, 3));

// $c1->addItem('Teste');

foreach($c1->getItens() as $item) {
    print 'Item: '.$item->getDescricao().'<br>'.PHP_EOL;
}

