<?php
$xml = simplexml_load_file('paises3.xml');
print "Nome: $xml->nome <br>".PHP_EOL;
print "Idioma: $xml->idioma <br>".PHP_EOL;
print "===== Estados ===== <br>".PHP_EOL;
foreach($xml->estados->nome as $estado) {
    print "Estado $estado <br>".PHP_EOL;
}