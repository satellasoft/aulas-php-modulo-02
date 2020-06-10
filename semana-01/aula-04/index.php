<?php

require_once('pessoa.php');

$pessoa = new Pessoa();

$pessoa->setSalario(1500);

//echo $pessoa->getSalario();

//echo $pessoa->calculaSalario(500);

echo $pessoa->obterDados('Gunnar Correa da Silva Sauro');