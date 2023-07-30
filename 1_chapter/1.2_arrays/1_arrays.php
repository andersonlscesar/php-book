<?php

// Adicionando elementos ao início do array

$a = array("verde", "azul", "vermelho");
array_unshift($a, "ciano");
print_r($a);

print PHP_EOL;

// Adicionando elemento ao final


$b = array("verde", "azul", "vermelho");
array_push($b, "ciano");
print_r($b);

// Removendo elemento da primeira posição

$c = array("verde", "azul", "vermelho");
array_shift($c);
print_r($c);

// Removendo elemento do final

$d = array("verde", "azul", "vermelho");
array_pop($d);
print_r($d);

// Deixando a lista na ordem reversa

$e = array("verde", "azul", "vermelho");
$e2 = array_reverse($e);
print_r($e2);

// Mesclando arrays

$anderson = array("anderson", "César");
$jhully = array("Jhully", "Nascimento");
$aj = array_merge($anderson, $jhully);
print_r($aj);

// Retornando apenas os valores de um array associativo

$arrayAssociativo = ["nome" => "Anderson", "age" => "25"];
$values = array_values($arrayAssociativo);
print_r($values);

// Retornando a quantidade de um array

$nomes = [
    'Ana',
    'João',
    'Maria',
    'Pedro',
    'Mariana',
    'Rafael',
    'Lúcia',
    'Fernando',
    'Isabela',
    'Gustavo',
    'Laura',
    'Bruno',
    'Carolina',
    'Hugo',
    'Alice',
    'André',
    'Sofia',
    'Ricardo',
    'Bianca',
    'Diego',
];

$quantidadeNomes = count($nomes);
print $quantidadeNomes;
print PHP_EOL;

// Verificando se um array contém determinado valor

$produtos = array("refrigerante", "cerveja", "vodca");
$check = in_array("cerveja", $produtos);
print $check;

// Ordenando um array levando em conta seus valores

$numeros = [5, 6, 1, 5, 77, 52, 10, 3, 4, 8];
sort($numeros);
print_r($numeros);

// Ordenando em ordem reversa com base nos valores do array
$numerosII = [5, 6, 1, 5, 77, 52, 10, 3, 4, 8];
rsort($numerosII);
print_r($numerosII);

// Ordenando um array levando em conta seus valores e mantendo o seu índice

$x[0] = "verde";
$x[1] = "Amarelo";
$x[2] = "Vermelho";
$x[3] = "Azul";
asort($x);
print_r($x);

// Deixando o array reverso levando em conta seus valores e mantendo o seus indices

$y[0] = "verde";
$y[1] = "Amarelo";
$y[2] = "Vermelho";
$y[3] = "Azul";
arsort($y);
print_r($y);

// Ordenando array de acordo com os índices ou chaves

$carro["potencia"] = "1.0";
$carro["cor"] = "branco";
$carro["modelo"] = "celta";
$carro["opcionais"] = "ar quente";
ksort($carro);
print_r($carro);

// Deixando o array reverso de acordo com os seus índices ou chaves

krsort($carro);
print_r($carro);

// Convertendo string em array

$date = "10/05/2015";
print_r(explode("/", $date));

$arrayDate = [10, 05, 2015];
print_r(implode("/", $arrayDate));