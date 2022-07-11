<?php

/*
Um determinado valor adicionado a uma determinada variável, torna-se uma nova variavel quando referenciada.
*/

$variavel = 'tambemSereiUmaVariavel';

//Ao referenciarmos nossa variavel "variavel", transformamos o seu conteúdo (String) em outra variavel

$$variavel = 'olá, sou uma variavel que antes era uma string';

print($tambemSereiUmaVariavel);