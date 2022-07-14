<?php
declare(strict_types=1);

/**
 * @param Integer
 * @param Interger
 * @return void
 */

function incremeta(int $variavel, int $valor):void {
    $variavel += $valor;
}

$a = 10;

incremeta($a, 20);

echo $a; // 10

/**
 * O valor não é incrementado, pois a passagem do parâmetro é por valor.
 * A variável fora do escopo da função aponta para um endereço de memória 
 * diferente em relação a variável que está no escopo da mesma.
 * 
 * Criando funçao por referência (Variaveis que apontam para o mesmo endereço)
 * 
 * @param Integer
 * @param Integer
 * @return void
 */

function incremeta1(int &$variavel, int $valor):void {
    $variavel += $valor;
}

$a1 = 10;

incremeta1($a1, 20);

echo $a1; // 30