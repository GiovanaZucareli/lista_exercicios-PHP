<?php

$peso = $_GET ['peso'];
$altura = $_GET ['altura'];


$IMC = $peso/($altura**2);

if ($IMC < 20){
    echo 'ABAIXO DO PESO';
}

if (($IMC >= 20)&&($IMC <=25)){
    echo 'PESO NORMAL';
}

if (($IMC >= 25)&&($IMC <=30)){
    echo 'SOBREPESO';
}

if (($IMC >= 30)&&($IMC <=40)){
    echo 'OBESO';
}

if ($IMC > 40){
    echo 'SOBREPESO';
}











?>
