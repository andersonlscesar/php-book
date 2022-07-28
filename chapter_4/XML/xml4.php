<?php
$xml = simplexml_load_file('paises2.xml');
print "Nome: $xml->nome <br>".PHP_EOL;
print "Idioma: $xml->idioma <br>".PHP_EOL;
print "====== Informações Geográficas ====== <br>".PHP_EOL;
print "Clima: {$xml->geografia->clima} <br>".PHP_EOL;
print "Costa: {$xml->geografia->costa} <br>".PHP_EOL;
print "Pico: {$xml->geografia->pico} <br>".PHP_EOL;
