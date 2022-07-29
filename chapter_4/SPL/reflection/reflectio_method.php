<?php
require_once __DIR__.'/Automovel.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');
print $rm->getName().'<br>'.PHP_EOL;
print $rm->isPrivate() ? 'É privado' : 'Não é privado';
print '<br>'.PHP_EOL;
print $rm->isStatic() ? 'É estático' : 'Não é estático';
print '<br>'.PHP_EOL;
print $rm->isFinal() ? 'É final' : 'Não é final';
print '<br>'.PHP_EOL;
echo '<pre>';
print_r($rm->getParameters());
echo '</pre>';
exit;
