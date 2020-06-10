<?php

//?login=gunnar&senha=34343343&btnlogin=Enviar

//dd($_POST);
//echo $_GET['logado'];

$array = null;

parse_str($_SERVER['QUERY_STRING'], $array);

dd(http_build_query($array));

die();

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_FLOAT);

if (isset($_POST['login']))
    echo $_POST['login'];


function dd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}
