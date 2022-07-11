<?php
$object = new stdClass();
$object->nome = 'Anderson';
$object->sobrenome = 'César';

/*

object(stdClass)#1 (2) {
  ["nome"]=>
  string(8) "Anderson"
  ["sobrenome"]=>
  string(6) "César"
}

*/

var_dump($object);