<?php

//Nome do arquivo com a ext
$filename = 'academy-satellasoft.txt';

//Verifica se o diretório não existe
if (!is_dir('dados')) {
    //Cria um diretório caso não exista
    mkdir('dados');
}

escrever($filename);

ler($filename);

//Lê o arquivo
function escrever($filename)
{
    $text = 'Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.';

    //Abriu para escrita
    $fp = fopen('dados/' . $filename, 'w');

    //Escreve no arquivo
    fwrite($fp, $text);

    //Fecha o arquivo
    fclose($fp);
}

function ler($filename)
{
    $path = 'dados/' . $filename;

    if (!file_exists($path))
        return;

    //Abre o arquivo para leitura
    $fp = fopen($path, 'r');

    //Lê todos os bytes do arquivos
    $conteudo = fread($fp, filesize($path));

    //Fecha o arquivo
    fclose($fp);

    echo $conteudo;
}
