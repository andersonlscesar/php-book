<?php

class Funcionario
{

    public $nome;
    public $salario;
    public $departamento;

    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
}

$jose = new Funcionario;
$jose->nome = 'José da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

print_r(get_class_methods('Funcionario'));

print_r(get_object_vars($jose));

// Verificando existencia de método

if (method_exists($jose, 'setNome')) {
    print "Objeto contém setNome()" . PHP_EOL;
}

Class Pessoa 
{
    public static function ola($nome)
    {
        print "Olá {$nome}";
    }
}

call_user_func(['Pessoa', 'ola'], 'Anderson');
