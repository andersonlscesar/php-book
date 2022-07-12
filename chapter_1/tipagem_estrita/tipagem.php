<?php
declare(strict_types=1);

/**
 * Funções com parâmetros floats e obrigatoriamente retornanto um float
 * @param float 
 * @param float 
 * @return float
 * 
 */

function calcula_imc(float $peso, float $altura):float {
    return $peso / ($altura * $altura);
}

var_dump(calcula_imc(75, 1.85)); // 21.913805697589

var_dump(calcula_imc('75', 1.85)); //  TypeError: Argument 1 passed to calcula_imc() must be of the type float, string given