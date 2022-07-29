<?php
require_once __DIR__.'/Veiculo.php';
require_once __DIR__.'/Automovel.php';

$rm = new ReflectionProperty('Automovel', 'placa');
print $rm->getName().'<br>'.PHP_EOL;
print $rm->isPrivate() ? 'É privado' : 'Não é privado';
print '<br>'.PHP_EOL;
print $rm->isStatic() ? 'É estático' : 'Não é estático';
print '<br>'.PHP_EOL;
