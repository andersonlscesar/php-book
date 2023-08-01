<?php
require_once __DIR__ . '/classes/Conta.php';
require_once __DIR__ . '/classes/ContaPoupanca.php';
require_once __DIR__ . '/classes/ContaCorrente.php';

$contas = array();
$contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
$contas[] = new ContaPoupanca(6678, "PP.1234.57", 100);

foreach ($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()}" . PHP_EOL;
    print "Saldo  atual: {$conta->getSaldo()}" . PHP_EOL;
    $conta->depositar(200);
    print "Saldo atual: {$conta->getSaldo()}" . PHP_EOL;

    if ($conta->retirar(700)) {
        print "Retirada de: 700" . PHP_EOL;
    } else {
        print "Retirada de: 700 (Não permitida)" . PHP_EOL;
    }
    print "Saldo atual: {$conta->getSaldo()}" . PHP_EOL;
}