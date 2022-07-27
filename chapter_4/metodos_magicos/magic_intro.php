<?php


class Titulo {
    private $dt_vencimento;
    private $valor;
    private $juros;
    private $multa;

    /**
     * __get()  => Sempre que houver uma tentativa a um atributo private
     * o php verificará se o método mágico __get existe, e exibirá a mensagem de erro que nele foi definida.
     */

    public function __get($prop) {
        if($prop == 'valor') {
            print 'Use o método correto para alterar o valor do atributo';
            return 0;
        }
    }

    /**
     * __set() => Funciona da mesma forma que o __get, porém ele é automaticamente carregado
     */

    public function __set($prop, $valor) {
        print "Tentou gravar {$prop} = {$valor}. Use o método adequado";
    }
    
}

$titulo = new Titulo;
$titulo->valor = 'Oi';
print $titulo->valor;