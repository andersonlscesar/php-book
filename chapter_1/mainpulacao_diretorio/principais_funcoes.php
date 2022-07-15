<?php
/**
 * fopen => Abre um arquivo e retorna um identificador. Aceita arquivos no formato "http://"
 * resource fopen(string $filename, string $mode[, ...])
 * 
 * ======================================================================
 * 
 * feof => testa se determinado identificador de arquivo (criado pela função fopen()) está no fim de um arquivo
 * bool feof (resouce $handle)
 * 
 * ======================================================================
 * 
 * fclose => Fecha o arquivo aberto apontado pela fopen(). Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
 * 
 * ======================================================================
 * 
 * fgets => Lê uma linha de um arquivo aberto pela fopen() no formato de string. Recebe opcionalment um tamanho máximo a ser lido. Se ocorrer um erro, retorna false
 * 
 * string fgets(resource $handle, [, int $length])
 */



 /**
  * Exemplo
  */

$fd = fopen(__FILE__, 'r');
$linha = 1;
while(!feof($fd)) {
    $buffer = fgets($fd, 4096); // Lê uma linha do arquivo

    if($linha > 1) {
        echo $buffer;
    }

    $linha++;
}

fclose($fd);


/**
 * fwrite => Grava uma string no arquivo apontado pelo identificador de arquivo. Se o argumetnos Comprimento for informado, a gravação será limitada a esse tamanho. Retorna o número de bytes gravados ou FALSE em caso de ero int fwrite ($handle, string $string [, int $length])
 */
 
