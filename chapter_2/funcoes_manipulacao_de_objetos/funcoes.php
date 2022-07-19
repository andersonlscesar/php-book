<?php
/**
 * São funções simples que nos permitem invertigar sobre classes e objetos.
 * 
 * get_class_methods => Retorna um vetor com os nomes dos métodos de uma determinada classe. 
 * 
 * get_object_vars => Retorna um vetor com os conteúdos das propriedades públicas de um objeto
 * 
 * get_class => Retorna  o nome da classe a qual um objeto pertence
 * 
 * get_parent_class => Retorna o nome da classe ancestral (classe pai)
 * 
 * is_subclass_of => Indica se determinado objeto ou determinada classe são derivados e outra classe
 * 
 * method_exists => Verifica se determinado objeto contém o método descrito.
 * 
 * call_user_func => Executa uma função ou um método de uma classe passado como parâmetro. 
 * 
 */

 class Funcionario {
    public $nome;
    public $salario;
    public $departamento;

    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
 }

echo '<pre>';
print_r(get_class_methods('Funcionario'));
echo '</pre>';

$jose = new Funcionario;
$jose->nome = 'José da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

echo '<pre>';
print_r(get_object_vars($jose));
echo '</pre>';


function apresenta(string $nome):void {
    print "Olá senhor {$nome}<br>";
}

//Chamada do método estático

call_user_func('apresenta', 'anderson');

class Pessoa {
    public static function apresenta($nome) {
        print "Olá senhor {$nome}<br>";
    }
}

$obj = new Pessoa;
//Chamada do método estático
call_user_func(array('Pessoa', 'apresenta'), 'César');
// Chamada de método de objeto
call_user_func(array($obj, 'apresenta'), 'Anderson César');