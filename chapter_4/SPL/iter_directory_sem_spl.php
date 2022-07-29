<?php
$dir = opendir('../csv');
while($arquivo = readdir($dir)) {
    print $arquivo.'<br>'.PHP_EOL;
}
closedir($dir);