<?php

$string = 'sdsds';
$numero = 258;
$bool = true;
$bool2 = false;

//const NOME_COMPLETO = 'Gunnar Correa';
//define('NOME_COMPLETO', 'GUNNAR CORREA');

//echo NOME_COMPLETO;

/*
$jogos = array(
    'Resident Evil',
    'Far Cry 3',
    'Silent Hill'
);
*/

require 'config.php';


require_once 'config.php';

$jogos = [
    'Resident Evil',
    'Far Cry 3',
    'Silent Hill'
];

//echo $jogos[1];

$dados = [
    'nome' => 'Gunnar Correa',
    'email' => 'gunnercorrea@fsfs.com'
];

$clientes = [
    ['Gunnar', 'São paulo'],
    ['Gufdfdnnar', 'São paulo'],
    ['Gutesnnar', 'São paulo'],
    ['eefdfsdf', 'São paulo'],
];

/*
foreach ($clientes as $cliente)
    echo $cliente[0] . '<br>';



for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i][0] . '<br>';
}


$periodo = 'Madrugada';

switch (strtolower($periodo)) {
    case 'manha':
        echo 'Bom dia';
        break;
    case 'tarde':
        echo 'Bom tarde';
        break;
    case 'noite':
        echo 'Boa noite';
        break;
    case 'madrugada':
        echo 'Eae dev';
        break;
    default:
        echo 'periodo inexistente';
}


$idade = 15;

if ($idade >= 18) {
    echo 'Pode entrar';
} elseif ($idade < 18 && $idade >= 16) {
    echo 'Entra com acompanhante.';
} else {
    echo 'Não pode entrar.';
}

*/

//var_dump($clientes[0][1]);

//echo json_encode($dados);

//echo $dados['email'];

//echo soma(5);

function dd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}

function soma($val)
{
    return $val + $val;
}
