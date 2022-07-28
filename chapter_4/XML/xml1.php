<?php
/**
 * Métodos para XML
 * asXML() => Retorna uma string XML formatada que representa o objeto, bem como seus subelementos
 * 
 * attributes() => Lista os atributos definidos dentro da tag XML do objeto
 * 
 * children()   => Retorna os elementos filhos do objeto(subnodos), bem como seus valores.
 * 
 * addChild()   => Adiciona um elemento ao nodo especificado e retorna um objeto do tipo SimpleXmlElement
 */


$xml = simplexml_load_file('paises.xml');
var_dump($xml);