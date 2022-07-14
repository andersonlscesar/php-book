<?php
declare(strict_types=1);

/**
 * Dentro do escopo de uma função, podemos armazenar variáveis
 * de forma estática. Assim, elas mantêm o valor que lhes foi atribuído na 
 * última execução. Declaramos uma variável estática com o operador static.
 * 
 * @param float
 * @return void
 */

 function percorre(float $quilometros):void {
    static $total;
    $total += $quilometros;
    echo "Percorreu mais $quilometros do total de $total <br>\n";
 }

 percorre(100);
 percorre(200);