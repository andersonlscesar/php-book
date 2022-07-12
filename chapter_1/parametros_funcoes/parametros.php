<?php
/**
 * Especificando o tipo de dados que recebemos no parâmetro da função
 * @param float 
 * @param float
 * @return float
 */

 function calcula_imc(float $peso, float $altura) {
    return $peso / ($altura * $altura);
 }

//  var_dump(calcula_imc(86, 1.85)); 

/**
 * Este tipo de conversão pode não conseguir converter todos os valores que possam ser passados em $peso ou em $altura
 */


 /**
  * Especificando  que receberemos float no parâmetro da função e forçando o retorno a ser do tipo int
 * @param float
 * @param float
 * @return int
 * 
  */

  function calcula_imc1(float $peso, float $altura):int {
    return $peso / ($altura * $altura);
  }

//   var_dump(calcula_imc1(86, 1.85));