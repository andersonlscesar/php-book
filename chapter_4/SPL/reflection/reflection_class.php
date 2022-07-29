<?php
require_once __DIR__.'/Automovel.php';
require_once __DIR__.'/Veiculo.php';

$rc = new ReflectionClass('Automovel');

print_r($rc->getMethods());
print_r($rc->getProperties());
print_r($rc->getParentClass());