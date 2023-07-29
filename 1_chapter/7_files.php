<?php
$filePath = __DIR__ . '/files_test/1_teste.txt';
$fd = fopen($filePath, 'r'); // __FILE__ Lê o próprio arquivo
$line = 1;

while (!feof($fd)) {
    $buffer = fgets($fd, 4096);
    if ($line > 1) print $buffer;
    $line++;
}

fclose($fd);

