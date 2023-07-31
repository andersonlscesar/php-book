<?php

$produto = new StdClass;
$produto->descricao = "Chocolate Amargo";
$produto->estoque = 100;
$produto->preco = 7;
print_r($produto);

$vetor1 = (array) $produto;
print_r($vetor1);

$produto2 = (object) $vetor1;
print_r($produto2);