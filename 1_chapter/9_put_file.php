<?php
// O valor retornado é a quantidade de bytes do arquivo
echo file_put_contents(__DIR__ . '/files_test/2_hello.txt', 'Hello,  World');

$content = file_get_contents(__DIR__ . '/files_test/2_hello.txt');

echo PHP_EOL;

echo $content;