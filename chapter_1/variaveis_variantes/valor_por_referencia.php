<?php

$a = 5;
$b = $a;
$b = 10;

print($a); // 5
print(' ');
print($b); // 10

/**
 * Mesmo ao adicionarmos $a em $b, ao tentarmos mudar o valor de $b, $a manteve-se com o mesmo valor.
 * As variáveis apontam para endereços diferentes na memória
 */


 $a2 = 5;
 $b2 = &$a2;
 $b2 = 7.6;

print($a2); // 7.6
print(' ');
print($b2); // 7.6