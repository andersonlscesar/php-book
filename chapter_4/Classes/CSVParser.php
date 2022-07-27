<?php

/**
 * Utilizamos o die() para tratar os erros, porém esse método não é indicado em uso de produção, pois o mesmo para abruptamente a execução do código
 * esse método só deve ser usado em debug.
 * 
 * Também usamos , para exemplificar, flags (FALSE, TRUE) como tratamento de erros, porém no final das contas, temos apenas um retorno genérico do erro 
 * e sem muitos detalhes sobre. Também é uma metodologia não muito recomendada.
 * 
 * Por fim, usaremos as exceptions como tratamento / Lançamento de erros. São métodos mais indicados, tendo em vista que podemos ter mensagens de erros mais precisas.
 * 
 * Também podemos utilizar exceções especializadas. Permitem que façamos tratamentos diferenciados quando ocorrer uma exceção.
 */



class CSVParser {
    private $filename, $data, $header, $counter, $separator;

    public function __construct($filename, $separator = ',') {
        $this->filename = $filename;
        $this->separator = $separator;
        $this->counter = 1;
    }

    public function parse() {
        if(!file_exists($this->filename)) {
            throw new FileNotFoundException("Arquivo {$this->filename} não encontrado");
            // throw new Exception("Arquivo {$this->filename} não encontrado");
            // die("Arquivo {$this->filename} não existe");
            // return FALSE;
        }

        if(!is_readable($this->filename)) {
            throw new FilePermissionException("Arquivo {$this->filename} não pode ser lido");
            // throw new Exception("Arquivo {$this->filename} não pode ser lido");
            // die("Arquivo {$this->filename} sem permissão");
            // return FALSE;
        }
        $this->data = file($this->filename);
        $this->header = str_getcsv($this->data[0], $this->separator);
        return TRUE;
    }

    public function fetch() {
        if(isset($this->data[$this->counter])) {
            $row = str_getcsv($this->data[$this->counter++], $this->separator);
            foreach($row as $key => $value) {
                $row[$this->header[$key]] = $value;
            }

            return $row;
        }
    }
}