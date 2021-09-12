<?php

$name = $_GET['name'];
$nota01 = $_GET['nota01'];
$nota02 = $_GET['nota02'];
$nota03 = $_GET['nota03'];


if ($name==""){
    echo "NOME DO ALUNO INVÁLIDO <br>";
    exit();
}

if ($nota01==""){
    echo "NOTA DO 1ºBIMESTRE INVÁLIDA <br>";
    exit();
}

if ($nota02==""){
    echo "NOTA DO 2ºBIMESTRE INVÁLIDA <br>";
    exit();
}

if ($nota03==""){
    echo "NOTA DO 3ºBIMESTRE INVÁLIDA <br>";
    exit();
}



$media = ($nota01+$nota02+$nota03)/3;

if ($media>7){
    echo "A média do(a) aluno (a): $name é: $media<br>";
    echo "APROVADO(A) <br>";
}else{
    echo "A média do(a) aluno (a): $name é: $media<br>";
    echo "REPROVADO(A) <br>";
}





?>
