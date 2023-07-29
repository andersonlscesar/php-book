<?php

$filePath = __DIR__ . '/files_test/1_teste.txt';
$fp = fopen($filePath,  'r+');

fwrite($fp, "Linha 1" . PHP_EOL);
fwrite($fp, "Linha 2" . PHP_EOL);
fwrite($fp, "Linha 3" . PHP_EOL);

fclose($fp);