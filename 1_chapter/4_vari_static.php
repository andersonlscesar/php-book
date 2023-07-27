<?php


// As variáveis estáticas mantêm o valor que lhes foi atribuído na última execução.
function percorre($km)
{
    static $total;
    $total += $km;
    print "Percorreu mais $km do total de $total".PHP_EOL;
}


percorre(100);
percorre(300);
percorre(500);