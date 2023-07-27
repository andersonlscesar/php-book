<?php
$nome = "João";
$sobrenome = "Da Silva";
echo "$nome, $sobrenome";

/*
 * Variável variante
*/

echo " ".PHP_EOL;

$variavel = "nome";
$$variavel = "Maria";
echo $nome;


// Passagem por valor

echo " ".PHP_EOL;

$a = 5;
$b = $a;
$b = 10;
echo "A = $a e B = $b";

// Passagem por referência (Entre variáves)

echo " ".PHP_EOL;

$a1 = 5;
$b1 = &$a1;
$b1 = 10;

echo "A1 = $a1 e B1 = $b1";

// Criando objetos e os referenciando

echo " ".PHP_EOL;

$a2 = new stdClass();
$a2->nome = "Anderson";
$b2 = $a2; // Cria réplica
$b2->nome = "Joana";

echo "$a2->nome | $b2->nome"; // Joana | Joana


