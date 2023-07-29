<?php
$var = 'Isto é um teste';

echo $stringLiteral = <<<CHAVE
Posso escrever livremente agora
Utilizando quantas quenbras de linha eu quiser.
CHAVE;

echo PHP_EOL;

$text = " The Beatles ";
print  str_pad($text, 20, "*", STR_PAD_LEFT) . PHP_EOL;
print  str_pad($text, 20, "*", STR_PAD_RIGHT) . PHP_EOL;
print  str_pad($text, 20, "*", STR_PAD_BOTH) . PHP_EOL;


$uppercase = 'Gosto de animes';
print strtoupper($uppercase);

print PHP_EOL;

$lowercase = 'GOSTO DE ANIMES';
print strtolower($lowercase);

print PHP_EOL;

print substr("Americana", 1) . PHP_EOL;
print substr("Americana", 1, 3) . PHP_EOL;
print substr("Americana", 0, -1) . PHP_EOL;
print substr("Americana", -2) . PHP_EOL;

$txt = 'Olá, mundo ';
print str_repeat($txt, 15) . PHP_EOL;

print str_replace('Rato', 'Leão', 'O Rato roeu a roupa do rei de Roma') . PHP_EOL;

$string = 'Hello, World';
print addcslashes($string, 'l') . PHP_EOL;