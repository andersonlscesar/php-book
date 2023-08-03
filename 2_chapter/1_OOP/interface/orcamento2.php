<?php 

require_once __DIR__ . '/classes/Orcamento.php';
require_once __DIR__ . '/classes/OrcavelInterface.php';
require_once __DIR__ . '/classes/Produto.php';
require_once __DIR__ . '/classes/Servico.php';

$o = new Orcamento;
$o->adiciona( new Produto('Maquina de Café', 10, 299), 1 );
$o->adiciona( new Produto('Barbeador Elétrico', 10, 170), 1 );
$o->adiciona( new Produto('Barra de chocolate', 10, 7), 3 );

$o->adiciona( new Servico('Corte de grama', 20), 1);
$o->adiciona( new Servico('Corte de Barba', 20), 1);
$o->adiciona( new Servico('Liempeza do apto', 50), 1);

print $o->calculaTotal();