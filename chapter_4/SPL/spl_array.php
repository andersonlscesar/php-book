<?php
$dados = ['salmão', 'tilápia', 'sardinha', 'badejo', 'pescada', 'dourado', 'corvina', 'cavala', 'bagre'];

$objectArray = new ArrayObject($dados);
//acrescenta
$objectArray->append('Bacalhau');
//obtém a posição 2
print 'Posição 2 '.$objectArray->offsetGet(2).'<br>'.PHP_EOL;
//substitui a posição 2
$objectArray->offsetSet(2, 'Linguado');
//elimina posição 4
$objectArray->offsetUnset(4);

//testa se a posição existe
if($objectArray->offsetExists(10)) {
    echo 'Posição 10 encontrada'.'<br>'.PHP_EOL;
} else {
    echo 'Posição 10 não encontrada <br>'.PHP_EOL;
}

print 'Total: '.$objectArray->count();
$objectArray[] = 'Atum'; // acrescenta
$objectArray->natsort(); // ordena

//percorre dados
 
print '<br>'.PHP_EOL;

foreach ($objectArray as $item) {
    print 'Item: '.$item.'<br>'.PHP_EOL;
}

print $objectArray->serialize();
