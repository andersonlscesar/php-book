<?php
require_once __DIR__.'/ProdutoGateway.php';

$data = new stdClass;
$data->descricao = 'Vinho Brasileiro tinto Merlot';
$data->estoque = 8;
$data->preco_custo = 12;
$data->preco_venda = 18;
$data->codigo_barras = '123456789789';
$data->data_cadastro = date('Y-m-d');
$data->origem = 'N';

try {
    $conn = new PDO('');
    $conn->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);
    ProdutoGateway::setConnection($conn);
    $gw = new ProdutoGateway;
    $gw->save($data);
    $produto = $gw->find(1);
    $produto->estoque += 2;
    $gw->save($produto);

    foreach($gw->all("Estoque <= 10") as $produto) {
        print $produto->descricao.'<br>'.PHP_EOL;
    }

} catch(Exception $e) {
    print $e->getMessage();
}