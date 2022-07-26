<?php
require_once __DIR__.'/../Classes/CSVParser.php';

$csv = new CSVParser('clientes.csv', ';');

// if($csv->parse()) {
//     while($row = $csv->fetch()) {
//         print $row['Cliente'].'-';
//         print $row['Cidade'].'<br>';
//     }
// } else {
//     print "Erro ao ler o arquivo";
// }

try {
    $csv->parse();
    while($row = $csv->fetch()) {
        print $row['Cliente'].'-';
        print $row['Cidade'].'<br>';
    }
} catch( Exception $e) {
    print $e->getMessage();
}