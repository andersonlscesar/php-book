<?php
declare(strict_types=1);
/**
 * Utilizando uma variável global
 * @param float
 * @return float
 */

 $total = 0; // Inicializando variável global

 function km2mi(float $quilometros):float {
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
 }

 echo 'Percorreu '.km2mi(100).' milhas';