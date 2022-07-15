<?php
/**
 * array_unshift => Adiciona itens no início de um array
 * array_push  => Adiciona itens no final de um array
 * array_shift => Remove um elemento do início de um array
 * array_pop => Remove um valor do final de um array
 * array_reverse => Recebe um array e retorna-o na ordem inversa
 * array_merge => Mescla dois ou mais array. Um array é adicionado ao final do outro. O resultado é um novo array.
 * Se ambos os arrays tiverem conteúdo indexado pela mesma chave, o segundo irá se sobrepor ao primeiro.
 * sort => Ordena um array pelo seu valor, sem manter a associação de índices. Para ordem reversa, utilize rsort()
 * asort => Ordena um array pelo seu valor, mantendo a associação de índices. Para ordenar de forma reversa, use arsort()
 * ksort => Ordena um array pelos seus índices. Para ordem reversa, utilize krsort()
 */

 $a = ['verde', 'azul', 'vermelho'];
 
 /*
 (
    [0] => verde
    [1] => azul
    [2] => vermelho
)
  */

  array_unshift($a, 'Amarelo');

  /*
  (
    [0] => Amarelo
    [1] => verde
    [2] => azul
    [3] => vermelho
)
  */

  array_push($a, 'Ciano');

  /*
  
  (
    [0] => Amarelo
    [1] => verde
    [2] => azul
    [3] => vermelho
    [4] => Ciano
)
  */

  $nomes = ['Anderson', 'Maria', 'Lucas', 'Ana'];

  /*
  (
    [0] => Anderson
    [1] => Maria
    [2] => Lucas
    [3] => Ana
)
  
  */

  array_shift($nomes);

  /*
  (
    [0] => Maria
    [1] => Lucas
    [2] => Ana
)
  */

  array_pop($nomes);

  /*
  (
    [0] => Maria
    [1] => Lucas
)
  
  */
