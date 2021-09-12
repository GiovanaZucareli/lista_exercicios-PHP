<?php

$nome = $_GET ['nome'];
$idade = $_GET ['idade'];

if (($idade >=5) && ($idade<=7)){
    echo "O(A) nadador(a) $nome é do grupo INFANTIL A";
    exit();
}

if (($idade >=8) && ($idade<=11)){
    echo "O(A) nadador(a) $nome é do grupo INFANTIL B";
    exit();
}

if (($idade >=12) && ($idade<=13)){
    echo "O(A) nadador(a) $nome é do grupo JUVENIL A";
    exit();
}

if (($idade >=14) && ($idade<=17)){
    echo "O(A) nadador(a) $nome é do grupo JUVENIL B";
    exit();
}





?>
