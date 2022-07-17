<?php
/**
 * ============== ASSOCIAÇÃO ==============
 * É a relação mais comum entre objetos. Na associação, um obeto faz uma referência a outro objeto.
 * Essa referência funciona como um apontamento em que o objeto terá um atributo que apontará para a posição da memória em que o outro objeto se encontra, podendo executar seus métodos.
 * 
 * A forma mais comum de implementar uma associação é ter um objeto como atributo de outro.
 * Conceitualmente, há uma associação entre um produto e seu fabricante em que um produto está relacionado a um fabricante e , por sua vez, um fabricante pode produzir diferentes produtos
 */

 class Fabricante {
    private $nome;
    private $endereco;
    private $documento;


    /**
     * Método construtor
     * @param string
     * @param string
     * @param string
     * @return class
     */

    public function __construct($nome, $endereco, $documento) {
        $this->nome         = $nome;
        $this->endereco     = $endereco;
        $this->documento    = $documento;
    }

    /**
     * Método responsável por retornar o nome
     * @return string
     */

    public function getNome():string {
        return $this->nome;
    }
 } 

 /**
  * A associação entre as classes Produto e Fabricante se estabelece a partir da classe Produtor. A classe produto terá como atributos.
  * Descrição, estoque, preco e fabricante. Enquanto os primeiros são atributos escalares (variáveis escalares são as que contêm integer, float, string ou bloolean), o atributo fabricante é, na verdade, um objeto, ou seja, ele apontará para um objeto da classe Fabricante. Para estabelecer o vínculo (Associação) entre as duas classes, criaremos os métodos setFrabricante() e getFaricante(), sendo o primeiro responsável por receber um objeto da classe Fabricante e armazená-lo internamente na propriedade $this->fabricante e o segundo respnsável por retornar essa propriedade.
  */


  class Produto {
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    /**
     * @param string
     * @param integer
     * @param float
     */

    public function __construct($descricao, $estoque, $preco) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    /**
     * Retora a descrição 
     * @return string
     */

    public function getDescricao():string {
        return $this->descricao;
    }

    /**
     * Define o fabricante
     * @param class
     * @return void
     */

    public function setFabricante(Fabricante $f) {
        $this->fabricante = $f;
    }

    /**
     * Retorna o fabricante
     * @return class
    */

    public function getFabricante() {
        return $this->fabricante;
    }
  }


$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123456789');

//associção
$p1->setFabricante($f1);

print 'A descrição é '.$p1->getDescricao().'<br>'.PHP_EOL;
print 'O fabricante é '.$p1->getFabricante()->getNome().'<br>'.PHP_EOL;
