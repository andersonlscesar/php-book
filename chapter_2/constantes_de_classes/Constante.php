<?php
/**
 * não podem ser alteradas, independente de ser em classes ou não, é como se elas fossem readonly 
 */

 class Pessoa {
    private $nome;
    private $genero;
    const GENEROS = [
        'M' => 'Masculino',
        'F' => 'Feminino'
    ];

    public function __construct($nome, $genero) {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNomeGenero() {
        return self::GENEROS[$this->genero];
    }
 }

 $p1 = new Pessoa('Marida da Silva', 'F');
 $p2 = new Pessoa('Carlos Pereira', 'M');

 print 'Nome: '.$p1->getNome().'<br>'.PHP_EOL;
 print 'Genero: '.$p1->getNomeGenero().'<br>'.PHP_EOL;

 print 'Nome: '.$p2->getNome().'<br>'.PHP_EOL;
 print 'Genero: '.$p2->getNomeGenero().'<br>'.PHP_EOL;