<?php
require_once __DIR__ . '/classes/Produto.php';
require_once __DIR__ . '/classes/Orcamento.php';

$o = new Orcamento;
$o->adiciona(new Produto('Máquina de café', 10, 299), 1);
$o->adiciona(new Produto('Barbeador elétrico', 10, 170), 1);
$o->adiciona(new Produto('Barra de chocolate', 10, 7), 3);
print $o->calculaTotal();