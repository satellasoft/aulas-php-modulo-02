<?php
require_once('vendor/autoload.php');

use App\Controller;

$controller = new Controller();

$dados = [
    'nome' => 'Gunnar Correa'
];

$controller->view('contato/teste.php', $dados);
