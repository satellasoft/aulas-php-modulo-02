<?php
require_once('vendor/autoload.php');

define('VAR_NAME', 'Gunnar');

use app\controller\Controller;

new Controller('teste', [
    'idade' => 18,
    'nome' => 'Adriana',
    'cidades' => [
        'Iepê',
        'Assis',
        'Dracena',
        'Presidente Prudente',
        'Assis'
    ],
    'mensagem' => 'O rato roeu a roupa do rei de roma.',
    'data' => date('Y-m-d H:i:s')
]);
