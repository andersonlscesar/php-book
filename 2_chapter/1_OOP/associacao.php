<?php
require_once __DIR__ . '/classes/Fabricante.php';
require_once __DIR__ . '/classes/Produto.php';
require_once __DIR__ . '/classes/Caracteristica.php';

$p1 = new Produto('Chocolate', 10, 7);
$p1->addCaracteristicas('Cor', 'Branco');
$p1->addCaracteristicas('Peso', '2.6 Kg');
$p1->addCaracteristicas('Potência', '20 watts RMS');
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123456789');

// Associação

$p1->setFabricante($f1);

print "A descrição é {$p1->getDescricao()} " . PHP_EOL;
print "O fabricante é {$p1->getFabricante()->getNome()}";

foreach ($p1->getCaracteristicas() as $caracteristica)
{
    print "Caracteristica: ". $caracteristica->getNome() . "|" . $caracteristica->getValor() . " " . PHP_EOL;
}
