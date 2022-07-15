<?php
/**
 * Abrindo arquivo para gravação de dados
 * 
 */

 $fp = fopen(__DIR__.'/arquivo_teste.txt', 'w');
 fwrite($fp, 'Linha 1 '.PHP_EOL);
 fwrite($fp, 'Linha 2 '.PHP_EOL);
 fwrite($fp, 'Linha 3 '.PHP_EOL);
 fclose($fp);

 /**
  * file_put_contents => grava uma string em um arquivo. Retorna a quantidade de bytes gravados. Int file_put_contents(string $filename, mixed $data[, ...])

  */

  echo file_put_contents(__DIR__.'/arquivo_teste.txt', 'Inserindo mais um dado'); // 22 Bytes

  /**
   * file_get_contents => Lê o conteúdo de um arquivo e retorna o conteudo em forma de string
   */

echo file_get_contents(__DIR__.'/arquivo_teste.txt'); // Inserindo mais um dado

/**
 * file => Lê um arquivo e retorna um array com seu conteúdo, de modo que cada posição do array represente uma linha do arquivo. 
 */

$file = file(__DIR__.'/arquivo_teste.txt');

/*
Array
(
    [0] => Inserindo mais um dado
)


*/

foreach($file as $position) {
    print $position; //  Inserindo mais um dado
}


/**
 * copy => Copia um arquivo para outro local. Retorna true caso tenha sucesso e False em caso de falhas.
 * 
 * bool copy(string $source, string $dest)
 */

 $origem = __DIR__.'/origem/file.txt';
 $destino = __DIR__.'/destino/file.txt';

 if(copy($origem, $destino)) {
    print 'Cópia efetuada!!';
 } else {
    print 'Cópia não efetuada';
 }

 /**
  * rename => Altera nomenclatura do arquivo.
  * bool rename (string $oldname, string $newname)
  */

  $origem1 = __DIR__.'/arquivo_teste.txt';
  $destino1 = __DIR__.'/arquivo_teste_renomeado_por_rename.txt';

  if(rename($origem1, $destino1)) {
    print 'Arquivo renomeado';
  } else {
    print 'Erro ao renomear o arquivo';
  }


  /**
   * unlink => Apaga um arquivo passado como parâmetro
   * file_exists => Verifica a existência de um arquivo ou de um diretório
   * is_file => verifica se a localização dada corresponde ou não a um arquivo
   */