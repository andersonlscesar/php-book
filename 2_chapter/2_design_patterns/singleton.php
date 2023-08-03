<?php
require_once __DIR__ . '/classes/Preferencia.php';

$p1 = Preferencia::getInstance();
print "A linguagem é: {$p1->getData('language')}" . PHP_EOL;
$p1->setData('language', 'pt');
print "A linguagem é: {$p1->getData('language')}" . PHP_EOL;

$p2 = Preferencia::getInstance();
print "A linguagem é: {$p2->getData('language')}" . PHP_EOL;
