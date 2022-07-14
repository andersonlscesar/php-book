<?php
declare(strict_types=1);

/**
 * func_get_args() => saber quais são os argumentos
 * func_num_args() => saber a quantidade de argumentos
 * @return void
 */

 function ola():void {
    $argumentos = func_get_args(); // nome dos argumentos @return array
    $quantidade = func_num_args(); // Quantidade de argumentos @return Integer

    for($i = 0; $i < $quantidade; $i++) {
        echo "\nOlá, $argumentos[$i] ";
    }

 }

 echo ola('Ana', 'Letícia', 'Jessica');