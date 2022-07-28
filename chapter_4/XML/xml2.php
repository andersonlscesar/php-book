<?php
$xml = simplexml_load_file('paises.xml');

print "Nome {$xml->nome} <br>".PHP_EOL;
print "Idioma {$xml->idioma} <br>".PHP_EOL;
print "Capital {$xml->capital} <br>".PHP_EOL;
print "Moeda {$xml->moeda} <br>".PHP_EOL;
print "Prefixo {$xml->prefixo} <br>".PHP_EOL;
