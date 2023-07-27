<?php

// Nesta função utilizamos a passagem por valor by value
function incrementaValor($var, $valor)
{
    $var += $valor;
}

$a = 10;

incrementaValor($a, 10);
print $a . PHP_EOL; // 10

// Nessa função utilizamos a passagem por referencia by reference
function incrementaReferencia(&$var, $valor): void
{
    $var += $valor;
}

$b = 10;

incrementaReferencia($b, 10);

print $b;

// Função com argumentos variáveis

function hello()
{
    $argumentos = func_get_args();
    $quantidade = func_num_args();

    for ($i = 0; $i < $quantidade; $i++) {
        print "Olá $argumentos[$i]\n";
    }
}

hello('Anderson', 'Jhully', 'Marli', 'César');

// Recursão

function fatorial($numero)
{
    if ($numero == 1) {
        return $numero;
    } else {
        return $numero * fatorial($numero - 1);
    }
}

print fatorial(5) . PHP_EOL;
print fatorial(7) . PHP_EOL;