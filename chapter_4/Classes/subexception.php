<?php
require_once __DIR__.'/CSVParser.php';

class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

$csv = new CSVParser('../csv/clientes.csv', ';');

try {
    $csv->parse();
     
    while($row = $csv->fetch()) {
        print $row['Cliente'].' - ';
        print $row['Cidade'].'<br>';
    }
} catch(FileNotFoundException $excecao) {
    print_r($excecao->getTrace());
    die("Arquivo não encontrado");
} catch(FileNotFoundException $ex) {
    print_r($excecao->getTrace());
    die("Não permitido ");
}

