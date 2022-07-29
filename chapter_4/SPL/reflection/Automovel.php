<?php
require_once __DIR__.'/Veiculo.php';

class Automovel extends Veiculo {
    private string $placa;
    const RODAS = 4;

    public function setPlaca(string $placa): void {}
    public function getPlaca() {}
}