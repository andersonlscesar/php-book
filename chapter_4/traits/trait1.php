<?php
require_once __DIR__.'/Record.php';

class Pessoa extends  Record {
    const TABLENAME = 'pessoas';
}

class Fornecedor extends Record {
    const TABLENAME = 'fornecedores';
}

class Produto extends Record {
    const TABLENAME = 'produtos';
}