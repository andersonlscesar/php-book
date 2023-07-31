
$produto = array();
$produto['descricao'] = 'Chocolate';
$produto['estoque'] = 100;
$produto['preco'] = 7;

$obj = new StdClass;

foreach ($produto as $chave => $valor) {
    $obj->$chave = $valor;
}

print_r($obj);