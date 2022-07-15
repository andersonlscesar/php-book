<?php

$dir = '/criado_por_php';
if(mkdir($dir, 0777)) {
    echo 'Criado';
} else {
    echo 'Erro ao criar';
}

/**
 * rmdir => apaga um diretório
 * 
 * scandir => lê o conteúdo de um diretório (arquivos e diretórios) retornando-os como um array
 */

 $diretorio = '/';
 if(is_dir($diretorio)) {
    $linhas = scandir($diretorio);
    foreach($linhas as $linha) {
        print $linha.'<br>'.PHP_EOL;
    }
 }