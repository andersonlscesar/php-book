<?php
/**
 * substr => retorna uma parte de uma string. O primeiro parâmetro representa a string original,
 * o segundo representa o início do corte, e o terceiro, o tamanho do corte. 
 * 
 * 
 */

 print substr('Americana', 2).'<br>'.PHP_EOL; // ericana
 print substr('Americana', 1, 3).'<br>'.PHP_EOL; // mer
 print substr('Americana', 0, -1).'<br>'.PHP_EOL; // American

 /**
  * strpad => Preenche uma string com outra string, dentro de um tamanho específico, podendo preencher com caracteres à esquerda, à direita ou centralizado
  */

  $string = 'The Beatles';
  print str_pad($string, 20, '-', STR_PAD_LEFT);
  print '<br>'.PHP_EOL;
  print str_pad($string, 100, '=', STR_PAD_BOTH);

  /**
   * str_repeat => Repete uma string por determinada quantidade de vezes.
   */

   $texto = 'Hello!';
   print str_repeat($texto, 6).'\n';