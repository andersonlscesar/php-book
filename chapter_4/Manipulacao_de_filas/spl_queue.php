<?php
$ingredientes = new SplQueue();
$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

foreach($ingredientes as $item) {
    print "Item: $item <br>".PHP_EOL;
}

print PHP_EOL;

print $ingredientes->dequeue().'<br>'.PHP_EOL;
print $ingredientes->count().'<br>'.PHP_EOL;
print $ingredientes->dequeue().'<br>'.PHP_EOL;
print $ingredientes->count().'<br>'.PHP_EOL;
print $ingredientes->dequeue().'<br>'.PHP_EOL;
print $ingredientes->count().'<br>'.PHP_EOL;




