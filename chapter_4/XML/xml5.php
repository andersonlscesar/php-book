<?php
$xml = simplexml_load_file('paises2.xml');

$xml->moeda = 'Novo Real (R$)';
$xml->geografia->clima = 'Temperado';
$xml->addChild('Presidente', 'Chapolin Colorado');
print $xml->asXML();
file_put_contents('paises2.xml', $xml->asXML());