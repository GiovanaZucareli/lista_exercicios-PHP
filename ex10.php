<?php

$primeiro = $_GET ['primeiro'];
$segundo = $_GET ['segundo'];
$terceiro = $_GET ['terceiro'];


if (($primeiro == $segundo) && ($primeiro == $terceiro)){
    echo('Equilatero');
    exit();
}


if (($primeiro==$segundo) || ($primeiro==$terceiro) || ($segundo==$terceiro)){
    echo('Isósceles');
    exit();
}

if (($primeiro != $segundo)&&($primeiro!=$terceiro)){
    echo('Escaleno');
    exit();
}




?>
