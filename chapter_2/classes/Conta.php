<?php
abstract class Conta {
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo) {
        $this->agencia = $agencia;
        $this->conta = $conta;

        if($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    /**
     * Criação de método abstrato para que seja obrigatório a implementação desse método em suas subclasses
     */

    abstract function retirar($quantia);

    public function getInfo() {
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }
    
    public function depositar($quantia) {
        if($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}