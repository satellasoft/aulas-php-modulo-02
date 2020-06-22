<?php
//Criamos um cookie
setcookie('nome', 'Gunnar Correa', time() + 3600, '/');

//Forma alternativa
//$_COOKIE['nome'] = 'teste';

//Destrói a cookie
//setcookie('nome', 'Gunnar Correa', time() - 3600);

//Verifica se o índice existe
if (isset($_COOKIE["nome"])) {
    //Exibe o valor da cookie
    echo $_COOKIE['nome'];
}
