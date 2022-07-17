<?php
require_once __DIR__.'/../classes/Produto.php';
require_once __DIR__.'/../classes/Caracteristica.php';

/**
 * O relacionamento de Composição entre classes é muito útil na modelagem de software, tanto sob o ponto de vista Estrutural quanto Arquitetural. Através do uso de Composição podemos fazer reuso de objetos, sem ter que duplicar as classes (instanciadas através dos objetos) na estrutura do sistema.
 */

$p1 = new Produto('Chocolate', 10, 7);

//Composição
$p1->addCaracteristicas('cor', 'Branco');
$p1->addCaracteristicas('Peso', '2.6Kg');
$p1->addCaracteristicas('Potência', '20 Watts RMS');

print 'Produto: '.$p1->getDescricao().'<br>'.PHP_EOL;

foreach($p1->getCaracteristicas() as $c) {
    print 'Característica: '.$c->getNome().' - '.$c->getValor().'<br>'.PHP_EOL;
}