<?php

class Software
{
    private $id;
    private $nome;
    private static $contador;

    function __construct($nome)
    {
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
        print "Software {$this->id} - {$this->nome}" . PHP_EOL;
    }

    public static function getContador()
    {
        return self::$contador;
    }
}


new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');
print 'Quantidade criada ' . Software::getContador();
