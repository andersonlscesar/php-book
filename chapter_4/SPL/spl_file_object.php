<?php
$file = new SplFileObject('file.txt');
print "Nome: {$file->getFileName()} <br>".PHP_EOL;
print "Extensão: {$file->getExtension()} <br>".PHP_EOL;

$file2 = new SplFileObject('novo.txt', 'w');
$bytes = $file2->fwrite('Olá mundo PHP'.PHP_EOL);
print "Bytes escritos ".$bytes.PHP_EOL;
