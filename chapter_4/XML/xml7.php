<?php
$xml = simplexml_load_file('paises4.xml');

print "===== Estados ===== <br>".PHP_EOL;

foreach($xml->estados->estado as $estado) {
    print str_pad('Estado: '.$estado['nome'], 30).' Capital: '.$estado['capital'].'<br>'.PHP_EOL;
}