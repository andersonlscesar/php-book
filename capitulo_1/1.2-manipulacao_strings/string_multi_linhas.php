<?php
// é preciso escolher uma palavra chave como delimitador da string

$texto = <<<CHAVE
    Aqui poderemos usar com mais liberdade da quebra de linha
    Apesar que, nunca vi usarem este recurso 
    mas se está aqui, serve para algo
CHAVE;

print $texto;