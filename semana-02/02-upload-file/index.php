<?php
date_default_timezone_set('America/Sao_Paulo');

$path = 'files/';

if (isset($_FILES['file'])) {
    /*
    [name] => 808c8aa03ac1.4b00.ecad68f.e7b90032e.jpg
    [type] => image/jpeg
    [tmp_name] => C:\xampp\tmp\php84A9.tmp
    [error] => 0
    [size] => 63209 = bytees
*/

    $mime = [
        'image/jpeg',
        'image/png'
    ];

    $rename = true;

    //2MB > Bytes
    $maxSize = 2000000;

    $file = $_FILES['file'];
    /*
    echo '<pre>';
    print_r($file);
    die();
    */

    //Validamos o MIME Type
    $type = mime_content_type($file['tmp_name']);

    if (!in_array($type, $mime)) {
        echo 'MIME Type inválido.';
        return;
    }

    if($file['size'] > $maxSize){
        echo 'O arquivo é grande demais para ser enviado.';
        return;
    }

    $name = $_FILES['file']['name'];

    if ($rename) {
        $ex = explode('.', $file['name']);
        $name = md5(date('dmYHis')) . '.' . end($ex);
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $path . $name);
    echo 'Arquivo enviado...';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadfile</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/*">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>