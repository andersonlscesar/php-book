<?php
declare(strict_types=1);

/**
 * Calcula o fatorial de um número
 * @param Integer
 * @return Integer
 */

 function fatorial(int $numero):int {
    if($numero == 1) {
        return $numero;
    } else {
        return $numero * fatorial($numero - 1);
    }
 }

 echo fatorial(6);