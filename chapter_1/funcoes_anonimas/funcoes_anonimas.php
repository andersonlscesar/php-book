<?php
declare(strict_types=1);

/**
 * Função responsável por remover os Acentos
 * Lambda Functions (Funções anônimas) * 
 * @param String
 * @return String
 */


$remove_acento = function(String $str):String {
    $comAcento = [
        'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê',
        'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'à',
        'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ì',
        'í', 'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û', 'ü'
    ];

    $semAcento = [
        'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E',
        'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'a',
        'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'i',
        'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u'
    ];

    return str_replace($comAcento, $semAcento, $str);
};

print $remove_acento('José da Conceição'); // Jose da Conceicao
print '<br>'.PHP_EOL;

$palavrasComAcentos = [];
$palavrasComAcentos[] = 'José da Conceição';
$palavrasComAcentos[] = 'Números';
$palavrasComAcentos[] = 'César';
$palavrasComAcentos[] = 'Ângelo ônix';

/*

Array
(
    [0] => José da Conceição
    [1] => Números
    [2] => César
    [3] => Ângelo ônix

    )
*/

$r = array_map($remove_acento, $palavrasComAcentos);

/*

Array
(
    [0] => Jose da Conceicao
    [1] => Numeros
    [2] => Cesar
    [3] => Angelo onix
)

*/

