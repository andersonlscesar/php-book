<?php
require_once __DIR__.'/../classes/Conta.php';
require_once __DIR__.'/../classes/ContaPoupanca.php';
require_once __DIR__.'/../classes/ContaCorrente.php';

//Criação dos objetos

$contas = [];
$contas[] = new ContaCorrente(6677, 'CC.1234.56', 100, 500);
$contas[] = new ContaPoupanca(6678, 'CC.1234.57', 100);

foreach($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()} <br>\n";
    print "Saldo Atual: {$conta->getSaldo()} <br>\n";
    $conta->depositar(200);
    print "Depósito de: 200 <br>\n";
    print "Saldo atual: {$conta->getSaldo()}<br>\n";

    if($conta->retirar(700)) {
        print "Retirada de 700 <br>\n";
    } else {
        print "Retirada não permitida <br>\n";
    }
    print "Saldo atual: {$conta->getSaldo()}<br>\n";
}