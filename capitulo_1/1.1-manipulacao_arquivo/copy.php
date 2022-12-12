<?php
$origem = "/tmp/file.txt";
$destino = "/tmp/file2.txt";

if(copy($origem, $destino)) {
    print "Cópia efetuada";
} else {
    print "Erro ao copiar";
}