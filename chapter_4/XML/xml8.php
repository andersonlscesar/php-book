<?php
$xml = simplexml_load_file('paises4.xml');

print "===== Estados ===== <br>".PHP_EOL;

foreach($xml->estados->estado as $estado) {
    foreach($estado->attributes() as $key => $value) {
        print "$key => $value <br>".PHP_EOL;
    }
}