<?php
declare(strict_types=1);

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}