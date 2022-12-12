<?php
function percorre($quilometros) {
    static $total = 0;
    $total += $quilometros;
    print "Percorreu mais $quilometros do total de $total </br>";
}

percorre(100); // Percorreu mais 100 do total de 100
percorre(100); // Percorreu mais 100 do total de 200
percorre(100); // Percorreu mais 100 do total de 300