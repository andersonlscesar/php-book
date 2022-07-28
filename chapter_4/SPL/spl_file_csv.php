<?php
$dados = array(
    array('codigo', 'nome', 'endereco', 'telefone'),
    array('1', 'Maria da Silva', 'Rua da Maria', '(11) 123456789'),
    array('2', 'Pedro Cardoso', 'Rua do Pedro', '(11) 123456789'),
    array('3', 'Joana Pereira', 'Rua da Joana', '(11) 123456789')
);

$file = new SplFileObject('dados.csv', 'w');
$file->setCsvControl(',');

foreach($dados as $linha) {
    $file->fputcsv($linha);
}